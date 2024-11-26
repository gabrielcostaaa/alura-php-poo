<?php 

require __DIR__ . "/src/Model/filme.php";

echo "Bem vindo ao ScreenMatch\n";

$filme = new Filme(
    'Thor',
    2022,
    'aventura'
);

var_dump($filme);

echo $filme -> getNome();










?>