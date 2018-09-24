<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

    

    <?php wp_head();?>
</head>

<body>
    <div class="container">
        <div class="row my-5 align-items-center">
            <div class="col-md-8 col-sm-12">
                <h1>Meu Primeiro tema</h1>
                <p class="lead">Fiz com Wordpress</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="O que procura?">
                    <div class="input-group-append">
                        <button class="btn btn-my-color-5" type="button">Buscar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col mb-5">

                <nav class="navbar navbar-expand-lg navbar-dark bg-my-color-2 rounded">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#meuNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="meuNavbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="" class="nav-link">Inicio</a> 
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Projetos</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Novidades</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Planos</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>