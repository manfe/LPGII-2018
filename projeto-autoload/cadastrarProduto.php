<?php 
session_start();
require_once "src/utils/FlashMessage.php";
include_once "src/dao/ProdutoDAO.php";
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
                    <h1>Cadastro de Produto</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                            <form action="src/functions/cadastrar.php" method="POST">
                                <div class="col-sm-12">
                                    <label for="nome">Produto: </label>
                                    <input type="text" class="form-control" id="_nome" placeholder="Produto" name="nome"><br>
                                    <label for="marca">Quantidade: </label>
                                    <input type="text" class="form-control" id="_quantidade" placeholder="Quantidade" name="quantidade"><br>
                                    <label for="valor">Valor: </label>
                                    <input type="text" class="form-control" id="_valor" placeholder="25.00" name="valor"><br>
    
                                    <button type="submit" class="btn btn-primary" >Cadastrar</button>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>