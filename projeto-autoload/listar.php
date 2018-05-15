<?php 
session_start();
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
                    <h1>Lista de produtos</h1>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th></th>
                        </tr>
                        <?php  
                            $dados = ProdutoDAO::list();

                            foreach($dados as $produto){
                                echo "<tr>";
                                    echo "<td>".$produto['id']."</td>";
                                    echo "<td>".$produto['nome']."</td>";
                                    echo "<td>".$produto['quantidade']."</td>";
                                    echo "<td>".$produto['valor']."</td>";
                                    echo "<td>".
                                        '<a href="alterarProduto.php?id='.$produto['id'].'"><button type="button" rel="tooltip" class="btn btn-info btn-round"> 
                                            <i class = "material-icons">alterar</i></button></a>'.
                                        '<a href="src/functions/excluir.php?id='.$produto['id'].'"><button type="button" rel="tooltip" class="btn btn-danger"> 
                                            <i class = "material-icons">excluir</i></button></a>'.
                                        "</td>";
                                echo "</tr>";
                            }
                        ?>

                    </table>

                    
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>