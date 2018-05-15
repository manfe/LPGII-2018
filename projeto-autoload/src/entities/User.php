<?php

class User {

    private $username;
    private $password;
    private $frase;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password) {
        $this->password = sha1($password);
    }

    public function getPassword() {
        return $this->password;
    }

    public function setFrase($frase) {
        $this->frase = sha1($frase);
    }

    public function getFrase() {
        return $this->frase;
    }

}