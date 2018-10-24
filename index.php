
<?php get_header(); ?>

<div data-role="page" id="pesquisa"> <!-- Início da Pagina da Pesquisa -->
	<div data-role="header" data-position="fixed" class="wow fadeInDown" data-wow-delay="0.2s" id="header">
		<h1 class="wow fadeIn" data-wow-delay='0.4s'><a href="<?php bloginfo('url');?>" id="link_titulo"><?php bloginfo('name'); ?></a></h1>
		<a href="#painel-esq" class="ui-btn ui-btn-right wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-more-vert"></i></a>
		<div class="row around-xs">
			<div class="col-xs-2">
					<div class="box">
						<a href="#pesquisa">Pesquisa</a>
					</div>
			</div>
			<div class="col-xs-2">
					<div class="box">
						<a href="#extensao">Extensão</a>
					</div>
			</div>
			<div class="col-xs-2">
					<div class="box">
						<a href="#editais">Editais</a>
					</div>
			</div>
		</div>
	</div>

	<div data-role="panel" id="painel-esq" data-display="overlay" data-position-fixed="true" data-position="right" >
		<?php wp_nav_menu( array( 'theme_location' => 'painel-menu', 'container' => ' ', 'items_wrap' => '%3$s') );?>
	</div>
	<div data-role="content" role="main" class="ui-content  jqm-content jqm-fullwidth" data-inset="false" id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if (get_field('campo_atuacao') == 'Pesquisa') : ?>
			<div class="body">
				<div class="cartao">
					<div class="cabecario">
						<img src="<?php the_field('imagem_do_perfil');?>" alt="" class="img_perfil">
						<h3 class="nome_perfil"><?php the_field('nome_projeto');?></h3>
						<p class="desc_perfil"><?php the_field('campo_atuacao');?></p>
					</div>
					<img src="<?php the_field('imagem_cartao');?>" alt="" class="img_cartao">
					<!-- <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3> -->
					<div class="desc_cartao"><?php the_content();?></div>
				</div>
			</div>
			<br>
			<?php endif; ?>
		<?php endwhile; else : ?>
		<?php endif; ?>
	</div>
</div> <!-- fim da div data-role Pesquisa -->

<div data-role="page" id="extensao"> <!-- Início da Pagina da Extensão -->
	<div data-role="header" data-position="fixed" class="wow fadeInDown" data-wow-delay="0.2s" id="header">
		<h1 class="wow fadeIn" data-wow-delay='0.4s'><a href="<?php bloginfo('url');?>" id="link_titulo"><?php bloginfo('name'); ?></a></h1>
		<a href="#painel-esq" class="ui-btn ui-btn-right wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-more-vert"></i></a>
		<div class="row around-xs">
			<div class="col-xs-2">
					<div class="box">
						<a href="#pesquisa">Pesquisa</a>
					</div>
			</div>
			<div class="col-xs-2">
					<div class="box">
						<a href="#extensao">Extensão</a>
					</div>
			</div>
			<div class="col-xs-2">
					<div class="box">
						<a href="#editais">Editais</a>
					</div>
			</div>
		</div>
	</div>

	<div data-role="panel" id="painel-esq" data-display="overlay" data-position-fixed="true" data-position="right" >
		<?php wp_nav_menu( array( 'theme_location' => 'painel-menu', 'container' => ' ', 'items_wrap' => '%3$s') );?>
	</div>
	<div data-role="content" role="main" class="ui-content  jqm-content jqm-fullwidth" data-inset="false" id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if (get_field('campo_atuacao') == 'Extensão') : ?>
			<div class="body">
				<div class="cartao">
					<div class="cabecario">
						<img src="<?php the_field('imagem_do_perfil');?>" alt="" class="img_perfil">
						<h3 class="nome_perfil"><?php the_field('nome_projeto');?></h3>
						<p class="desc_perfil"><?php the_field('campo_atuacao');?></p>
					</div>
					<img src="<?php the_field('imagem_cartao');?>" alt="" class="img_cartao">
					<!-- <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3> -->
					<div class="desc_cartao"><?php the_content();?></div>
				</div>
			</div>
			<br>
			<?php endif; ?>
		<?php endwhile; else : ?>
		<?php endif; ?>
	</div>
</div> <!-- fim da div data-role Extensão -->

<div data-role="page" id="editais"> <!-- Início da Pagina da Editais -->
	<div data-role="header" data-position="fixed" class="wow fadeInDown" data-wow-delay="0.2s" id="header">
		<h1 class="wow fadeIn" data-wow-delay='0.4s'><a href="<?php bloginfo('url');?>" id="link_titulo"><?php bloginfo('name'); ?></a></h1>
		<a href="#painel-esq" class="ui-btn ui-btn-right wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-more-vert"></i></a>
		<div class="row around-xs">
			<div class="col-xs-2">
					<div class="box">
						<a href="#pesquisa">Pesquisa</a>
					</div>
			</div>
			<div class="col-xs-2">
					<div class="box">
						<a href="#extensao">Extensão</a>
					</div>
			</div>
			<div class="col-xs-2">
					<div class="box">
						<a href="#editais">Editais</a>
					</div>
			</div>
		</div>
	</div>

	<div data-role="panel" id="painel-esq" data-display="overlay" data-position-fixed="true" data-position="right" >
		<?php wp_nav_menu( array( 'theme_location' => 'painel-menu', 'container' => ' ', 'items_wrap' => '%3$s') );?>
	</div>
	<div data-role="content" role="main" class="ui-content  jqm-content jqm-fullwidth" data-inset="false" id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if (get_field('campo_atuacao') == 'Editais') : ?>
			<div class="body">
				<div class="cartao">
					<div class="cabecario">
						<img src="<?php the_field('imagem_do_perfil');?>" alt="" class="img_perfil">
						<h3 class="nome_perfil"><?php the_field('nome_projeto');?></h3>
						<p class="desc_perfil"><?php the_field('campo_atuacao');?></p>
					</div>
					<img src="<?php the_field('imagem_cartao');?>" alt="" class="img_cartao">
					<!-- <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3> -->
					<div class="desc_cartao"><?php the_content();?></div>
				</div>
			</div>
			<br>
			<?php endif; ?>
		<?php endwhile; else : ?>
		<?php endif; ?>
	</div>
</div> <!-- fim da div data-role Editais -->

<?php get_footer(); ?>
