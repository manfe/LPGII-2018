<?php

class Produto {

    private $nome;
    private $quantidade;
    private $valor;
    private $id;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getvalor() {
        return $this->valor;
    }

}