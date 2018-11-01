
<?php get_header(); ?>

<div data-role="page" id="pesquisa"> <!-- Início da Pagina da Pesquisa -->
	<div data-role="header" data-position="fixed" class="" data-wow-delay="" id="header-pesquisa">

		<div class="row center-xs middle-xs">
  		<div class="col-xs-3">
      	<div class="box">
          <h3 class="wow fadeIn" data-wow-delay='0.4s'>
						<a href="#pesquisa" class="link_titulo"><?php bloginfo('name'); ?></a>
					</h3>
      	</div>
	    </div>
	    <div class="col-xs-5">
	        <div class="box">
	        </div>
	    </div>
	    <div class="col-xs-3">
	        <div class="box ">
	          <a href="#painel-pesquisa" class="ui-btn wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-more-vert"></i></a>
	        </div>
	    </div>
		</div>

		<div class="row center-xs center-md">
			<div class="col-xs-4 col-md-4">
					<div class="box box-menu box-selecao">
						<a href="#pesquisa">Pesquisa</a>
					</div>
			</div>
			<div class="col-xs-4 col-md-4">
					<div class="box box-menu">
						<a href="#extensao">Extensão</a>
					</div>
			</div>
			<div class="col-xs-4 col-md-4">
					<div class="box box-menu">
						<a href="#editais">Editais</a>
					</div>
			</div>
		</div>
	</div>

	<div data-role="panel" id="painel-pesquisa" data-display="overlay" data-position-fixed="true" data-position="right">
		<div class="">
      <h3 class="centros-titulo">Centros de Ensino</h3>
    </div>
		<?php wp_nav_menu( array( 'theme_location' => 'painel-menu', 'container' => 'div', 'menu_class' => 'menu', 'items_wrap' => '%3$s') );?>
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
					<?php if ( is_active_sidebar( 'social_midias' ) ) : ?>
						<?php dynamic_sidebar( 'social_midias' ); ?>
					<?php endif ?>
				</div>
			</div>
			<br>
			<?php endif; ?>
		<?php endwhile; else : ?>
		<?php endif; ?>
	</div>
</div> <!-- fim da div data-role Pesquisa -->

<div data-role="page" id="extensao"> <!-- Início da Pagina da Extensão -->
	<div data-role="header" data-position="fixed" class="" data-wow-delay="" id="header">
		<div class="row center-xs middle-xs">
			<div class="col-xs-3">
				<div class="box">
					<h3 class="wow fadeIn" data-wow-delay='0.4s'>
						<a href="#pesquisa" class="link_titulo"><?php bloginfo('name'); ?></a>
					</h3>
				</div>
			</div>
			<div class="col-xs-5">
					<div class="box">
					</div>
			</div>
			<div class="col-xs-3">
					<div class="box ">
						<a href="#painel-extensao" class="ui-btn wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-more-vert"></i></a>
					</div>
			</div>
		</div>

		<div class="row center-xs center-md">
			<div class="col-xs-4 col-md-4">
					<div class="box box-menu ">
						<a href="#pesquisa">Pesquisa</a>
					</div>
			</div>
			<div class="col-xs-4 col-md-4">
					<div class="box box-menu box-selecao">
						<a href="#extensao">Extensão</a>
					</div>
			</div>
			<div class="col-xs-4 col-md-4">
					<div class="box box-menu">
						<a href="#editais">Editais</a>
					</div>
			</div>
		</div>

	</div>

	<div data-role="panel" id="painel-extensao" data-display="overlay" data-position-fixed="true" data-position="right" >
		<div class="">
      <h3 class="centros-titulo">Centros de Ensino</h3>
    </div>
		<?php wp_nav_menu( array( 'theme_location' => 'painel-menu', 'container' => 'div', 'menu_class' => 'menu', 'items_wrap' => '%3$s') );?>
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
	<div data-role="header" data-position="fixed" class="" data-wow-delay="" id="header">
		<div class="row center-xs middle-xs">
			<div class="col-xs-3">
				<div class="box">
					<h3 class="wow fadeIn" data-wow-delay='0.4s'>
						<a href="#pesquisa" class="link_titulo"><?php bloginfo('name'); ?></a>
					</h3>
				</div>
			</div>
			<div class="col-xs-5">
					<div class="box">
					</div>
			</div>
			<div class="col-xs-3">
					<div class="box ">
						<a href="#painel-editais" class="ui-btn wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-more-vert"></i></a>
					</div>
			</div>
		</div>

		<div class="row center-xs center-md">
			<div class="col-xs-4 col-md-4">
					<div class="box box-menu">
						<a href="#pesquisa">Pesquisa</a>
					</div>
			</div>
			<div class="col-xs-4 col-md-4">
					<div class="box box-menu">
						<a href="#extensao">Extensão</a>
					</div>
			</div>
			<div class="col-xs-4 col-md-4">
					<div class="box box-menu box-selecao">
						<a href="#editais">Editais</a>
					</div>
			</div>
		</div>

	</div>

	<div data-role="panel" id="painel-editais" data-display="overlay" data-position-fixed="true" data-position="right" >
		<div class="">
      <h3 class="centros-titulo">Centros de Ensino</h3>
    </div>
		<?php wp_nav_menu( array( 'theme_location' => 'painel-menu', 'container' => 'div', 'menu_class' => 'menu', 'items_wrap' => '%3$s') );?>
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
