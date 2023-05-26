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

        <div id="batalha">
            <div class="status">
                <p>Nome Player</p>
                <button disabled id="life">????/????</button>
                <button disabled id="mana">????/????</button>
            </div>
            <div class="moveStatus">
                <button onclick="TrocarInimigo();">Procurar Inimigo</button>
                <button>Golpes</button>
                <button>Fugir</button>
                <textarea disabled></textarea>
            </div>
            <div class="skills">
                <table>
                    <tr>
                        <th><img src="../../src/Skills/1.png" width="100%" /></th>
                        <th><img src="../../src/Skills/2.png" width="100%"/></th>
                        <th><img src="../../src/Skills/3.png" width="100%"/></th>
                        <th><img src="../../src/Skills/4.png" width="100%"/></th>
                        <th><img src="../../src/Skills/5.png" width="100%"/></th>
                        <th><img src="../../src/Skills/6.png" width="100%"/></th>
                        <th><img src="../../src/Skills/7.png" width="100%"/></th>
                        <th><img src="../../src/Skills/8.png" width="100%"/></th>
                    </tr>
                    <tr>
                        <th><img src="../../src/Skills/9.png" width="100%"/></th>
                        <th><img src="../../src/Skills/10.png" width="100%"/></th>
                        <th><img src="../../src/Skills/11.png" width="100%"/></th>
                        <th>Skill 12</th>
                        <th>Skill 13</th>
                        <th>Skill 14</th>
                        <th>Skill 15</th>
                        <th>Skill 16</th>
                    </tr>
                   
                </table>
            </div>

            <div class="enemy">
                <button onclick="SelectionEnemy();"><div>
                    <p id="enemyNome"></p>
                </div>
                <img id="pele" src="#" width="200px"/>
                </button>
            </div> 
            <div id="enemyL" class="enemyLife">
                
            </div>
            
        </div>
    </main>
    
    <?php 
        init();
    ?>
    <script src="../../js/initGame.js"></script>
    <script src="../../js/procuraEnemy.js"></script>
    
</body>
</html>