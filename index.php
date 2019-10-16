<?php 

	//incluindo o cabeçalho
	include "cabecalho.php"; 

	//esse bloco de codigo é meu codigo de url amigavel
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

	//incluindo o rodapé da paginca
	include "rodape.php";
	
?>
	
		
	
	