<?php

      include_once("config/url.php");

?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Compra Finalizada!</title>
        <link rel="icon" type="image/x-icon" href="<?= $BASE_URL ?>favicon/compra-finalizada.ico">

        <!-- SCRIPT : funcionamento -->

        <script src="https://bootstrapcreative.com/wp-bc/wp-content/themes/wp-bootstrap/codepen/bootstrapcreative.js?v=10"></script>

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- CSS : Estilização do projeto -->   

        <link href="<?= $BASE_URL ?>css/style.css" rel="stylesheet">
    </head>

    <body id="body-compra-finalizada">

        <div class="jumbotron text-center">
          <h1 class="display-5">Obrigado!</h1>

          <p class="lead">
            <strong>Por favor, cheque seu e-mail.</strong> 
            Um recibo foi enviado para o mesmo, juntamente com a chave de acesso ao curso.
          </p>

          <hr>
            <p class="parag-compra-finalizada">
              Tendo problemas? <a href="mailto:violandomusicas@gmail.com" id="contato-compra-finalizada">Entre em contato</a>
            </p>
            <p class="lead">
              <a class="btn btn-primary btn-sm" id="btn-compra-finalizada" href="<?= $BASE_URL ?>index.php" role="button">Continuar para a página principal</a>
            </p>
          </hr>
        </div>

        <!-- SCRIPTS -->
        <script type="text/javascript" href="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
    </body>
</html>