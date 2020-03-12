<?php
    $ordem = isset($_GET["ordem"]) ? $_GET["ordem"] : "0";
    $campo = isset($_GET["campo"]) ? $_GET["campo"] : "";
    $pesq = isset($_GET["pesq"]) ? $_GET["pesq"] : "";
?>

<div class="base-direita">
<h1>Lista de post</h1>
<div class="base-lista">
    <div class="cx-lista">		

    <form action="index.php" method="get" name="buscausuario" id="buscausuario">
        <table border="1">
            <tbody>
                <tr>
                    <th width="10%"><strong>Buscar:</strong></th>
                    <th width="70%"><input type="text" name="pesq" value="<?php echo $pesq ?>"/></th>
                    <th>
                        <select name="campo">
                            <option value="post">post</option>
                            <!-- <option value="ativo_post">Ativo (S ou N)</option> -->
                        </select>
                    </th>
                    <input type="hidden" name="link" value="2"/>
                    <th ><input type="submit" name="Submit" value="" class="but"></th>
                </tr>
            </tbody>

        </table>
    </form>

    <h2>Lista de posts</h2>
    <a href="index.php?link=5">Cadastrar posts </a>
    <p class="limpar">&nbsp;</p>

        <?php 
            
            if ($pesq == "") {
                # code...
                $sql = "SELECT * FROM post";
                $complemento = "";
            }else {
                # code...
                $sql = "SELECT * FROM post WHERE $campo LIKE '%$pesq%'";
                $complemento = "&pesq=$pesq&campo=$campo";
            }
            

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
                  <td width="67%"  align="left" class="tdbc">post</td>
                  <td  align="center" colspan="2"  class="tdbc">Ação</td>
                </tr>
               <?php 
                    $lpp = 5; //linha por paginas
                    $inicio = $ordem * $lpp;
                    $posts = selecionar($sql . " LIMIT $inicio, $lpp");
                    //var_dump($posts);

                    $i=0;
                    foreach ($posts as $post){ 
                    
                    $col = ($i%2==0)? "coluna1" : "coluna2";
                    
               ?>
                <tr class="<?php echo $col; ?>" >
                  <td  align="center"><?php echo $post["id_post"]?></td>
                  <td  align="left"><?php echo $post["post"]?></td>
                  <td width="14%" align="center"><a href="index.php?link=5&id=<?php echo $post["id_post"]?>&acao=Editar">Editar</a></td>
                  <td width="13%" align="center"><a href="index.php?link=5&id=<?php echo $post["id_post"]?>&acao=Excluir" class="excluir">Excluir</a></td>		
              </tr>
               <?php $i++; } ?>
            </tbody>
        </table>
            <div class="cx-paginacao">
              <?php echo mostraPaginacao("index.php?link=4$complemento", $ordem, $lpp, $total); ?>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
