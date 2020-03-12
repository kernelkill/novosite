<?php 

	@$acao		 = $_GET["acao"];
	@$id	 	 = $_GET["id"];

	if ($acao) {
		$post = consultar("post","id_post = $id");
		//var_dump($post);

		$id_categoria = $post[0]["id_categoria"];
		$post = $post[0]["post"];
		$slug_post = $post[0]["slug_post"];
		$imagem = $post[0]["imagem"];
		$descricao = $post[0]["descricao"];
		$views = $post[0]["views"];
		$data = $post[0]["data"];
		$embed_youtube = $post[0]["embed_youtube"];
		$ativo = $post[0]["ativo"];

	}
?>

<div class="base-direita">
		<h1>CADASTRO DE POSTS</h1>
<div class="cx-form">
	<div class="cx-pd">
	<form action="" method="post">
<label class="esq">		
<strong>Escolha uma categoria</strong>
    <select name="txt_id_categoria">
		  <?php 
			  $categorias = consultar("categoria");
			  foreach ($categorias as $categoria){
				  $cod_categoria = $categoria["id_categoria"];
				  $selecionado = ($cod_categoria == $id_categoria ) ? "selected": "";
				  echo "<option value=$cod_categoria $selecionado> $categoria[categoria]</option>";
			  }
		  ?>
          
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
   <input type="text" name="post"  value="<?php echo @$post; ?>" >
  </label>

  <label class="esq"><strong>Imagem</strong>
  <input type="text" name="imagem"  value="<?php echo @$imagem; ?>">
</label>

<label class="dir"><strong>Imagem</strong>
  <input type="file" name="arquivo">
</label>

<label class="esq"><strong>Embed</strong>
  <input type="text" name="embed_youtube"  value="<?php echo @$embed_youtube; ?>">
</label>

<label class="dir"><strong>Data</strong>
  <input type="text" name="data"  value="<?php echo @$data; ?>">
</label>

  <label><strong>Insira o conteudo</strong>
   <textarea rows="8"><?php echo @$descricao; ?></textarea>
  </label>

  <label class="esq"><strong>Slug</strong>
  <input type="text" name="slug_post"  value="<?php echo @$slug_post; ?>">
</label>

<label class="dir"><strong>Views</strong>
  <input type="text" name="views" value="<?php echo @$views; ?>">
</label>



	
		<label>
			<div class="cx-but">
						<input type="hidden" name="id" value="<?php echo @$id ?>">							
						<input type="hidden" name="acao" value="<?php echo ($acao !="")? $acao: "Cadastrar" ?>">
						<input type="button" name="cancel" value="cancel" onClick="window.location='index.php?link=2';" class="but">									
						<input type="submit" value="<?php echo ($acao !="")? $acao: "Cadastrar" ?>" class="but">	
			</div>
		</label>
</form>

		</div>
		</div>
	</div>