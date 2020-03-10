<?php

    //Aqui cria a sessão
    session_start();
    require ('../config/config.php');
    require ('../config/crud.php');
    require ('../config/biblio.php');

    //Verifica se tem uma sessão aberta para o usuario
    if (@$_SESSION["PCML"]["IDUSUARIO"] == "") {
        echo "<script type='text/javascript'> location.href='".URL_ADMIN."login.php"."' </script>";
    }

    //Incluindo aqui o cabecalho ja fatiado.
    include "cabecalho.php";
?>

    <!-- meio -->
    <div class="conteudo">
            <!--------------menu esquerdo---------------------->	
        <div class="base-esq">	
        <h1>PAINEL DE CONTROLE</h1>	
            <div class="lado-esq">
                    <ul>
                        <li><a href="index.php?link=1">Home</a></li>
                        <li><a href="index.php?link=2">Categorias</a> </li>				
                        <li><a href="index.php?link=3">Posts</a> </li>
                        <li><a href="#">Vídeos</a> </li>
                        <li><a href="#">Comentários</a> </li>
                        <li><a href="#">Usuário</a> </li>
                    </ul>
                
            </div>
        </div>
        
        <!--------------fecha menu esquerdo---------------------->
        
        <?php 

            @$link = $_GET["link"];

            $pag[1] = "home.php";
            $pag[2] = "lst/lst_categoria.php";
            $pag[3] = "frm/frm_categoria.php";

            if (!empty($link)) {
                if (file_exists($pag[$link])) {
                    include $pag[$link];
                }else {
                    include "home.php";
                }
            }else {
                //Incluindo aqui o home ja fatiado.
                include "home.php";
            }
        ?>
    </div>

<?php

    //incluindo aqui o rodape ja fatiado.
    include "rodape.php";

?>