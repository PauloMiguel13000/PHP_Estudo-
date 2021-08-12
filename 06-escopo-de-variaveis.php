<?php
//escopo global
$nome = "miguel";
$a = 1;
$b = 3;
$c = 7;
function exibeNome()
{
    global $nome;
    echo $nome;
}


exibeNome();
echo "<hr>";

////////////
function exibeCidade(){
    global $cidade;
//escopo local

    $cidade = "Salvador";
}
exibeCidade();
echo $cidade;
echo "<hr>";
///////////////

function soma(){
echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];

}
soma();
