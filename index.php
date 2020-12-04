<?php
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Baduukah IPTV - login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      
      <?php
        if($_SESSION != NULL){
          if($_SESSION['login'] == 'falha'){
            $txt = "<h5 style='";

            $txt = $txt . "text-align:center;";
            $txt = $txt . "font-size:12pt;";
            $txt = $txt . "color:red;'>";

            $txt = $txt . "USUARIO E/OU SENHA INVALIDO!";
            $txt = $txt . "</h5>";

            echo $txt;
          }
        }
      ?>

      <div class="card-header">Entrar</div>
      <div class="card-body">

        <form method="POST" action="php/login.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input required="" class="form-control" id="user" name="user" type="text" aria-describedby="emailHelp" placeholder="usuario">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input required="" class="form-control" id="pass" name="pass" type="password" placeholder="Senha">
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Entrar"/>
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
