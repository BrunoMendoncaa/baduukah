<?php
    sleep(2);
    session_start();
    include 'conectar.php';

    $nome =     $_POST['nome'];
    $cpf =      $_POST['cpf'];
    $endereco = $_POST['end'];
    $cep =      $_POST['cep'];
    $valor =    $_POST['valor'];
    $venc =     $_POST['venc'];
    $app =      $_POST['app'];
    $codapp =   $_POST['codapp'];
    $pgto =     'pendente';
    $sql = $nConn->prepare("INSERT INTO clientes (nome,cpf,endereco,cep,valor,vencimento,app,codapp,pgto) values (:n,:c,:e,:cc,:v,:vv,:a,:ccc,:p)");

    $sql->bindValue(":n"    , $nome);
    $sql->bindValue(":c"    , $cpf);
    $sql->bindValue(":e"    , $endereco);
    $sql->bindValue(":cc"   , $cep);
    $sql->bindValue(":v"    , $valor);
    $sql->bindValue(":vv"   , $venc);
    $sql->bindValue(":a"    , $app);
    $sql->bindValue(":ccc"  , $codapp);
    $sql->bindValue(":p"    , $pgto);

    $sql->execute();
    $_SESSION['add'] = 'sim';
    header('location: ../register.php');
?>