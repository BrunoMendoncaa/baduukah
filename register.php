<?php
  session_start();
  if($_SESSION == NULL){
    header('location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Baduukah IPTV - cadastro</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <?php
        if($_SESSION['add'] == 'sim'){
          $txt = "<h5 style='";

          $txt = $txt . "text-align:center;";
          $txt = $txt . "text-shadow: 1px 1px 1px black;";
          $txt = $txt . "color: green;'>";

          $txt = $txt . "CLIENTE CADASTRADO COM SUCESSO !";
          $txt = $txt . "</h2>";

          echo $txt;
        }
      ?>
      <div class="card-header">NOVO CLIENTE</div>
      
      <div class="card-body">
        <form method="POST" action="php/addUser.php">

        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">NOME</label>
                <input class="form-control" id="nome" name="nome" type="text" aria-describedby="nameHelp" placeholder="nome do usuario">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">CPF</label>
                <input class="form-control" id="cpf" name="cpf" type="text" aria-describedby="nameHelp" placeholder="cpf">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">ENDEREÇO</label>
            <input class="form-control" id="end" name="end" type="text" aria-describedby="emailHelp" placeholder="endereço">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">CEP</label>
                <input class="form-control" id="cep" name="cep" type="text" placeholder="cep">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">VALOR</label>
                <input class="form-control" id="valor" name="valor" type="text" placeholder="valor do plano">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">VENCIMENTO</label>
                <input class="form-control" id="venc" name="venc" type="text" aria-describedby="nameHelp" placeholder="vencimento">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">APLICATIVO</label>
                <input class="form-control" id="app" name="app" type="text" aria-describedby="nameHelp" placeholder="nome do aplicativo">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">CÓDIGO DO APLICATIVO</label>
            <input class="form-control" id="codapp" name="codapp" type="text" aria-describedby="emailHelp" placeholder="código do app">
          </div>

          <input type="submit" class="btn btn-primary btn-block" value="REGISTRAR"/>
          <input type="button" class="btn btn-primary btn-block" value="VOLTAR" onclick="location.href='menu.php'"/>
        </form>

      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
