<?php
    include 'conectar.php';

    $sql = $nConn->prepare("SELECT * FROM clientes");
    $sql->execute();

    $res = $sql->fetchAll();
    
    $clientes = "";
    foreach($res as $row){
        $clientes = $clientes . "<tr>";
        $clientes = $clientes . "<th>" . $row[0] . "</th>";
        $clientes = $clientes . "<th>" . $row[1] . "</th>";
        $clientes = $clientes . "<th>" . $row[2] . "</th>";
        $clientes = $clientes . "<th>" . $row[3] . "</th>";
        $clientes = $clientes . "<th>" . $row[4] . "</th>";
        $clientes = $clientes . "<th>" . $row[5] . "</th>";
        $clientes = $clientes . "<th>" . $row[6] . "</th>";
        $clientes = $clientes . "<th>" . $row[7] . "</th>";
        $clientes = $clientes . "<th>" . $row[8] . "</th>";
        $clientes = $clientes . "<th>" . $row[9] . "</th>";
        $clientes = $clientes . "</tr>";
    }
?>