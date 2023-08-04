<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style.css">

<title>:: Banho e Tosa ::</title>

</head>

<body>

<div id="cad-produto">

<form class="row g-3" action="mysql.php" method="POST">
  
<div class="col-4">
    <label for="" class="form-label">Código do Produto:</label>
    <input type="text" class="form-control" id="" placeholder="">
</div>

<div class="col-8">
    <label for="" class="form-label">Descrição:</label>
    <input type="text" class="form-control" id="" placeholder="">
</div>

<div class="col-6">
    <label for="" class="form-label">Valor:</label>
    <input type="text" class="form-control" id="" placeholder="">
</div>

<div class="col-6">
    <label for="" class="form-label">Validade:</label>
    <input type="text" class="form-control" id="" placeholder="">
</div>
    
<div class="col-md-4">
    <label for="inputState" class="form-label">Gênero</label>
    <select id="inputState" class="form-select">
      <option selected>Escolha um gênero:</option>
      <option>Masculino</option>
      <option>Feminino</option>
    </select>
</div>
    
<div class="col-md-4">
    <label for="" class="form-label">Tamanho:</label>
    <input type="text" class="form-control" id="" placeholder="">
</div>

<div class="col-md-4">
    <label for="" class="form-label">Idade:</label>
    <input type="text" class="form-control" id="" placeholder="">
</div>

<div class="col-12">
    <button type="submit" class="btn btn-success">Cadastrar</button>
</div>
    
</body>
</html>