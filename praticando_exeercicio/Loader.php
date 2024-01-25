<?php

abstract class Loader
{
    // faz o papel de construtor quando mesmo nome
    public static function Loader()
    {
        return spl_autoload_register(function ($class_name) {
            include $class_name . '.php';
        });
    }
}
