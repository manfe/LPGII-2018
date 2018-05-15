<?php

class UserDAO {

    public static function add($user) {
        $db = Database::getConnection();

        $stmt = $db->prepare('INSERT INTO users (username, password, frase) VALUES (:username, :password, :frase)');
        $stmt->execute(array(
          ':username' => $user->getUsername(),
          ':password' => $user->getPassword(),
          ':frase' => $user->getFrase()
        ));

        $rows = $stmt->rowCount();

        return $rows;
    }

    public static function verify($user) {
        $db = Database::getConnection();
        
        $stmt = $db->prepare('SELECT * FROM users where username = :username');
        $stmt->execute(array(
                ':username' => $user->getUsername()
        ));

        $rows = $stmt->fetchAll();

        $user_db_password = $rows[0]['password'];

        if ($user->getPassword() == $user_db_password) {
            return true;
        } else {
            return false;
        }
    }

    public static function busca($user){
        $db = Database::getConnection();

        $stmt = $db->prepare('UPDATE users SET password = :senha WHERE frase = :frase AND username = :username');
        $stmt->execute(array(
            ':senha' => $user->getPassword(),   
            ':frase' => $user->getFrase(),
            ':username' => $user->getUsername()
        ));

        $rows = $stmt->fetchAll();

        return $rows;
    }

}