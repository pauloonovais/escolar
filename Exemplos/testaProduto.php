<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 16/02/2018
 * Time: 19:37
 */

include 'vendor\autoload.php';

$p1 = new Vendas\Produto();
$p1->setNome("Sabão em pó");
$p1->setValor(6.00);
$p1->setQuantidade(12);

echo "Existem {$p1->getQuantidade()} unidades do produto {$p1->getNome()} no valor de R$ {$p1->getValor()} cada unidade";

$v1 = new Vendas\Venda();
$v1->setId(2);