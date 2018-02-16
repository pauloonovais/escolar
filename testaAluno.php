<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 15/02/2018
 * Time: 21:12
 */

include 'Aluno.php';
include 'Professor.php';

$aluno1 = new Aluno();
$aluno1->setNome("Maria da Silva");
$aluno1->setIdade(25);
$aluno1->setSalario(1250.22);


echo $aluno1->getNome();


$p1 = new Professor("João", 2589.88);
echo $p1->getNome() . " ganha R$ " . $p1->getSalario();