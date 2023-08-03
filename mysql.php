<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$base = 'banhotosa_petshop';

$descricao = 'Shampoo';
$valor = 20;
$validade = '05/08/2023';
$genero = '';
$tamanho = '250ml';
$unidade = 'ml';
$codigo_produto = 'SHNE250'


$conexao = new mysqli($servidor, $usuario, $senha, $base)

$sql = 'INSERT INTO tbl_produtos(descricao, valor, validade, genero, tamanho, unidade, codigo_produto) VALUES ("' . $descricao .'", ' . $valor .', "' . $validade .'", "' . $genero .'", "' . $tamanho .'", "' . $unidade .'", "' . $codigo_produto .'");';

$conexao->query($sql);

if($conexao->query($sql))
{
    echo 'Parabéns, você ganhou um lápis!';
}
else
{
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();

?>