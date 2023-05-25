<?php
include('../../php/protect.php');
if(!isset($_SESSION['id'])){
    die("Você não pode acessar está página porque não está logado . <p><a href=\"components/login/index.php\">Logar</a></p>");
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="src/logo.png" type="image/png">
    <title>RPG DOS CRIA</title>
</head>
<body>
    <header>
        <div class="conteiner">
            <a href="../../index.php"><img src="../../src/logo.png"/></a>
            <div>
                <ul>
                    <li><?php echo $_SESSION['username'];?></li>
                    <li><a href="../game/index.php">Jogar</a></li>
                    <li><a href="../../php/logout.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <script src="js/statusClass.js"></script>
</body>
</html>