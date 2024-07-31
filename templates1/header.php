<?php

    include_once("config/url.php");
    include_once("config/process.php");
    include_once("config/connection.php");
    include_once("config/process_subscribe.php");
    include_once("config/connection2.php");

    if (isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];

        $_SESSION['msg'] = '';
    }
    
?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Violando Músicas </title>
        <link rel="icon" type="image/x-icon" href="<?= $BASE_URL ?>favicon/guitarra-eletrica.ico">

        <!-- Google Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">    
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <!-- BOOTSTRAP -->

        <link href="<?= $BASE_URL ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= $BASE_URL ?>css/bootstrap-icons.css" rel="stylesheet">

        <!-- CSS : Estilização do projeto -->   

        <link href="<?= $BASE_URL ?>css/style.css" rel="stylesheet">

        <!-- Font Awesome -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/b94f8b2453.js" crossorigin="anonymous"></script>
    </head>
    
    <body>

        <main>

            <header class="site-header1" id="section_1">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xl-12 col-12 d-flex flex-wrap">
                            <p class="d-flex me-4 mb-0" id="top-desconto">
                                <i class="bi-person custom-icon me-2"></i>
                                <strong class="text-dark">Violando Músicas > Vagas abertas <  Desconto de 50% no plano vitalício nos próximos <em id="timer"></em></strong>                          
                            </p>
                        </div>

                    </div>
                </div>
            </header>


            <nav class="navbar navbar-expand-xl">
                <div class="container" id="container-header1">
                    <a class="navbar-brand" href="index.php">
                        Violando Músicas
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav align-items-xl-center ms-auto me-xl-5">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php #section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php #section_2">Sobre</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php #section_3">Professores</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php #section_4">Agenda</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php #section_5">Preços</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php #section_6">Endereço</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="socios.php #section_7">Sócios</a>
                            </li>
                        </ul>

                        <a href="compra.php" class="btn custom-btn d-xl-block">Inscreva-se!</a>
                    </div>
                </div>
            </nav>

            