<?php
include('php/protect.php');
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
            <a href="index"><img src="src/logo.png"/></a>
            <div>
                <ul>
                    <li><a href="components/perfil/index.php"><?php echo $_SESSION['username'];?></a></li>
                    <li><a href="components/game/index.php">Jogar</a></li>
                    <li><a href="php/logout.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <h1>Desbrave Masmorra, cavernas e florestas densas. Seja o Heroi desse mundo ou aquele que vai destrui-lo. Se torne o ser mais forte e seja uma lenda. Seja o maior explorador e viaje por todo o mundo de AlaBidu, sozinho ou com sua equipe. Crie sua historia</h1>
    </main>
    <main id="sobreGame">
            <div class="navbar">
                <ul>
                    
                    <li>Equipamentos</li>
                    <li>Herois</li>
                    <li>Mapa</li>
                    <li>Historia</li>
                    <li>Classes</li>
                    
                </ul>
            </div>
            <div class="base">
                <div class="iconClass">
                    <div>
                        <button onclick="StatusClasse(1)"><img src="src/st1.png" class="classe"/></button>
                        <button onclick="StatusClasse(2)"><img src="src/st2.png" class="classe"/></button>
                        <button onclick="StatusClasse(3)"><img src="src/st3.png" class="classe"/></button>
                    </div>
                    <div>
                        <button onclick="StatusClasse(4)"><img src="src/st4.png" class="classe"/></button>
                        <button onclick="StatusClasse(5)"><img src="src/st5.png" class="classe"/></button>
                        <button onclick="StatusClasse(6)"><img src="src/st6.png" class="classe"/></button>
                    </div>
                    <div>
                        <button onclick="StatusClasse(7)"><img src="src/st7.png" class="classe"/></button>
                        <button onclick="StatusClasse(8)"><img src="src/st8.png" class="classe"/></button>
                    </div>
                </div>
                <div id="statusClass">
                    
                </div>
            </div>
            
        
    </main>
    <script src="js/statusClass.js"></script>
</body>
</html>