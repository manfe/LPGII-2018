<?php
    require_once '../entities/Produto.php';
    require_once '../dao/ProdutoDAO.php';
    require_once '../utils/Database.php';

    session_start();

    $Produto = new Produto;

    $id = ($_GET['id']);

    $linhasAfetadas = ProdutoDAO::excluir($id);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Produto Excluido com Sucesso !');
		    window.location.href='../../listar.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao Excluir Produto !');
		    window.location.href='../../listar.php';
         </script>";
    }