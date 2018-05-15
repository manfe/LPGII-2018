<?php
    session_start();
    require_once 'src/entities/User.php';
    require_once 'src/dao/UserDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';
    require_once "src/utils/FlashMessage.php";
    include_once "src/partials/_head.php"; 
    
    ?>
    
    <div class = "container">
        <div class="wrapper">
            <form action="src/functions/reculperar.php" method="POST" name="Login_Form" class="form-signin">       
                <?= FlashMessage::printMessage(); ?>  
                
                <h3 class="form-signin-heading">Resulperar Senha</h3>
                <hr class="colorgraph"><br>
                <input type="text" class="form-control" name="usuario" placeholder="Usuário" required="" autofocus="" tabindex="1" />
                <p>Qual é a coisa/comida/... que você mais gosta?(essa frase ajudará caso você esqueça sua senha)</p>     		  
                <input type="text" class="form-control" name="frase" placeholder="Frase de Segurança" required="" tabindex="2"/><br> 
                <p>Senha que deseja trocar</p>
                <input type="password" class="form-control" name="senha" placeholder="Alterar Senha" required="" tabindex="3"/><br>
                <button class="btn btn-lg btn-primary btn-block"  name="submit" value="login" type="submit" tabindex="4">Alterar Senha</button>  			
                <hr/>
            </form>			
        </div>
    </div>
    
    </body>
    </html>