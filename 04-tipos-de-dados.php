<?php
// Escalares
//string
$nome = "ola corno232332";
var_dump($nome);
if (is_string($nome)) :
    echo "é sim string";
else :
    echo "nop é string";
endif;

echo "<hr>";

//int

$idade = 10;
var_dump($idade);

if (is_int($idade)) :
    echo "é um int";
else :
    echo "nao é int";
endif;
echo "<hr>";
// float
$altura = 123;
var_dump($altura);

if (is_float($altura)) :
    echo "É FLOAT";
else :
    echo "não é float";
endif;
echo "<hr>";

//boolean

$admin = true;
var_dump($admin);
if (is_bool($admin)) :
    echo "é boolean zorra";
else :
    echo "não é boolean";
endif;
echo "<hr>";

/* dados compostos */

$carros = array("chevro", "gol", "uno", 12, 20.6, true);
var_dump($carros);
if (is_array($carros)) :
    echo "é sim doquinha, array";
else :
    echo "n é array n";
endif;
echo "<hr>";

//object
class Cliente
{
    public $nome;
    public function atribuirNome($nome)
    {
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente->atribuirNome("Miguel");
var_dump($cliente);

if (is_object($cliente)) :
    echo "é objeto";
else :
    echo "n é objeto";
endif;

// dados especiais
//null
$cidade = NULL;
var_dump($cidade);

//resource, manipulação de arquivos, e conexao de banco de dados!
