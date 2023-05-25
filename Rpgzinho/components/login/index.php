<?php
include('../../php/conexao.php');
if(isset($_POST['usuario']) || isset($_POST['senha'])){
    if(strlen($_POST['usuario'] == 0)){
        echo "Preencha seu usuario";
    }
    else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }
    else{
        $user = $mysqli->real_escape_string($_POST['usuario']);
        $senhas = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE usuario = '$user' AND senha = '$senhas'";
        $sql_query = $mysqli->query($sql_code) or die ("Erro");

        $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['username'] = $usuario['usuario'];

            header("Location: ../../index.php");
        }
        else{
            echo "Falha ao logar, email ou senha incorreto";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG DOS CRIAS</title>
    <link rel="icon" href="../../src/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div>
            <a href="../../index.php"><img src="../../src/logo.png" /></a>
            <form action="" method="POST">
                <label>Usuario</label>
                <input type="text" name="usuario" placeholder="Usuario...">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Senha...">
                <button type="submit">Entrar</button>

            </form>
        </div>
        <a href="../cadastro/index.php">Cadastrar</a>
        
    </main>
    
</body>
</html>