<?php
include('../../php/protect.php');
include('../../php/game.php');
if(!isset($_SESSION['id'])){
    die("Você não pode acessar está página porque não está logado . <p><a href=\"../login/index.php\">Logar</a></p>");
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
<body >
    <header>
        <div class="conteiner">
            <a href="../../index.php"><img src="../../src/logo.png"/></a>
            <div>
                <ul>
                    <li><?php echo $_SESSION['username'];?></li>
                    <li>Jogar</li>
                    <li><a href="php/logout.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main  id="game">
        <button class="iniciar" onclick="inits();" id="bt">Escolher Heroi</button>

        <div id="escolha">
            <div class="content">
                <h1>Guerreiro</h1>
                <img src="../../src/Herois/Leon.png">
                    <button onclick="clickMe(1)" type="submit" name="leon">Leon</button>

            </div>
            <div class="content">
                <h1>Arqueiro</h1>
                <img src="../../src/Herois/Rengar.png">
                    <button onclick="clickMe(2);" type="submit" name= "rengar">Rengar</button>

            </div>
            <div class="content">
                <h1>Mago</h1>
                <img src="../../src/Herois/Sali.png">

                    <button  onclick="clickMe(3);" type="submit" name="sali">Sali</button>

                
            </div>
        </div>
    </main>
    
    <?php 
        init();
    ?>
    <script src="../../js/initGame.js"></script>
    
</body>
</html>