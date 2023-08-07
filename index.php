<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Estilo Pessoal -->
    <link rel="stylesheet" href="css/style.css">

    <title>:: PRODUTO - Banho e Tosa ::</title>
</head>
<body>

<div id="form_produto">

<form class="row g-3" action="mysql.php" method="POST">

  <div class="col-4">
    <label for="" class="form-label">Código do Produto</label>
    <input type="text" name="campo_codprod" class="form-control" id="" placeholder="">
  </div>

  <div class="col-8">
    <label for="" class="form-label">Descrição</label>
    <input type="text" name="campo_descprod" class="form-control" id="" placeholder="">
  </div>

  <div class="col-6">
    <label for="" class="form-label">Valor</label>
    <input type="text" name="campo_valorprod" class="form-control" id="" placeholder="">
  </div>

  <div class="col-6">
    <label for="" class="form-label">Validade</label>
    <input type="text" name="campo_valprod" class="form-control" id="" placeholder="">
  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Gênero</label>
    <select name="campo_generoprod" id="" class="form-select">
      <option selected>Escolha um gênero...</option>
      <option>Macho</option>
      <option>Fêmea</option>
    </select>
  </div>

  <div class="col-4">
    <label for="" class="form-label">Tamanho</label>
    <input type="text" name="campo_tamprod" class="form-control" id="" placeholder="">
  </div>

  <div class="col-4">
    <label for="" class="form-label">Unidade</label>
    <input type="text" name="campo_unidadeprod" class="form-control" id="" placeholder="">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-success">Cadastrar</button>

    <?php
      // Abrindo uma Sessão
      session_start();

      if (isset($_SESSION['mensagem'])) 
      {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
      }
    ?>

  </div>

</form>

</div>

</body>
</html>