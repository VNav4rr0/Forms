
<?php
    //arquivo para realizar a atualização dos dados do cliente

    //inclui o arquivo conexao.php
    include_once "dadoC.php";

    $id = $_GET['id']; //acessando o id pela url usando o método GET e atribuindo a variável $id

    $sqlSelect = "SELECT * FROM clientes WHERE id = $id"; //comando sql que exibe as informações apenas do registro específico

    //executação do comando SQL
    $result = $PDO->query($sqlSelect);

    //Atribuindo o resultado dos objetos a variável $result e depois a variável $row
    $row = $result->fetchObject();

    if(isset($_POST['editar'])){

        //atribuição ao que o usuário escrever no formulário para as variáveis
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];

        /*comando SQL para editar os registros do id específico
          o conteúdo das variáveis serão os novos registros e irão para seu campo específico no banco de dados*/
        $sql = "UPDATE clientes SET nome='$nome', endereco='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep' WHERE id = $id";

        //executação do comando SQL
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
    <title>Document</title>
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

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
<div class="col">
  <div class="row">
    <h1>Atualizar Dados</h1>
  </div>
</div>
<br>
    <form method="POST" >
    <div class="mb-3">
  <label for="exampleFormControlInput1"  class="form-label text-white">Nome
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px">
</lord-icon>
  </label>
  <input type="text" class="form-control  text-white" name="nome" id="nome" required><br>

  <label for="exampleFormControlInput1" class="form-label text-white">Endereço
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px">
</lord-icon>
  </label>
  <input type="text" class="form-control  text-white" name="endereco" id="endereco" required><br>

  <label for="exampleFormControlInput1" class="form-label text-white">Bairro
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px">
</lord-icon>
  </label>
  <input type="text" class="form-control  text-white" name="bairro" id="bairro" required><br>

  <label for="exampleFormControlInput1" class="form-label text-white">CEP
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px">
</lord-icon>
  </label>
  <input type="number" class="form-control  text-white" name="cep" id="cep" required><br>

  <label for="exampleFormControlInput1" class="form-label text-white">Cidade
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px">
</lord-icon>
  </label>
  <input type="text" class="form-control  text-white" name="cidade" id="cidade" required><br>
  
  <label for="exampleFormControlInput1" class="form-label text-white">Estado
  <lord-icon
    src="https://cdn.lordicon.com/dycatgju.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e4e4e4"
    style="width:15px;height:15px">
</lord-icon>
  </label>
  <select class="form-select  text-white" aria-label="Default select example" name="estado" id="estado" required>

  <option value="sp">SP</option>
  <option value="rj">RJ</option>
  <option value="se">SE</option>
  <option value="ba">BA</option>
  
</select><br>
<button type="submit" value="Editar" name="editar" id="cadastrar" id="liveAlertBtn" class="btn btn-light d-flex align-items-center justify-content-between ps-4 pe-3 icooop">
    Atualizar  
    <lord-icon
    src="https://cdn.lordicon.com/nxooksci.json"
    trigger="loop"
    delay="1010"
    colors="primary:#000000"
    style="width:20px;height:20px" class="m-1">
</lord-icon></button>
</div>
    </form>
    <div class="col">
  <div class="row w-100"><h6>A atualização do dado sera permanentemente...</h6></div>
</div>
</div>

</body>
</html>
