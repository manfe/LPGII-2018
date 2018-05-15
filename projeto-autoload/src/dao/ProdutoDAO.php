<?php

class ProdutoDAO {

    public static function add($produto) {
        $db = Database::getConnection();

        $stmt = $db->prepare('INSERT INTO produto (nome, quantidade, valor) VALUES (:nome, :quantidade, :valor)');
        $stmt->execute(array(
          ':nome' => $produto->getNome(),
          ':quantidade' => $produto->getQuantidade(),
          ':valor' => $produto->getValor()
        ));

        return $stmt->rowCount();
    }

    public static function list() {
        $db = Database::getConnection();

        $stmt = $db->prepare('SELECT * FROM produto');
        $stmt->execute();

        $row = $stmt -> fetchAll();

        return $row;
    }

    public static function busca($id){
        $db = Database::getConnection();

        $stmt = $db->prepare('SELECT * FROM produto WHERE id = :id');
        $stmt->execute(array(
               
            ':id' => $id 
        ));

        $rows = $stmt->fetchAll();

        return $rows;
    }

    public static function alterar($Produto){
        $db = Database::getConnection();

        $stmt = $db -> prepare('UPDATE produto SET nome = :nome, quantidade = :quantidade, valor = :valor WHERE id = :id;');
        $stmt -> execute(array(
            ':nome' => $Produto -> getNome(),
            ':quantidade' => $Produto -> getQuantidade(),
            ':valor' => $Produto -> getValor(),
            ':id' => $Produto -> getId()
        ));
        return $stmt->rowCount();
    }

    public static function excluir($id){
        $db = Database::getConnection();

        $stmt = $db->prepare('DELETE FROM produto WHERE id = :id');
        $stmt->execute(array(
               
            ':id' => $id
        ));

        $rows = $stmt->fetchAll();

        return $rows;
    }
}