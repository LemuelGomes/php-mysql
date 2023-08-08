<?php

// Abrindo uma Sessão

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$base = 'banhotosa_petshop';

$conexao = new mysqli($servidor, $usuario, $senha, $base);

$sql = 'SELECT * FROM tbl_produto;';
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0)
{   
      echo '<table class="table">';
      echo '<thead>';
      echo '<tr>';
        echo '<th scope="col">ID</th>';
        echo '<th scope="col">DESCRIÇÃO</th>';
        echo '<th scope="col">VALOR</th>';
        echo '<th scope="col">VALIDADE</th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';
    
    while($linhas = $resultado->fetch_assoc()) 
    {
      //echo 'id: ' . $linhas["id"] . ' - Descrição: ' . $linhas["descricao"] . ' - Valor: ' . $linhas["valor"] . ' - Validade: ' . $linhas["validade"] . "<br>";
           
      echo '<tr>';
        echo '<th scope="row">' . $linhas["id"] . '</th>';
        echo '<td>' . $linhas["descricao"] . '</td>';
        echo '<td>' . $linhas["valor"] . '</td>';
        echo '<td>' . $linhas["validade"] . '</td>';
      echo '</tr>';       
    }
      echo '</tbody>';
      echo '</table>';
} 
else 
{
    echo "0 results";
}

$conexao->close();

//header('Location: index.php');

?>