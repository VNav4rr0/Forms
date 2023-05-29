<?php
include_once 'dadoC.php';
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
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
  <a class="navbar-brand text-white" href="#">Forms</a>
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
<div class="col overflow-hidden ">
  <div class="row ">
    <h1 data-aos="fade-down" data-aos-easing="ease-in-out"  data-aos-delay="200">Dados do Cadastro</h1>
    <p data-aos="fade-down" data-aos-easing="ease-in-out"  data-aos-delay="300">Os dados do cadastro serão salvos aqui</p>
  </div>
</div>
<div class="row w-100 r mx-1 overflow-hidden">
  <div class="alert alert-warning d-flex align-items-center" role="alert" data-aos="slide-down" data-aos-easing="ease-in-out"  data-aos-delay="700">
    <lord-icon
    src="https://cdn.lordicon.com/lfqzieho.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e8b730"
    style="width:20px;height:20px" class="ml-2">
  </lord-icon>
  A exclusão ou a edição é uma ação permanentemente... 
  </div>
  </div>
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
      $rows = $result->fetchAll();

      for($i=0; $i < count($rows); $i++){
                                         
        $id = $rows[$i]['id'];
        $nome = $rows[$i]['nome'];
        $endereco = $rows[$i]['endereco'];
        $bairro = $rows[$i]['bairro']; 
        $cidade = $rows[$i]['cidade']; 
        $estado = $rows[$i]['estado']; 
        $cep = $rows[$i]['cep'];   
                                        
          echo '<tr class="bg-dark-subtle">
            <td >'.$id.'</td>
            <td>'.$nome.'</td>
            <td>'.$endereco.'</td>
            <td>'.$bairro.'</td>
            <td>'.$cidade.'</td>
            <td>'.$estado.'</td>
            <td>'.$cep.'</td>
            <td class="bg-dark-subtle d-flex justify-content-center overflow-x-hidden">
              <button data-aos="fade-down" data-aos-easing="ease-in-out"  data-aos-delay="300" class="btn btn-light m-1"><a class="d-flex justify-content-center" href="dado.Edi.php?id='.$id.'">
              <lord-icon
                  src="https://cdn.lordicon.com/nxooksci.json"
                  trigger="hover"
                  colors="primary:#000"
                  style="width:20px;height:20px">
              </lord-icon>
              </a></button>
              <button  data-aos="fade-down" data-aos-easing="ease-in-out"  data-aos-delay="200" class="btn btn-danger m-1 d-flex jutify-content-center" data-bs-toggle="modal" data-bs-target="#del">
              <a  href="Dado.E.php?id='.$id.'" class="d-flex justify-content-center text-light " >
              <lord-icon
                src="https://cdn.lordicon.com/jmkrnisz.json"
                trigger="hover"
                colors="primary:#ffffff"
                state="hover-full"
                style="width:20px;height:20px">
                </lord-icon>
                </a></button>
            </td>
          </tr>';
      }
    ?>                             
  </tbody>
</table>
</div>

</div>
</body>
</html>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>