<?php

class Banco
{

    // corrente = 50 reais
    // poupança inicia com 150 reais
    // inteiro
    public int $numConta;
    // cc = conta corrente e cp conta corrente
    // caracter
    protected String $tipo;
    // caracteres 
    private String $dono;
    // real
    private int $saldo;

    // status em bool
    private bool $status;

    public function __construct()
    {
        // construtor define as 'variaveis' quando um objeto é instanciado
        $this->status = false;
        $this->saldo = 0;
    }

    /**
     * Abrir conta, nessecita tipo e nome do cliente
     *
     * @param string $tipo_conta
     * @param string $nome_dono
     * @return void
     */
    public function abrirConta($tipo_conta, $nome_dono)
    {
        $this->setDono($nome_dono);
        $this->setTipo($tipo_conta);
        $this->setStatus(true);
        // gerar num conta
        $this->setNumConta(random_int(1, 100));
    }

    public function fecharContar()
    {

        if ($this->saldo > 0) {
            return "Não é possivel fechar uma conta sem estar vazia ou negativada";
        } else if ($this->status < 0) {
            return "Conta em débito";
        }
        $this->setStatus(false);
    }

    // status precisa ser true
    public function depositar($valor_deposito)
    {
        // se conta nao ativa retorne
        if (!$this->status) {
            return "Status conta inativa";
        }
        $this->saldo += $valor_deposito;
        return "Dinheiro depositado com sucesso, valor atual: {$this->getSaldo()}";
    }

    // status precisa ser true
    public function sacar($valor_sacar)
    {
        if (!$this->status) {
            return "Status conta inativa";
        }

        $valorAtual = $this->getSaldo();

        if ($valorAtual < $valor_sacar) {
            return "Saldo Indisponivel!";
        }

        $valorAtual -= $valor_sacar;
        $this->saldo = $valorAtual;
        return "Dinheiro sacado com sucesso, valor atual: {$valorAtual}";
    }

    // cc 12 reais e cp 20 reais
    public function pagarMensal()
    {
        $valorAtual = $this->getSaldo();
        if ($this->tipo == "Conta Corrente") {
            $valorAtual -= 12;
        } else if ($this->tipo == "Conta Poupança") {
            $valorAtual -= 20;
        }
        $this->saldo = $valorAtual;
    }

    // att especiais com getters e setters
    public function setNumConta($novo_num)
    {
        $this->numConta = $novo_num;
    }
    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        if ($tipo == "cc") {
            $this->setSaldo(50);
        } elseif ($tipo == "cp") {
            $this->setSaldo(150);
        }

        return;
    }
    public function getTipo()
    {
        switch ($this->tipo) {
            case "cc":
                return $this->tipo = "Conta Corrente";
            case "cp":
                return $this->tipo = "Conta Poupança";
            default:
                return "Conta indefinida!";
        };
    }
    public function setDono($nome_dono)
    {
        $this->dono = $nome_dono;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setSaldo($valor)
    {
        $this->saldo += $valor;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
}
