<?php

    require ('../config/config.php');
    require ('../config/crud.php');

    @var_dump(AbrirConexao($conexao));

    $txt_login = $_POST["txt_login"];
    $txt_senha = $_POST["txt_senha"];
    
    echo "Login: " . $txt_login . " Senha: " . $txt_senha;
    

?>