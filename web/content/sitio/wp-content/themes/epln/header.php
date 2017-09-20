<?php 
/*<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo"><h1><a href="<?php echo get_option('home'); ?>/"></a></h1>
</div>
</div>*/
 ?>

<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EPDLN - <?php bloginfo('name'); ?></title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="robots" content="index, follow">
	    <link rel="alternate" hreflang="es-mx" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon" href="<?php echo CARPETA; ?>apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo CARPETA; ?>favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo CARPETA; ?>favicon.ico">
        
        <link rel="apple-touch-icon" href="<?php echo CARPETA; ?>apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo CARPETA; ?>favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo CARPETA; ?>favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Play|Ubuntu:300' rel='stylesheet' type='text/css'>
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

        <!-- StylesWith B o o t s t r a p -->
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/components/normalize.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/components/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/layout/css/custom.min.css">
    


        <!-- Componentes -->
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/components/animate.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/components/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/components/hover-min.css">
        <link rel="stylesheet" href="<?php echo CARPETA; ?>css/components/jquery.bxslider.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Oxygen" rel="stylesheet">

        
        <script src="<?php echo CARPETA; ?>js/vendor/modernizr-2.8.3.min.js"></script>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
    
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <a href="<?php echo CARPETA; ?>"><img class="logo" src="<?php echo CARPETA; ?>img/logo/logo-yellow.png" alt="Logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-9 col-md-9">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-12">
                                <ul class="social">
                                    <li class="hidden-xs hidden-sm">SíGUENOS</li>
                                    <li class="hidden-xs hidden-sm"><a href="" class="facebook hvr-float"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="hidden-xs hidden-sm"><a href="" class="twitter  hvr-float"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="hidden-xs hidden-sm"><a href="" class="youtube  hvr-float"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li class="hidden-xs hidden-sm">|</li>
                                    <li><a href="#search" class="search"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-12">
                                <div class='menuwrap'>
                                    <nav>
                                        <input type='checkbox'/>
                                        <label><i class="fa fa-bars" aria-hidden="true"></i></label>
                                        <ul>
                                            <li><a class="hvr-underline-from-center" href="<?php echo CARPETA; ?>/nosotros">Nosotros</a></li>
                                            <li><a class="hvr-underline-from-center" href='#'>Perfil del contador</a>
                                                <ul class='menus'>
                                                    <li><a href='#'>Habilidades y Desarrollo de un contador</a></li>
                                                    <li><a href='#'>Tips para el estudiante</a></li>
                                                    <li><a href='#'>Contadores de éxito</a></li>
                                                    <li><a href='#'>FAQ'S</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="hvr-underline-from-center" href='#'>Artículos</a></li>
                                            <li><a class="hvr-underline-from-center" href='#'>Infografías</a></li>
                                            <li><a class="hvr-underline-from-center" href='#'>Videos</a></li>
                                            <li><a class="hvr-underline-from-center" href='#'>Contacto</a></li>

                                            <div class="text-center social-mobile hidden-md hidden-lg">
                                                <a href="" class="facebook hvr-float"><i class="fa fa-facebook" aria-hidden="true"></i>
                                                <a href="" class="twitter  hvr-float"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="" class="youtube  hvr-float"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                                <img class="logo" src="<?php echo CARPETA; ?>img/logo/logo.png" alt="Logo">
                                                <p>TELÉFONO: +52 (55) 5267 6400</p>
                                            </div>

                                            
                                        </ul>
                                    </nav>
                                    <!--<div class="hidden-md hidden-lg">
                                        <ul class="social">
                                            <li class="hidden-xs hidden-sm">SíGUENOS</li>
                                            <li class="hidden-xs hidden-sm"><a href="" class="facebook hvr-float"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="hidden-xs hidden-sm"><a href="" class="twitter  hvr-float"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="hidden-xs hidden-sm"><a href="" class="youtube  hvr-float"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <img class="logo" src="<?php echo CARPETA; ?>img/logo/logo.png" alt="Logo">
                                        <p>TELÉFONO: +52 (55) 5267 6400</p>
                                    </div>-->
                                </div><!--end.menuwrap-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </header><!-- end.Header -->
        <main>

        <!-- Search Form -->
        <div id="search" class="search"> 
            <span class="close">X</span>
            <form role="search" id="searchform" action="/search" method="get">
                <input value="" name="q" type="search" placeholder="Buscar..."/>
            </form>
        </div>