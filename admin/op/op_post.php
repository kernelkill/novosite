<?php

require('../../config/config.php');
require('../../config/crud.php');
require('../../config/biblio.php');


@$acao = $_POST["acao"];
@$id = $_POST["id"];

/*
    echo "Ação = " .acao . " e Id = ". $id;
    echo $_POST["txt_categoria"];
    echo $_POST["txt_slug"];*/


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
    alterar("categoria", $dados, "id_categoria = $id");
}

if ($acao == "Excluir") {
    deletar("categoria", "id_categoria = $id");
}

print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php?link=2'>
      <script type = 'text/javascript'> alert('Operação realizada com sucesso!')  </script>";
