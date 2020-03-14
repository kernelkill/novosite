<?php

require('../../config/config.php');
require('../../config/crud.php');
require('../../config/biblio.php');


@$acao = $_POST["acao"];
@$id = $_POST["id"];

/*
    echo "Ação = " .acao . " e Id = ". $id;
    echo $_POST["txt_post"];   
    echo $_POST["txt_slug"];*/


//$txt_post = $_POST["txt_post"];
//$slug = slug($txt_post);

$id_categoria       = $post[0]["id_categoria"];
$post               = $post[0]["post"];
$slug_post          = $post[0]["slug_post"];
$imagem             = $post[0]["imagem"];
$descricao          = $post[0]["descricao"];
$views              = $post[0]["views"];
$data               = $post[0]["data"];
$embed_youtube      = $post[0]["embed_youtube"];
$ativo              = $post[0]["ativo"];

$dados = array(
    "id_categoria"  => trim($_POST["txt_id_categoria"]),
    "post"          => trim($_POST["post"]),
    "slug_post"     => trim($_POST["slug_post"]),
    "imagem"        => trim($_POST["imagem"]),
    "descricao"     => trim($_POST["descricao"]),
    "views"         => trim($_POST["views"]),
    "data"          => trim($_POST["data"]),
    "embed_youtube" => trim($_POST["embed_youtube"]),
    "ativo"         => trim($_POST["ativo"])
);

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
