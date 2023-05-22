<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary rounded-bottom-1">
  <div class="container-fluid">
  <a class="navbar-brand text-white" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a style="color:#fff;" class="nav-link active" aria-current="page" href="#">Cadastrar</a>
        <a href="consultar.php" class="nav-link ">Consultar</a>
      </div>
    </div>
  </div>
</nav>
<br>
    <form action="dado.php" method="POST" >
    <div class="mb-3">
  <label for="exampleFormControlInput1"  class="form-label text-white">Nome</label>
  <input type="text" class="form-control  text-white" name="nome" id="nome" ><br>

  <label for="exampleFormControlInput1" class="form-label text-white">Endereço</label>
  <input type="text" class="form-control  text-white" name="endereco" id="endereco" ><br>

  <label for="exampleFormControlInput1" class="form-label text-white">Bairro</label>
  <input type="text" class="form-control  text-white" name="bairro" id="bairro" ><br>

  <label for="exampleFormControlInput1" class="form-label text-white">CEP</label>
  <input type="number" class="form-control  text-white" name="cep" id="cep" ><br>

  <label for="exampleFormControlInput1" class="form-label text-white">Cidade</label>
  <input type="text" class="form-control  text-white" name="cidade" id="cidade" ><br>

  <label for="exampleFormControlInput1" class="form-label text-white">ID</label>
  <input type="text" class="form-control  text-white" name="id" id="id" ><br>
  
  <label for="exampleFormControlInput1" class="form-label text-white">Estado</label>
  <select class="form-select  text-white" aria-label="Default select example" name="estado" id="estado">

  <option value="sp">SP</option>
  <option value="rj">RJ</option>
  <option value="se">SE</option>
  <option value="ba">BA</option>
  
</select><br>
<button type="submit" class="btn btn-light d-flex align-items-center justify-content-between ps-4 pe-3">Cadastrar <span class="material-symbols-outlined ps-1 pe-2">
done
</span></button>
</div>
    </form>
</div>
</body>
</html>
