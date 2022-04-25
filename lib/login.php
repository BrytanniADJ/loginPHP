<?php
    include './home.php';

        if(isset($_POST['usuario']) && isset($_POST['password'])){
            $usuario= htmlspecialchars($_POST['usuario']);
            $password= htmlspecialchars($_POST['password']);
        }
        function criptografia(){
            $password = 'pro2022';
            if(md5($password) === '553c4a7cc063f5667404db3037e30ba9'){
                echo 'Senha correta';
            }else{
                echo 'senha incorreta';
                }
criptografia();
        function login(){
            $usuarioOficial = 'admin';
            $passOficial = '553c4a7cc063f5667404db3037e30ba9';

            if($usuarioOficial === 'admin' && $passOficial === '553c4a7cc063f5667404db3037e30ba9'){
                header('Location: .jogo.html');
            }else{
                header('Location: .erro_login.html');
        }
    }login();
?>
