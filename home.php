<?php
    include './lib/login.php';

    if(isset($_POST['usuario']) && isset($_POST['password'])){
        $usuario= htmlspecialchars($_POST['usuario']);
        $password= md5(htmlspecialchars($_POST['password']));
        login($usuario, $password);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <title>Página Principal</title>
</head>
<body>
    <header>
        <img src="./assets/logo.svg.png">
    </header>
    <main>
    <div class="cabecalho">
        <ul class="botoes">
            <li class="click">
                <a class="button2" href="sobre.php">Sobre</a>
            </li>
            <li class="click">
                <a class="button3" href="contato.php">Contato</a>
            </li>
        </ul>
    </div>
    <section class="cabecalho2">
        <h2>Seja bem vindo!</h2>
        <figcaption>
            <form action="home.php" method="post">
                <ul>
                    <li class="botao1">
                        <label for="">Usuário</label>
                        <input type="text" name="usuario" id="usuario" placeholder = "Nome de Usuário" required>
                    </li>
                    <li class="botao2">
                        <label for="">Senha</label>
                        <input type="password" name="password" id="senha" placeholder = "Senha" required>
                    </li>
                    <li class="entrar">
                        <button type="submit">Entrar</button>
                    </li>
                </ul>
            </form>
        </figcaption>
    </section>
    </main>
    <footer>
    </footer>
</body>
</html>
