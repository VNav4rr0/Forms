
<?php

   
    include_once "dadoC.php";

    $id = $_GET['id']; 

    $sqlSelect = "SELECT * FROM clientes WHERE id = $id"; 
   
    $result = $PDO->query($sqlSelect);

    
    $row = $result->fetchObject();

    if(isset($_POST['editar'])){

        
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];

      
        $sql = "UPDATE clientes SET nome='$nome', endereco='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep' WHERE id = $id";

        
        $result = $PDO->query($sql);

        if($result){
            header("Location: consultar.php");
        }else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Não foi possivel cadastrar o cliente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
        }
    }
     
?>
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
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

</head>
<body>
<div class="container pb-5">
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary rounded-bottom-1">
  <div class="container-fluid">
  <a class="navbar-brand text-white" href="#">Forms</a>
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
<div class="col overflow-y-hidden ">
  <div class="row w-100">
    <h1 data-aos="fade-down" data-aos-easing="ease-in-out"  data-aos-delay="200">Atualizar Dados</h1>
  </div>
</div>
<br>
    <form method="POST" >
    <div class="pb-5 px-1b-3 overflow-hidden">
  <label for="exampleFormControlInput1"  class="form-label text-white overflow-hidden" data-aos="zoom-out-right">Nome
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="300">
</lord-icon>
  </label>
  <input type="text" class="form-control  text-white " name="nome" id="nome"  value="<?php echo $row -> nome;?>" required><br>

  <label for="exampleFormControlInput1" class="form-label text-white overflow-hidden" data-aos="zoom-out-right">Endereço
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="300">
</lord-icon>
  </label>
  <input type="text" class="form-control  text-white " name="endereco" id="endereco" required  value="<?php echo $row -> endereco;?>"><br>

  <label for="exampleFormControlInput1" class="form-label text-white overflow-hidden" data-aos="zoom-out-right">Bairro
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="300">
</lord-icon>
  </label>
  <input type="text" class="form-control  text-white " name="bairro" id="bairro" required  value="<?php echo $row -> bairro;?>"><br>

  <label for="exampleFormControlInput1" class="form-label text-white overflow-hidden" data-aos="zoom-out-right">CEP
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="300">
</lord-icon>
  </label>
  <input type="number" class="form-control  text-white " name="cep" id="cep" required  value="<?php echo $row -> cep;?>"><br>

  <label for="exampleFormControlInput1" class="form-label text-white overflow-hidden" data-aos="zoom-out-right">Cidade
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="300">
</lord-icon>
  </label>
  <input type="text" class="form-control  text-white" name="cidade" id="cidade" required value="<?php echo $row -> cidade;?>"><br>
  
  <label for="exampleFormControlInput1" class="form-label text-white overflow-hidden" data-aos="zoom-out-right"  >Estado
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="300">
</lord-icon>
  </label>
  <select class="form-select  text-white" aria-label="Default select example" name="estado" id="estado" required  value="<?php echo $row -> estado;?>">

  <option value="sp">SP</option>
  <option value="rj">RJ</option>
  <option value="se">SE</option>
  <option value="ba">BA</option>
  
</select><br>
<button  data-aos="fade-up" data-aos-easing="ease-in-out"  data-aos-delay="200" type="submit" value="Editar" name="editar" id="cadastrar" id="liveAlertBtn" class="btn btn-light d-flex align-items-center justify-content-between ps-4 pe-3 icooop">
    Atualizar  
    <lord-icon
    src="https://cdn.lordicon.com/nxooksci.json"
    trigger="loop"
    delay="1010"
    colors="primary:#000000"
    style="width:20px;height:20px" class="m-1" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="300">
</lord-icon></button>
</div>
    </form>
</div>

</body>
</html>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>