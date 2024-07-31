<?php

    include_once("config/url.php");
    
?>

<!DOCTYPE html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Admin</title>
    <link rel="icon" type="image/x-icon" href="<?= $BASE_URL ?>favicon/lock.ico">

    <!-- CSS : Estilização do projeto -->

    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>

    <body id="body-adm">
        <div class="container-adm">
            <div class="wrapper">
                <div class="title"><span>Admin</span></div>

                <form method="post" action="socios-admin.php" id="form-admin">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuário" required>
                    </div>
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" required>
                    </div>
                        <div class="row button">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </body>

</html>