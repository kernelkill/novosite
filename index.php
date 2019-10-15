<?php 

	include "cabecalho.php"; 

	$url = (isset($_GET["url"])) ? $_GET["url"]: " ";
	$explode = explode("/", $url);
	$paginas = array("home", "categoria", "pesquisa", "post");

	if (isset($explode[0]) && $explode[0] == " ") {
		include "home.php";
	}elseif ($explode[0] != " ") {
		if (isset($explode[0]) && in_array($explode[0], $paginas)) {
			include_once $explode[0]. ".php";
		}else {
			include "home.php";
		}
	}
	
	var_dump($explode);

	include "rodape.php";
	
?>
	
		
	
	