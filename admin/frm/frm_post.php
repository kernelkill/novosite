<?php 

	@$acao		 = $_GET["acao"];
	@$id	 	 = $_GET["id"];

	if ($acao) {
		$valores = consultar("post","id_post = $id");
		//var_dump($valores);
	}
	

	$post = isset($valores[0]["post"]) ? $valores[0]["post"]: NULL;
	$slug_post = isset($valores[0]["slug_post"]) ? $valores[0]["slug_post"]: NULL;

?>

<div class="base-direita">
		<h1>CADASTRO DE POSTS</h1>
<div class="cx-form">
	<div class="cx-pd">
	<form action="" method="post">
<label class="esq">		
<strong>Escolha uma categoria</strong>
    <select name="id_modulo">
          &nbsp;
         <option value="1"> PHP</option><option value="2"> JAVA</option><option value="3"> CSS</option><option value="4"> JAVA</option><option value="5"> HTML</option> 
          &nbsp;
        </select>
</label>
   
<label class="dir">
<strong>Ativo</strong>
	<select name="txt_ativo">
	<option value="S">Sim</option>
	<option value="N">Não</option>
  </select>
</label>

  <label><strong>Título do post</strong>
   <input type="text" name="txt_curso" id="txt_curso" value="" size="110">
  </label>

  <label><strong>Insira o conteudo</strong>
   <textarea rows="8"></textarea>
  </label>

  <label><strong>Imagem do post</strong>
   <input type="file">
  </label>


	
		<label>
		<div class="cx-but">
			<input type="hidden" name="id" value="">
			<input type="hidden" name="irpara" value="">							
			<input type="hidden" name="acao" value="Inserir">										
			<input type="submit" name="logar" id="logar" value="Inserir" class="but">	
		</div>	
		</label>
</form>

		</div>
		</div>
	</div>