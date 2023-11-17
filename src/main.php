<?php 
    include_once __DIR__."/../vendor/autoload.php";

    use App\model\Pessoa;

    $p = new  Pessoa("João <br> ", 17);
    $n = new  Pessoa("Huginho", 23);

    echo $p-> nome;
    echo $n-> nome;