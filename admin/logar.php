<?php

session_start();

    require ('../config/config.php');
    require ('../config/crud.php');

    $txt_login = $_POST["txt_login"];
    $txt_senha = $_POST["txt_senha"];
    
    if (($txt_login != "") && ($txt_senha != "")) {
        $cliente = consultar("usuario", "login = '$txt_login' and senha = '$txt_senha'");
        
        if ($cliente) {
            $_SESSION["PCML"]["IDUSUARIO"] =$cliente[0]["id_usuario"];
            $_SESSION["PCML"]["LOGIN"] =$cliente[0]["login"];
            $_SESSION["PCML"]["SENHA"] =$cliente[0]["senha"];
            $_SESSION["PCML"]["EMAIL"] =$cliente[0]["email"];

            $url = URL_ADMIN;
            echo "<script type='text/javascript'> location.href='$url' </script>";
        }else{
            $url = URL_ADMIN ."login.php";
            unset($_SESSION["PCML"]);
                print"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
                 <script type = 'text/javascript'> alert('Usuario e Senha invalidos!')  </script>";
        }    
    }else {
        
        $url = URL_ADMIN ."login.php";
        unset($_SESSION["PCML"]);
        print"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
                 <script type = 'text/javascript'> alert('Operação não realizada!')  </script>";

    }
    

?>