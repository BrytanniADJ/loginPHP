<?php
        function login($usuarioOficial, $passOficial){

            if($usuarioOficial === 'admin' && $passOficial === '553c4a7cc063f5667404db3037e30ba9'){
                header('Location: ../jogo.php');
            }else{
                header('Location: ../home.php?login=erro');
        }
    }
?>
