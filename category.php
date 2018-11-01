<?php get_header();?>

<div data-role="page" id="pesquisa"> <!-- Início da Pagina da Pesquisa -->
	<div data-role="header" data-position="fixed" class="" id="header-categoria">

		<div class="row center-xs middle-xs">
  		<div class="col-xs-3">
      	<div class="box">
          <h3 class="wow fadeIn" data-wow-delay='0.4s'>
						<a href="<?php bloginfo('url'); ?>" class="link_titulo">Centros de Ensino</a>
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
	</div>

	<div data-role="panel" id="painel-pesquisa" data-display="overlay" data-position-fixed="true" data-position="right" >
    <div class="">
      <h3 class="centros-titulo">Centros de Ensino</h3>
    </div>
		<?php wp_nav_menu( array( 'theme_location' => 'painel-menu', 'container' => 'div', 'menu_class' => 'menu', 'items_wrap' => '') );?>
	</div>

	<div data-role="content" role="main" class="ui-content  jqm-content jqm-fullwidth" data-inset="false" id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
		<?php endwhile; else : ?>
      <div class="body">
        <div class="cartao">
          <h3 id="sem_posts--titulo">Não há postagens para esta categoria</h3>
        </div>
      </div>
		<?php endif; ?>
	</div>
</div> <!-- fim da div data-role Pesquisa -->

<?php get_footer(); ?>
