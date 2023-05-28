<?php
include_once("dadoC.php")
?>

<!DOCTYPE html >
<html lang="en" data-bs-theme="dark">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

        <title>PHP - Sistema de Acesso ao Banco de Dados</title>
</head>
<body>
<?php
    $sql = "SELECT * FROM clientes";
    $result = $PDO->query( $sql );
    $rows = $result->fetchAll();
?>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary rounded-bottom-1">
  <div class="container-fluid">
  <a class="navbar-brand text-white" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a style="color:#fff;" class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
        <a class="nav-link disabled">Consultar</a>
      </div>
    </div>
  </div>
</nav>
<br>
    <div class="table-responsive ">
    <table class="table text-white table-bordered border border-secondary" >
  <thead>
    <tr>
      <th class=" border-0 bg-secondary d-flex justify-content-center"scope="col"><span class="material-symbols-outlined">table_chart</span></th>
      <th class=" border-0 bg-body-secondary"scope="col">Nome</th>
      <th class=" border-0 bg-body-secondary"scope="col">Endereço</th>
      <th class=" border-0 bg-body-secondary"scope="col">Bairro</th>
      <th class=" border-0 bg-body-secondary "scope="col">Cep</th>
      <th class=" border-0 bg-body-secondary "scope="col">Cidade</th>
      <th class=" border-0 bg-body-secondary"scope="col">Estado</th>
      <th class=" border-0 bg-dark-subtle d-flex justify-content-center"scope="col"><span class="material-symbols-outlined">
edit_note
</span></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sql = "SELECT * FROM clientes";
    $result = $PDO->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
    ?>
    <tr>
      <th class="bg-secondary" scope="row"> <?php echo $row['id']; ?></th>
    
      
        <td class=" border-0">
        <?php echo $row['nome']; ?>
        </td>
      <td class=" border-0">
      <?php echo $row['endereco']; ?>
        </td>
      <td class=" border-0">
      <?php echo $row['bairro']; ?>
      </td>
      <td class=" border-0">
      <?php echo $row['cep']; ?>
      </td>
      <td class=" border-0">
      <?php echo $row['cidade']; ?>
      </td>
      <td class=" border-0">
      <?php echo $row['estado']; ?>
      </td>
      <td class="bg-dark-subtle d-flex justify-content-center">
      <button type="button" class="btn  btn-outline-secondary d-flex justify-content-center m-1" data-toggle="modal">
        <lord-icon
          src="https://cdn.lordicon.com/akuwjdzh.json"
          trigger="hover"
          colors="primary:#fff"
          style="width:32px;height:32px">
        </lord-icon>
</button>
      <button type="button" class="btn btn-danger d-flex justify-content-around m-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
      <lord-icon
    src="https://cdn.lordicon.com/kfzfxczd.json"
    trigger="hover"
    colors="primary:#fff"
    state="hover-full"
    style="width:32px;height:32px">
</lord-icon>
      </button>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
  
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">
        <lord-icon
    src="https://cdn.lordicon.com/wdqztrtx.json"
    trigger="loop"
    delay="2000"
    colors="primary:#ffffff"
    style="width:32px;height:32px">
</lord-icon>
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          A exclusão de dado é uma ação permanente.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="btn" class="btn btn-danger" id="id" ><a class="nav-link" href='dado.E.php?id ="'.$id.'">Excluir</a></button>
      </div> 
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>