<?php 
require "bootload.php";

use App\utils\FlashMessage;

include_once "src/partials/_head.php";

?>

<div class = "container">
    <div class="wrapper">
        <form action="sign_in.php" method="post" name="Login_Form" class="form-signin">
            <?= FlashMessage::printMessage(); ?>  

            <h3 class="form-signin-heading">Seja bem vindo!</h3>
            <hr class="colorgraph"><br>
            
            <input type="text" class="form-control" name="usuario" placeholder="Usuário" required="" autofocus="" tabindex="1" />
            <input type="password" class="form-control" name="senha" placeholder="Senha" required="" tabindex="2"/>     		  
            
            <button class="btn btn-lg btn-primary btn-block"  name="submit" value="login" type="submit" tabindex="3">Entrar</button>  			
            <hr />
            <a href="sign_up.php" class="btn btn-lg btn-default btn-block">Cadastrar-se</a><br>
            <a href="esqueciASenha.php" class="btn btn-lg btn-default btn-block">Esqueci a Senha</a>
        </form>			
    </div>
</div>

</body>
</html>