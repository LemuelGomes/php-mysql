<?php

// Abrindo uma Sessão
session_start();

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$base = 'banhotosa_petshop';


$descricao = $_POST['campo_descprod'];
$valor = $_POST['campo_valorprod']; 
$validade = $_POST['campo_valprod'];
$genero = $_POST['campo_generoprod'];
$tamanho = $_POST['campo_tamprod'];
$unidade = $_POST['campo_unidadeprod'];
$codigo_produto = $_POST['campo_codprod'];

$conexao = new mysqli($servidor, $usuario, $senha, $base);

$sql = 'INSERT INTO tbl_produto(descricao, valor, validade, genero, tamanho, unidade, codigo_produto) VALUES ("' . $descricao . '", ' . $valor . ', "' . $validade . '", "' . $genero . '", "' . $tamanho . '", "' . $unidade . '", "' . $codigo_produto . '");';

if ($conexao->query($sql)) 
{
    // Variável de sessão para REGISTRO OK!
    $_SESSION['mensagem'] = 'Registro inserido com sucesso!';
} 
else 
{
    // Variável de sessão para REGISTRO COM ERRO!
    $_SESSION['mensagem'] = 'Erro ao inserir informações!';
    
    //echo 'Erro: ' . $conexao->error;
}

$conexao->close();

header('Location: index.php');

?>