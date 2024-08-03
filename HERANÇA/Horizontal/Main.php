<?php

// namespace ;


// ocorre quando usado interfaces, traits.
class Main implements UmHorizontal, DoisHorizontal, TresHorizontal, QuatroHorizontal
{
    use UmTrait, DoisTrait;
    
    public function u(){}
    public function d(){}
    public function t(){}
    public function q(){}
}
