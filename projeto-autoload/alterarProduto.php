<?php 
session_start();
//3 require_once e 2 include (professor não mexa nos comentários)
require_once "src/utils/FlashMessage.php";
require_once "src/dao/ProdutoDAO.php";
require_once "src/utils/Database.php";
include_once "src/partials/_verify_auth.php";
include_once "src/partials/_head.php" 

?>

    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li class="active"><a href="/dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Inicio</span></a></li>
                        <li><a href="/cadastrarProduto.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cadastrar Produto</span></a></li>
                        <li><a href="/listar.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Listar</span></a></li>
                        <li><a href="/sign_in.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Sair</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
               <div class="user-dashboard">
                    <h1>Altera Produto</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                        <form action="src/functions/alterar.php" method="POST">

                            <?php
                                $id = $_GET['id'];
                                $dados = produtoDAO::busca($id);
                                
                                foreach($dados as $produto) {

                                    echo '<label for="id">ID </label>';
                                    echo '<input type="text" class="form-control" id="_id" value="'.$produto['id'].'" name="id" readonly="readonly" ><br>';
                                    echo '<label for="Nome">Nome </label>';
                                    echo '<input type="text" class="form-control" id="_nome" value="'.$produto['nome'].'" name="nome" autofocus><br>';
                                    echo '<label for="marca">Quantidade: </label>';
                                    echo '<input type="text" class="form-control" id="_quantidade" value="'.$produto['quantidade'].'" name="quantidade"><br>';
                                    echo '<label for="valor">Endereço: </label>';
                                    echo '<input type="text" class="form-control" id="_valor" value="'.$produto['valor'].'" name="valor"><br>';
                                }
                            ?>

                            <button type="submit" class="btn btn-primary" >Alterar</button>

                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    

</body>