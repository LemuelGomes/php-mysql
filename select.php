<?php

// Abrindo uma Sessão
session_start();

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$base = 'banhotosa_petshop';

$conexao = new mysqli($servidor, $usuario, $senha, $base);

$sql = 'SELECT * FROM tbl_produto;';
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0)
{   
    while($linhas = $resultado->fetch_assoc()) 
    {
      echo 'id: ' . $linhas["id"] . ' - Descrição: ' . $linhas["descricao"] . ' - Valor: ' . $linhas["valor"] . ' - Validade: ' . $linhas["validade"] . "<br>";
    }
} 
else 
{
    echo "0 results";
}

$conexao->close();

header('Location: index.php');

?>