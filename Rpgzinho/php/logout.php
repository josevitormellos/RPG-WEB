<?php
if(!isset($_SESSION)){
    session_start();
}

session_destroy();

header("Location: ../components/login/index.php");
?>