<?php
function subtrairDataMysql($data1, $data2)
{
	$tempo_inicial 	= strtotime($data1);
	$tempo_final 	= strtotime($data2);
	$diferenca 		= $tempo_final - $tempo_inicial; // resultado em segundos
	$dias = (int) floor($diferenca / (60 * 60 * 24));

	return $dias;
}

function primeiroDiaMes($data)
{
	//Recebe o formato dd/mm/yyyy e retorna Y-m-d
	list($dia, $mes, $ano) = explode("/", $data);
	return $ano . "-" . $mes . "-" . "01";
}

function mostraPaginacao($url, $ordem, $lpp, $total)
{

	$paginas = ceil($total / $lpp - 1);
	$paginas_mostradas = ceil($total / $lpp); //Páginas que são mostradas realmente		


	$ordem_mostrada = $ordem + 1; //Especifica um valor para a variável ordem mostrada		

	if ($ordem == 0) {
		$mais = $ordem + 1;
		$url_mais = "$url&ordem=$mais";
		$paginacao = "<div><p>Página $mais de $paginas_mostradas</p><br>
		<a href=$url_mais>Próxima</a> | 
		<a href=$url&ordem=$paginas>Última</a></div>";
	}
	if ($ordem > 0) {
		$mais = $ordem + 1;
		$url_mais = "$url&ordem=$mais";
		$menos = $ordem - 1;
		$url_menos = "$url&ordem=$menos";
		$paginacao = "<div><p>Página $mais de $paginas_mostradas</p><br>
		<a href=$url&ordem=0>Primeira</a> | 
		<a href=$url_menos>Anterior</a> | 
		<a href=$url_mais>Próximo</a> | 
		<a href=$url&ordem=$paginas>Última</a></div>";
	}
	if ($ordem == $paginas) {
		$menos = $ordem - 1;
		$url_menos = "$url&ordem=$menos";
		$paginacao = "<div><p>Página $mais de $paginas_mostradas</p><br>
		<a href=$url&ordem=0>Primeira</a> |				
		<a href=$url_menos>Anterior</a>  </div>";
	}
	if ($paginas <= 0) {
		$paginacao = "<div><p>Página 1 de 1 </p> </div>";
	}

	return $paginacao;
}


function databr($data, $opcao)
{
	if ($opcao == 1) {
		$dia = substr($data, 0, 2);
		$mes = substr($data, 3, 2);
		$ano = substr($data, 6, 4);

		$databr = $ano . "-" . $mes . "-" . $dia;
	} else {
		$dia = substr($data, 8, 2);
		$mes = substr($data, 5, 2);
		$ano = substr($data, 0, 4);

		$databr = $dia . "/" . $mes . "/" . $ano;
	}
	return $databr;
}


function somarData($data, $dias = 0, $meses = 0, $ano = 0)
{
	$data = explode("/", $data);
	$resData = date("d/m/Y", mktime(0, 0, 0, $data[1] + $meses, $data[0] + $dias, $data[2] + $ano));
	return $resData;
}

function somarDataMysql($data, $ano, $meses, $dias)
{
	$data = explode("-", $data);
	$resData2 = date("Y-m-d", mktime(0, 0, 0, $data[1] + $meses,   $data[2] + $dias, $data[0] + $ano));
	return $resData2;
}

function diasemanaExtenso($data)
{
	$ano =  substr("$data", 0, 4);
	$mes =  substr("$data", 5, -3);
	$dia =  substr("$data", 8, 9);

	$diasemana = date("w", mktime(0, 0, 0, $mes, $dia, $ano));

	switch ($diasemana) {
		case "0":
			$diasemana = "Domingo";
			break;
		case "1":
			$diasemana = "Segunda-Feira";
			break;
		case "2":
			$diasemana = "Terça-Feira";
			break;
		case "3":
			$diasemana = "Quarta-Feira";
			break;
		case "4":
			$diasemana = "Quinta-Feira";
			break;
		case "5":
			$diasemana = "Sexta-Feira";
			break;
		case "6":
			$diasemana = "Sábado";
			break;
	}

	echo "$diasemana";
}

function diasemana($data)
{
	$ano =  substr("$data", 0, 4);
	$mes =  substr("$data", 5, -3);
	$dia =  substr("$data", 8, 9);

	$diasemana = date("w", mktime(0, 0, 0, $mes, $dia, $ano));

	return $diasemana;
}

function imprimeMes($valor)
{
	switch ($valor) {

		case "1":
			$ano = "Janeiro";
			break;
		case "2":
			$ano = "Fevereiro";
			break;
		case "3":
			$ano = "Março";
			break;
		case "4":
			$ano = "Abril";
			break;
		case "5":
			$ano = "Maio";
			break;
		case "6":
			$ano = "Junho";
			break;
		case "7":
			$ano = "Julho";
			break;
		case "8":
			$ano = "Agosto";
			break;
		case "9":
			$ano = "Setembro";
			break;
		case "10":
			$ano = "Outubro";
			break;
		case "11":
			$ano = "Novembro";
			break;
		case "12":
			$ano = "Dezembro";
			break;
	}

	echo "$ano";
}

function ultimoDiaMes($data)
{
	$dia = date("d", $data);
	$mes = date("m", $data);
	$ano = date("Y", $data);

	$data = mktime(0, 0, 0, $mes, 1, $ano);
	return date("d", $data - 1);
}

function limitarString($string, $length = 150)
{
	if (strlen($string) <= $length)
		return $string;
	$corta = substr($string, 0, $length);
	$espaco = strrpos($corta, ' ');
	return substr($string, 0, $espaco);
}

function slug($str)
{
	# special accents
	$a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'Ð', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', '?', '?', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', '?', '?', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', '?', 'O', 'o', 'O', 'o', 'O', 'o', 'Œ', 'œ', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'Š', 'š', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Ÿ', 'Z', 'z', 'Z', 'z', 'Ž', 'ž', '?', 'ƒ', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', '?', '?', '?', '?', '?', '?');
	$b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
	return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), str_replace($a, $b, $str)));
}
