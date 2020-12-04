<?php
    sleep(2);
    session_start();
    session_destroy();
    header('location: ../index.php');
?>