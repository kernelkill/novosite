<?php 

	@$acao		 = $_GET["acao"];
	@$id	 	 = $_GET["id"];

	if ($acao) {
		$valores = consultar("categoria","id_categoria = $id");
		//var_dump($valores);
	}
	

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
				<input type="text" name="txt_slug"  value="<?php echo $slug_categoria ?>" size="110" disabled="disabled">
			  </label>
			  
				<label>
					<div class="cx-but">
						<input type="hidden" name="id" value="<?php echo $id ?>">							
						<input type="hidden" name="acao" value="<?php echo ($acao !="")? $acao: "Cadastrar" ?>">										
						<input type="submit" value="<?php echo ($acao !="")? $acao: "Cadastrar" ?>" class="but">	
					</div>
					</label>
			</form>

			</div>
		</div>
</div>