<?php

function init (){
    $value = $_SESSION['id'];
    include("conexao.php");
    $sql_code = "SELECT * FROM herois WHERE id_usuario = '$value' ";
    $sql_query = $mysqli->query($sql_code) or die ("Erro");
    
    if($sql_query->num_rows == 0){
        echo "<script> const button = document.getElementById(\"bt\"); button.style.display= \"block\"; </script>";
    }
   
    

}