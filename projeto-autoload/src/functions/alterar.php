<?php
    require_once '../entities/Produto.php';
    require_once '../dao/ProdutoDAO.php';
    require_once '../utils/Database.php';

    session_start();

    $Produto = new Produto;

    $Produto ->setNome($_POST['nome']);
    $Produto ->setQuantidade($_POST['quantidade']);
    $Produto ->setValor($_POST['valor']);
    $Produto ->setId($_POST['id']);

    $linhasAfetadas = ProdutoDAO::alterar($Produto);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Produto alterado com Sucesso !');
		    window.location.href='../../listar.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao alterado Produto !');
		    window.location.href='../../listar.php';
         </script>";
    }
