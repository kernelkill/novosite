<?php

require ('../../config/config.php');
require ('../../config/crud.php');
require ('../../config/biblio.php');

$txt_categoria = $_POST["txt_categoria"];
$slug = slug($txt_categoria);

$dados = array(
    "categoria" => trim($txt_categoria),
    "slug_categoria" => $slug
);

inserir("categoria", $dados);
