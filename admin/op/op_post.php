<?php

require('../../config/config.php');
require('../../config/crud.php');
require('../../config/biblio.php');


$id = $_POST["id"];
$acao = $_POST["acao"];

/*
    echo "Ação = " .acao . " e Id = ". $id;
    echo $_POST["txt_post"];   
    echo $_POST["txt_slug"];*/


$post = $_POST["post"];
$descricao = $_POST["descricao"];
//$slug = slug($txt_post);

if ($post != "") {

    $dados = array(
        "id_categoria"  => trim(@$_POST["id_categoria"]),
        "post"          => trim(@$_POST["post"]),
        "slug_post"     => trim(@$_POST["slug_post"]),
        "imagem"        => trim(@$_POST["imagem"]),
        "descricao"     => trim(@$_POST["descricao"]),
        "views"         => trim(@$_POST["views"]),
        "data"          => trim(@$_POST["data"]),
        "embed_youtube" => trim(@$_POST["embed_youtube"]),
        "ativo"         => trim(@$_POST["ativo"])
    );

    # code...
    if ($acao == "Cadastrar") {
        inserir("post", $dados);
    }
    
    if ($acao == "Editar") {
        alterar("post", $dados, "id_post = $id");
    }
    
    if ($acao == "Excluir") {
        deletar("post", "id_post = $id");
    }
    
    print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php?link=4'>
          <script type = 'text/javascript'> alert('Operação realizada com sucesso!') </script>";
}else {
    # code...
    print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php?link=5'>
          <script type = 'text/javascript'> alert('Dados Invalidos - Esta faltando preencher campos!') </script>";
}

