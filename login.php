<?php
    require_once(dirname(__FILE__).'/main/class/logar.php');

    $objConnection = new Connection();
    $objLogin = new Login();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookzin - Sistema de livraria online</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./Assets/css/style.css" />
</head>
<body>
    <main class="main">
        <section class="content">
            <div class="frm-login">
                <div class="frm-login-titulo">
                    <h1 class="login-titulo">Login</h1>
                </div>                
                <form action="" class="login" method="post">
                <label for="txtUser">Usuário</label>
                    <input type="text" name="txtUser" placeholder="Usuário" required />
                    <label for="txtUser">Senha</label>
                    <input type="password" name="txtPass" placeholder="*****" required />

                    <input type="submit" name="frmSubmit" value="Acessar" />
                </form>
            </div>
            <?php
                if(isset($_POST["frmSubmit"]) && $_POST["frmSubmit"] == "frmSubmit"){
                    $logar = $objLogin->Logar($_POST["txtUser"], $_POST["txtPass"]);
                }
                ?>
            <?php

                if(isset($logar)){
            ?>
            <div class="container-erro">
                <?php
                    echo $logar;
                ?>
            </div>
            <?php
                }
            ?>
            <div class="frm-imagem">
                <img src="./img/open-book.webp" alt="Biblioteca" class="ilustracao" />
            </div>
        </section>
    </main>
    
</body>
</html>