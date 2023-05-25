<?php
    $id = $_SESSION['id'];
    include("../../php/conexao.php");
    $sql = "INSERT INTO herois (id_usuario, id_heroi, nivel) VALUES ($id, $heroi , 1)";
    if(mysqli_query($mysqli, $sql)){
        header("Location: ../../index.php");
    }
    else{
        echo "Não foi cadastrado ";
    }
