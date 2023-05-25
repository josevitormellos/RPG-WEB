<?php
    include("conexao.php");
    $nome = $_POST['usuario'];
    $senha = $_POST['senha'];
    $confS = $_POST['confS'];
    $email = $_POST['email'];

    $sql_code = "SELECT usuario FROM usuario WHERE usuario = '$nome' OR email = '$email'";
    $sql_query = $mysqli->query($sql_code) or die ("Erro");

    if($senha != $confS){
        echo "Senha não bate com a confirmação de senha";
    }
    else if ($sql_query->num_rows > 0){
        echo "Email ou Usuario já é cadastrado tente outra vez";
        
    }
    else{
        $sql = "INSERT INTO usuario (usuario, senha, email) VALUES ('$nome', '$senha', '$email')";
        if(mysqli_query($mysqli, $sql)){
            header("Location: ../components/login/index.php");
        }
        else{
            echo "Não foi cadastrado ";
        }
    }
    
?>