
<?php get_header(); ?>

<div data-role="content" role="main" class="ui-content  jqm-content jqm-fullwidth" data-inset="false">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="body">
			<div class="cartao">
				<div class="cabecario">
					<div class="cabecario_img">
						 <img src="<?php the_field(imagem_do_perfil);?>" alt="" class="img_perfil">
					</div>
					<div class="cabecario_conteudo">
						<h3 class="nome_perfil"><?php the_field(nome_projeto);?></h3>
						<p class="desc_perfil"><?php the_field(campo_atuacao);?></p>
					</div>
				</div>
				<img src="<?php the_field(imagem_cartao);?>" alt="" class="img_cartao">
				<!-- <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3> -->
				<div class="desc_cartao"><?php the_content();?></div>
			</div>
		</div>
		<br>
	<?php endwhile; else : ?>
	<?php endif; ?>
</div>


<?php get_footer(); ?>
