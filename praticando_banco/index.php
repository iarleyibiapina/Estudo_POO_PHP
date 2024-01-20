<?php
require_once __DIR__ . '/Banco.php';

$contaBanco = new Banco();
$contaCorrente = "cc";
$contaPoupança = "cp";
$clienteBanco = "José Enéas";


$contaBanco->abrirConta($contaPoupança, $clienteBanco);
// $contaBanco->abrirConta($contaCorrente);
echo "Tipo conta: {$contaBanco->getTipo()} <br>";
echo "Numero da conta: {$contaBanco->getNumConta()} <br>";
echo "Dono da conta: {$contaBanco->getDono()} <br>";
// 
echo "Pegando saldo ao criar conta: {$contaBanco->getSaldo()} <br>";
// 
echo "Irei depositar R$100 reais na conta. <br>";
$contaBanco->depositar(100);
echo "Pegando saldo depois de adicionar a conta: {$contaBanco->getSaldo()} <br>";
// 
echo "Irei sacar R$2500 reais na conta. <br>";
echo $contaBanco->sacar(2500) . "<br>";
echo "Digitei errado, queria sacar R$25 reais na conta. <br>";
echo $contaBanco->sacar(25) . "<br>";
// 
echo "Status conta: {$contaBanco->getStatus()} <br>";
// 
echo "Pagando o mensal...";
echo $contaBanco->pagarMensal();
echo "Valor após pagar o mensal: {$contaBanco->getSaldo()} <br>";
// 
echo "Fechando a conta...";
// se eu sacar o valor total e a conta chegar a 0, a conta pode ser fechada
// echo $contaBanco->sacar(113);
$contaBanco->fecharContar();
echo "Status após fechar a conta: {$contaBanco->getStatus()} <br>";
// se conta fechada e tentar deposita, erro de conta inativa
// echo $contaBanco->depositar(100);

?>

<pre>
    <?php
    print_r($contaBanco);
    ?>
</pre>