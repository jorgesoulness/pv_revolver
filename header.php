<?php
//Eliminar cuando se integre en FrameWork o CMS
require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Revolver - <?php echo TituloSecciones(); ?></title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="<?php get_template_directory_uri(''); ?>humnas.txt">
        <meta name="robots" content="index, follow">
	    <link rel="alternate" hreflang="es-mx" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(''); ?>apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(''); ?>favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(''); ?>favicon.ico">
        <meta property="og:locale" content="es_MX">
		<meta property="og:type" content="website">
		<meta property="og:url" content="">
		<meta property="og:site_name" content="nombre del sitiio">
        <meta property="og:title" content="Perfil nombre">
	    <meta property="og:image" content="imagen">
	    <meta property="og:description" content="">
	    <meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@Perfil">
		<meta name="twitter:title" content="Perfil nombre">
		<meta name="twitter:description" content="">
		<meta name="twitter:image" content="imagen">

        <!-- S T Y L E S - G E N E R A L -->
        <link rel="stylesheet" type="text/css" href="<?php echo scriptsCSS(); ?>">
         <link href="https://fonts.googleapis.com/css?family=Montserrat:100i,300,400,400i" rel="stylesheet"> 
    </head>
    
    <body>
    
        <header class="hide-for-small-only">
            <div class="row">
                <div class="medium-8 medium-offset-2 large-8 large-offset-2 column">
                    <nav>
                        <div class="centerMenu">
                            <ul id="menu" class="menu">
                                <li data-menuanchor="inicio"><a href="#inicio">Inicio</a></li>
                                <li data-menuanchor="quieneSomos"><a href="#quieneSomos">¿Quienes somos?</a></li>
                                <li data-menuanchor="disenoWeb"><a href="#disenoWeb">Servicios</a></li>
                                <li data-menuanchor="contacto"><a href="#contacto">Contacto</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header><!-- end.Header -->

        <main id="pageFullRevolver">
            