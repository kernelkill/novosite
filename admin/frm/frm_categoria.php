<?php 

	$acao = isset($_GET["acao"])? $_GET["acao"] : 'Cadastrar';
	$id	  = isset($_GET["id"])? $_GET["id"] : NULL;

	$valores = consultar("categoria","id_categoria = $id");

	$categoria = isset($valores[0]["categoria"]) ? $valores[0]["categoria"]: NULL;
	$slug_categoria = isset($valores[0]["slug_categoria"]) ? $valores[0]["slug_categoria"]: NULL;

?>

<div class="base-direita">	
	<h1>CADASTRO DE CATEGORIAS</h1>
		<div class="cx-form">
		<div class="cx-pd">			
			<form action="op/op_categoria.php" method="post">	
			  <label>
				<strong>Insira uma categoria</strong>
				<input type="text" name="txt_categoria"  value="<?php echo $categoria ?>" size="110">
			  </label>
			  <label>
				<strong>Slug</strong>
				<input type="text" name="txt_slug"  value="<?php echo $categoria ?>" size="110">
			  </label>
			  
				<label>
					<div class="cx-but">
						<input type="hidden" name="id" value="<?php $id ?>">							
						<input type="hidden" name="acao" value="<?php $acao ?>">										
						<input type="submit" value="<?php $acao ?>" class="but">	
					</div>
					</label>
			</form>

			</div>
		</div>
</div>