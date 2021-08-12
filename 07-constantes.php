<?php 
//constantes
define("NOME", "Miguel");
define("IDADE",24);
define("ALTURA",1.84);
define("CASADO", true);

define("TIMES", ['vasco','fla','santos']);
echo 'Meu nome é '.NOME.' minha idade '.IDADE.' altura '.ALTURA.' e sou casado '.CASADO;
echo "<hr>";
echo TIMES[2];
var_dump(TIMES);

function exibeNome(){
    echo NOME;
}
exibeNome();