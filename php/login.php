<?php
    session_start();
    include 'conectar.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = $nConn->prepare("SELECT * FROM login WHERE user = :u AND pass = :p");
    $sql->bindValue(":u" , $user);
    $sql->bindValue(":p" , md5($pass));
    $sql->execute();

    if($sql->rowcount() > 0){
        sleep(2);
        $res = $sql->fetchAll();
        foreach($res as $row){
            $_SESSION['name'] = $row[1];
            $_SESSION['user'] = $row[2];
            $_SESSION['login'] = 'sucess';
        }

        header('location: ../menu.php');
    }else{
        sleep(2);
        $_SESSION['login'] = 'falha';
        header('location: ../index.php');
    }

?>