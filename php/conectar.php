<?php
    try{
        $nConn = new PDO("mysql:dbname=baduukah;host=localhost","root","");
    }catch(PDOException $e){
        echo "Falha: " . $e->getMessage();
    }
?>