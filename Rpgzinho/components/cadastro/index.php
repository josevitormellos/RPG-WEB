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
            <form action="../../php/cadastro.php" method="POST">
                <label>Usuario</label>
                <input type="text" name="usuario" placeholder="Usuario...">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Senha...">
                <label>Confirmar Senha</label>
                <input type="password" name="confS" placeholder="Confirmar Senha...">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email...">
                <button type="submit">Entrar</button>

            </form>
        </div>
        
    </main>
    
</body>
</html>