<?php

require ('../../config/config.php');
require ('../../config/crud.php');
require ('../../config/biblio.php');

$id = $_POST["id"];
$acao = $_POST["acao"];

echo "ação = ". $acao . " id = ".$id;

$txt_categoria = $_POST["txt_categoria"];
$slug = slug($txt_categoria);

$dados = array(
    "categoria" => trim($txt_categoria),
    "slug_categoria" => $slug
);

if ($acao == "Cadastrar") {
    inserir("categoria", $dados);
}

if ($acao == "Editar") {
    # code...
}

if ($acao == "Excluir") {
    # code...
}

