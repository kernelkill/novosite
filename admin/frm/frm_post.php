<?php 

	@$acao		 = $_GET["acao"];
	@$id	 	 = $_GET["id"];

	if ($acao) {
		$post = consultar("post","id_post = $id");
		//var_dump($post);
	}

	$post = isset($post[0]["post"]) ? $post[0]["post"]: NULL;
	$slug_post = isset($post[0]["slug_post"]) ? $post[0]["slug_post"]: NULL;
	$imagem = isset($post[0]["imagem"]) ? $post[0]["imagem"]: NULL;
	$descricao = isset($post[0]["descricao"]) ? $post[0]["descricao"]: NULL;
	$views = isset($post[0]["views"]) ? $post[0]["views"]: NULL;
	$data = isset($post[0]["data"]) ? $post[0]["data"]: NULL;
	$embed_youtube = isset($post[0]["embed_youtube"]) ? $post[0]["embed_youtube"]: NULL;
	$ativo = isset($post[0]["ativo"]) ? $post[0]["ativo"]: NULL;

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

  <label class="esq"><strong>Imagem</strong>
  <input type="text" name="txt_imagem" id="txt_imagem" value="">
</label>

<label class="dir"><strong>Imagem</strong>
  <input type="file" name="arquivo">
</label>

<label class="esq"><strong>Embed</strong>
  <input type="text" name="txt_embed" id="txt_embed" value="">
</label>

<label class="dir"><strong>Data</strong>
  <input type="text" name="txt_data" id="txt_data" value="">
</label>

  <label><strong>Insira o conteudo</strong>
   <textarea rows="8"></textarea>
  </label>

  <label class="esq"><strong>Slug</strong>
  <input type="text" name="txt_slug" id="txt_slug" value="">
</label>

<label class="dir"><strong>Views</strong>
  <input type="text" name="txt_views" id="txt_views" value="">
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