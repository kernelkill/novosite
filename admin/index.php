<?php

    //Aqui cria a sessão
    session_start();
    require ('../config/config.php');
    require ('../config/crud.php');

    //Verifica se tem uma sessão aberta para o usuario
    if (@$_SESSION["PCML"]["IDUSUARIO"] == "") {
        echo "<script type='text/javascript'> location.href='".URL_ADMIN."login.php"."' </script>";
    }

    //Incluindo aqui o cabecalho ja fatiado.
    include "cabecalho.php";

    //Incluindo aqui o home ja fatiado.
    include "home.php";

    //incluindo aqui o rodape ja fatiado.
    include "rodape.php";

?>