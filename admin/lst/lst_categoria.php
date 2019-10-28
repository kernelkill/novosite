

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
    <a href="cadastro_categoria.html">Cadastrar categorias </a>
    <p class="limpar">&nbsp;</p>

        <?php 
            
            $sql = "SELECT * FROM post";

            $total = total($sql);

            //echo "Existe ". $total." itens cadastrados"

            if ($total <= 0) {
                echo "Nenhum item cadastrado";
            }else {
                echo "Existe ". $total." itens cadastrados";
            
        ?>
                    
            <table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tbody>
                <tr>
                  <td width="6%"  align="center" class="tdbc">id</td>
                  <td width="67%"  align="left" class="tdbc">Categoria</td>
                  <td  align="center" colspan="2"  class="tdbc">Ação</td>
                </tr>
                <tr  class="coluna1">
                  <td  align="center">01</td>
                  <td  align="left">PHP</td>
                  <td width="14%" align="center"><a href="cadastro_categoria.html">Editar</a></td>
                  <td width="13%" align="center"><a href="cadastro_categoria.html" class="excluir">Excluir</a></td>		
              </tr>
                <tr  class="coluna2">
                  <td  align="center">02</td>
                  <td  align="left">JAVA</td>
                  <td align="center"><a href="cadastro_categoria.html">Editar</a></td>
                  <td align="center"><a href="cadastro_categoria.html" class="excluir">Excluir</a></td>		
              </tr>
                <tr  class="coluna1">
                  <td  align="center">03</td>
                  <td  align="left">HTML</td>
                  <td align="center"><a href="cadastro_categoria.html">Editar</a></td>
                  <td align="center"><a href="cadastro_categoria.html" class="excluir">Excluir</a></td>		
              </tr>
                <tr  class="coluna2">
                  <td  align="center">04</td>
                  <td  align="left">CSS</td>
                  <td align="center"><a href="cadastro_categoria.html">Editar</a></td>
                  <td align="center"><a href="cadastro_categoria.html" class="excluir">Excluir</a></td>
              </tr>
            </tbody>
        </table>

            <?php } ?>

        </div>
    </div>
</div>
