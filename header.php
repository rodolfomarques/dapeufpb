<!DOCTYPE HTML>
<html>
	<head>
		<title><?php bloginfo('name');; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta charset="<?php bloginfo('charset'); ?>">
		<!-- Estilos -->
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/jquery-mobile.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/waves.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/animate.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/nativedroid2.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />

		<meta name="mobile-web-app-capable" content="yes">
	 	<meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<?php wp_head();?>
 </head>
	</head>
	<body>

		<div data-role="page">

			<div data-role="header" data-position="fixed" class="wow fadeInDown" data-wow-delay="0.2s" id="header">
				<h1 class="wow fadeIn" data-wow-delay='0.4s'><a href="<?php bloginfo('url');?>" id="link_titulo"><?php bloginfo('name'); ?></a></h1>
				<a href="#painel-esq" class="ui-btn ui-btn-right wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-menu"></i></a>
				<div class="row around-xs">
			    <div class="col-xs-2">
			        <div class="box">
			          <a href="#">Pesquisa</a>
			        </div>
			    </div>
			    <div class="col-xs-2">
			        <div class="box">
			          <a href="#">Extensão</a>
			        </div>
			    </div>
			    <div class="col-xs-2">
			        <div class="box">
			          <a href="#">Bolsas</a>
			        </div>
			    </div>
				</div>
			</div>

			<div data-role="panel" id="painel-esq" data-display="overlay" data-position-fixed="true" >
				<hr class="inset">
				<div data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-d" data-iconpos="right">
					<h3>Menu Collapsible</h3>
					<ul data-role="listview" data-icon="false">
					<?php wp_nav_menu( array( 'theme_location' => 'painel-menu', 'container' => ' ', 'items_wrap' => '%3$s') );?>
					</ul>
				</div>
			</div>
