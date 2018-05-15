<?php
    require_once '../entities/User.php';
    require_once '../dao/UserDAO.php';
    require_once '../utils/Database.php';

    session_start();

    $user = new user;

    $user ->setUsername($_POST['usuario']);
    $user ->setFrase($_POST['frase']);
    $user ->setPassword($_POST['senha']);

    $linhasAfetadas = UserDAO::busca($user);
    
    if ($linhasAfetadas > 0) {
        echo "<script>
		    alert('Senha Alterada !');
		    window.location.href='../../index.php';
         </script>";
    } else {
        echo "<script>
		    alert('Frase ou usuário estão incorreta ou usuário !');
		    window.location.href='../../esqueciASenha.php';
         </script>";
    }

    