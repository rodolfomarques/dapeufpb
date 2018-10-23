<!DOCTYPE HTML>
<html>
	<head>
		<title><?php wp_title(); ?></title>
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

			<div data-role="panel" id="painel-esq" data-display="push" data-position-fixed="true" >
				<hr class="inset">
				<div data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-d" data-iconpos="right">
					<h3>Menu Collapsible</h3>
					<ul data-role="listview" data-icon="false">
					<?php wp_nav_menu( array( 'theme_location' => 'painel-menu', 'container' => ' ', 'items_wrap' => '%3$s') );?>
					</ul>
				</div>
			</div>

			<div data-role="popup" id="janela" class="ui-corner-all">
				<div data-role="header">
					<h1 class='nd-title'>Este é um Popup!</h1>
				</div>
				<div data-role="content">
						<p>Esta é uma página normal, estilizada como uma caixa de diálogo. Para isto, basta adicionar: <code>data-rel="dialog"</code> como atributo.</p>
						<a href="#" data-rel="back" data-role="button" data-inline="true" class="ui-btn ui-btn-primary"><i class='zmdi zmdi-check'></i> Show</a>
						<a href="#" data-rel="back" data-role="button" data-inline="true" class="ui-btn ui-btn-primary"><i class='zmdi zmdi-close'></i> Cancelar</a>
				</div>
			</div>

			<div data-role="header" data-position="fixed" class="wow fadeInDown" data-wow-delay="0.2s">
				<a href="#janela" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-btn-right wow fadeIn" data-wow-delay='1.2s'><i class="zmdi zmdi-info"></i></a>
				<a href="#painel-esq" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-menu"></i></a>
				<h1 class="wow fadeIn" data-wow-delay='0.4s'><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>