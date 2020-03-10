<?php
    $ordem = isset($_GET["ordem"]) ? $_GET["ordem"] : "0";
    $campo = isset($_GET["campo"]) ? $_GET["campo"] : "";
    $pesq = isset($_GET["pesq"]) ? $_GET["pesq"] : "";
?>

<div class="base-direita">
<h1>Lista de categorias</h1>
<div class="base-lista">
    <div class="cx-lista">		

    <form action="index.php" method="get" name="buscausuario" id="buscausuario">
        <table border="1">
            <tbody>
                <tr>
                    <th width="10%"><strong>Buscar:</strong></th>
                    <th width="70%"><input type="text" name="pesq" value=""/></th>
                    <th>
                        <select name="campo">
                            <option value="categoria">categoria</option>
                            <option value="ativo_categoria">Ativo (S ou N)</option>
                        </select>
                    </th>
                    <input type="hidden" name="link" value="2"/>
                    <th ><input type="submit" name="Submit" value="" class="but"></th>
                </tr>
            </tbody>

        </table>
    </form>

    <h2>Lista de categorias</h2>
    <a href="index.php?link=3">Cadastrar categorias </a>
    <p class="limpar">&nbsp;</p>

        <?php 
            
            $sql = "SELECT * FROM categoria";

            $total = total($sql);

            //echo "Existe ". $total." itens cadastrados"

            if ($total <= 0) {
                echo "Nenhum item cadastrado";
            }else {
                echo "Existem ". $total." registros.";
            
        ?>
                    
            <table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tbody>
                <tr>
                  <td width="6%"  align="center" class="tdbc">id</td>
                  <td width="67%"  align="left" class="tdbc">Categoria</td>
                  <td  align="center" colspan="2"  class="tdbc">Ação</td>
                </tr>
               <?php 
                    $categorias = selecionar($sql);
                    //var_dump($categorias);

                    $i=0;
                    foreach ($categorias as $categoria){ 
                    
                    $col = ($i%2==0)? "coluna1" : "coluna2";
                    
               ?>
                <tr class="<?php echo $col; ?>" >
                  <td  align="center"><?php echo $categoria["id_categoria"]?></td>
                  <td  align="left"><?php echo $categoria["categoria"]?></td>
                  <td width="14%" align="center"><a href="index.php?link=3&id=<?php echo $categoria["id_categoria"]?>&acao=Editar">Editar</a></td>
                  <td width="13%" align="center"><a href="index.php?link=3&id=<?php echo $categoria["id_categoria"]?>&acao=Excluir" class="excluir">Excluir</a></td>		
              </tr>
               <?php $i++; } ?>
            </tbody>
        </table>
            <div class="cx-paginacao">
                mostraPaginacao("index.php?link=2", $ordem, $lpp, $total);
            </div>
            <?php } ?>

        </div>
    </div>
</div>
