
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commitlinux te atualizando todos os dias</title>
    <link href="<?php echo URL_BASE?>css/estilo.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URL_BASE?>css/estilo-m.css" rel="stylesheet" type="text/css">	
	
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/abas.js"></script>
</head>
<body>

<div class="base-topo">
		<div class="topo">
			<div class="caixa-topo">
				<div class="conteudo">
					<a href="index.php?link=1" class="logo"><img src="<?php echo URL_BASE?>img/logo.png"></a>
					<form action="busca.html" method="POST" name="">
						<input type="text" value="" name="" placeholder="PESQUISA">
						<input type="submit" value="" name="" class="but">
					</form>
					<ul>
						<li><a href="index.php?link=4">VÍDEOS</a></li>
						<li><a href="http://localhost/commitlinux/admin/login.php">LOGIN</a></li>
						<li><a href="index.php?link=5">CADASTRAR</a></li>
						<li><a href="index.php?link=5" class="usuario">JOABE</a></li>
					</ul>
				</div>
			</div>
			<div class="topo-menu">
			<div id="menu">
				<a href="javascript:abreFecha('#mostrarmenu')" class="mobmenu">MENU</a>
				<div class="conteudos" id="mostrarmenu">				
					<ul>
						<li><a href="">home</a> </li>
						<?php
							$menus = consultar("categoria");
							foreach ($menus as $menu) { 
						?>
						<li><a href="<?php echo URL_BASE ."categoria/".$menu["slug_categoria"]?>"><?php echo $menu["categoria"] ?></a> </li>
							
						<?php } ?>
						
						<!-- aqui mostra só no mobile -->
						<div class="mostra">
							<li><a href="index.php?link=4">VÍDEOS</a></li>
							<li><a href="index.php?link=6">LOGIN</a></li>
							<li><a href="index.php?link=5">CADASTRAR</a></li>
							<li><a href="">Sair</a></li>
								
						</div>	
					</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
	
				
		<div class="limpar"></div>