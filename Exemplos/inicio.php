<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 15/02/2018
 * Time: 19:37
 */
echo "<h1>Olá mundo</h1>";
echo date("d/m/Y");
$nome = "João";
$sexo = 'M';
$idade = 25;
$salario = 1200.55;
echo "<br>";
echo "<br>";
echo "<br>";
echo "O funcionário " . $nome . " tem " . $idade . " anos,";
if ($idade >= 18){
    echo " é maior de idade!";
} else {
    echo " é menor de idade!";
}