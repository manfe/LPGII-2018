<?php
    require_once '../entities/Produto.php';
    require_once '../dao/ProdutoDAO.php';
    require_once '../utils/Database.php';

    session_start();

    $Produto = new Produto;

    $Produto ->setNome($_POST['nome']);
    $Produto ->setQuantidade($_POST['quantidade']);
    $Produto ->setValor($_POST['valor']);

    $linhasAfetadas = ProdutoDAO::add($Produto);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Produto cadastrado com Sucesso !');
		    window.location.href='../../cadastrarProduto.php';
         </script>";
    } else {
        echo "<script>
		    alert('Erro ao cadastrar Produto !');
		    window.location.href='../../cadastrarProduto.php';
         </script>";
    }