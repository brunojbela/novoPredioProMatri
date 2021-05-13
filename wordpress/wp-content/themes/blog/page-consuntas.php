<?php get_header(); // template name: Page consultas ?>
<section class="video">
<?php echo get_field('video_sobre'); ?>
</section>
<section class="objetivos">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 objt objetivo">
				<div class="item">
					<h2><?php echo get_field('titulo_pilar_1'); ?></h2>
					<p><?php echo get_field('conteudo_pilar_1'); ?></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 objt diferenciais">
				<div class="item">
					<h2><?php echo get_field('titulo_pilar_2'); ?></h2>
					<p><?php echo get_field('conteudo_pilar_2'); ?></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 objt principais-pontos">
				<div class="item">
					<h2><?php echo get_field('titulo_pilar_3'); ?></h2>
					<p><?php echo get_field('conteudo_pilar_3'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="conteudo">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-sm-offset-1">
				<h2><?php echo get_field('titulo_conteudo_1'); ?></h2>
				<h3><?php echo get_field('subtitulo_conteudo_1'); ?></h3>
			</div>
			<div class="col-xs-12 col-sm-7">
                <p><?php echo get_field('conteudo_conteudo_1'); ?></p>
				<a href="<?php echo get_field('link'); ?>" class="btn btn-roxo" target="_blank">Compre agora</a>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>

