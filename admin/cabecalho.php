<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/estilo.css" rel="stylesheet" type="text/css">

    <!--[if lte IE 8]>
    <script type="text/javascript">
    var htmlshim='abbr,article,aside,audio,canvas,details,figcaption,figure,footer,header,mark,meter,nav,output,progress,section,summary,time,video'.split(',');
    var htmlshimtotal=htmlshim.length;
    for(var i=0;i<htmlshimtotal;i++) document.createElement(htmlshim[i]);
    </script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/abas.js"></script>
    <title>Painel CML</title>
</head>
<body>

<!-- topo -->
<div class="mn-topo">
		<div class="conteudo"><a href="logoff.php" class="but-sair"><span>sair</span></a></div>
	</div>
	<div class="base-topo">
			<div class="conteudo">
			<section>
				<a href="index.php?link=1"><img src="imagens/sua-logo.png"></a>
			<div class="bemvindo">
			<h2>BEM VINDO(A),</h2>
			<h1><?php echo $_SESSION["PCML"]["LOGIN"] ?></h1>
			</div>
			</section>
			
			</div>
	</div>
	<div class="limpar"></div>
	
    