<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jace</title>

    <!-- Styles -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo get_template_directory_uri(); ?>/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
</head>

<body>
<div class="content">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid" id="container-nav">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php get_home_url(); ?>">
                  </a>
                </div>

                <div class="collapse navbar-collapse" id="nav-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#inicio">Inicio</a></li>
                    <li><a href="#grupo-jace">Grupo Jace</a></li>
                    <li><a href="#productos-y-servicios">Productos y servicios</a></li>
                    <li><a href="#clientes-y-aliados">Clientes & aliados</a></li>
                    <!-- <li><a href="#captacion-de-talento">Captación de talento</a></li> -->
                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="#">Blog</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
