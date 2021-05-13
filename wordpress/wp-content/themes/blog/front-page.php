<?php get_header(); // template name: Home ?>
<section id="sobre" class="sobre">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 conteudo">
				<!--<img src="<?php echo CONTENT_URI .'/assets/images/logo_promatre_positivo_rgb.png'; ?>" alt="" class="img-responsive">-->
				<H2><?php echo get_field('titulo_sobre'); ?></H2>
				<p><?php echo get_field('subtitulo_sobre'); ?></p>
			</div>
			<div class="col-xs-12 col-sm-6">
				<figure class="row">
					<img class="img-responsive" src="<?php echo get_field('imagem_sobre_1'); ?>" alt="">
				</figure>
			</div>
			<div class="col-xs-12 col-sm-3">
				<figure>
				<img class="img-responsive" src="<?php echo get_field('imagem_sobre_2'); ?>" alt="">
				</figure>
			</div>
		</div>
	</div>
</section>
<script>
    // $('.menuConsulta').click(function () {
    //     $('.bg-azul').addClass('active');
    //     $('.bg-rosa').removeClass('active');
    //     $('.bg-verde').removeClass('active');
    //     $('.menu1').addClass('active');
    //     $('.menu2').removeClass('active');
    //     $('.menu3').removeClass('active');
    //     $('#menu1').addClass('active');
    //     $('#menu2').removeClass('active');
    //     $('#menu3').removeClass('active');
    // });
    // $('.menuCursos').click(function () {
    //     $('.bg-azul').removeClass('active');
    //     $('.bg-rosa').addClass('active');
    //     $('.bg-verde').removeClass('active');
    //     $('.menu1').removeClass('active');
    //     $('.menu2').addClass('active');
    //     $('.menu3').removeClass('active');
    //     $('#menu1').removeClass('active');
    //     $('#menu2').addClass('active');
    //     $('#menu3').removeClass('active');
    // });
    // $('.menuPlano').click(function () {
    //     $('.bg-azul').removeClass('active');
    //     $('.bg-rosa').removeClass('active');
    //     $('.bg-verde').addClass('active');
    //     $('.menu1').removeClass('active');
    //     $('.menu2').removeClass('active');
    //     $('.menu3').addClass('active');
    //     $('#menu1').removeClass('active');
    //     $('#menu2').removeClass('active');
    //     $('#menu3').addClass('active');
    // });
</script>
<?php
$sessionClick = isset($_GET['section']) ? $_GET['section'] : '';

if($sessionClick == 'curso'){ ?>
    <script>
        $( document ).ready(function() {
        $('.bg-azul').removeClass('active');
        $('.bg-rosa').addClass('active');
        $('.bg-verde').removeClass('active');
        $('.menu1').removeClass('active');
        $('.menu2').addClass('active');
        $('.menu3').removeClass('active');
        $('#menu1').removeClass('active');
        $('#menu2').addClass('active');
        $('#menu3').removeClass('active');
        });
    </script>
<?php } elseif($sessionClick == 'plano') {?>
    <script>
        $( document ).ready(function() {
        $('.bg-azul').removeClass('active');
        $('.bg-rosa').removeClass('active');
        $('.bg-verde').addClass('active');
        $('.menu1').removeClass('active');
        $('.menu2').removeClass('active');
        $('.menu3').addClass('active');
        $('#menu1').removeClass('active');
        $('#menu2').removeClass('active');
        $('#menu3').addClass('active');
        });
    </script>
<?php } elseif ($sessionClick == 'consultas') {?>
    <script>
        $( document ).ready(function() {
        $('.bg-azul').addClass('active');
        $('.bg-rosa').removeClass('active');
        $('.bg-verde').removeClass('active');
        $('.menu1').addClass('active');
        $('.menu2').removeClass('active');
        $('.menu3').removeClass('active');
        $('#menu1').addClass('active');
        $('#menu2').removeClass('active');
        $('#menu3').removeClass('active');
        });
    </script>
<?php } ?>

<section id="selecao" class="selectitem">
	<div class="container">
		<div class="row">
			<ul class="nav nav-tabs">
				<li class="bg-azul active"><a class="menu1" data-toggle="tab" href="#menu1">CONSULTAS</a></li>
				<li class="bg-rosa"><a class="menu2" data-toggle="tab" href="#menu2">CURSOS</a></li>
				<li class="bg-verde"><a class="menu3" data-toggle="tab" href="#menu3">PLANOS</a></li>
			</ul>
		</div>
	</div>
</section>

<div class="tab-content">
	<section class="tab-pane itemselcao active" id="menu1">
		<div class="container">
			<div class="row">
				<div class="itens">
                    <div class="owl-carousel owl-theme">
					<?php while (have_rows('cursos')): the_row(); ?>
						<div class="item">
							<h2><?php echo get_sub_field('titulo'); ?></h2>
							<figure>
								<img src="<?php echo get_sub_field('imagem'); ?>" alt="">
							</figure>
							<p><?php echo get_sub_field('resumo'); ?></p>
							<a href="<?php echo get_sub_field('link'); ?>" <?php if(get_field('abrir_em_outra_aba')){echo 'target="_blank"';}?>>Saiba Mais</a>
						</div>
					<?php endwhile; ?>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<section class="tab-pane itemselcao" id="menu2">
		<div class="container">
			<div class="row">
				<div class="itens">
                    <div class="owl-carousel owl-theme">
                    <?php while (have_rows('consultas')): the_row(); ?>
                        <div class="item">
                            <h2><?php echo get_sub_field('titulo'); ?></h2>
                            <figure>
                                <img src="<?php echo get_sub_field('imagem'); ?>" alt="">
                            </figure>
                            <p><?php echo get_sub_field('resumo'); ?></p>
                            <a href="<?php echo get_sub_field('link'); ?>" <?php if(get_field('abrir_em_outra_aba')){echo 'target="_blank"';}?>>Saiba Mais</a>
                        </div>
                    <?php endwhile; ?>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<section class="tab-pane itemselcao" id="menu3">
		<div class="container">
			<div class="row">
				<div class="itens">
<div class="owl-carousel owl-theme">
                    <?php while (have_rows('planos')): the_row(); ?>
                        <div class="item">
                            <h2><?php echo get_sub_field('titulo'); ?></h2>
                            <figure>
                                <img src="<?php echo get_sub_field('imagem'); ?>" alt="">
                            </figure>
                            <p><?php echo get_sub_field('resumo'); ?></p>
                            <a href="<?php echo get_sub_field('link'); ?>" <?php if(get_field('abrir_em_outra_aba')){echo 'target="_blank"';}?>>Saiba Mais</a>
                        </div>
                    <?php endwhile; ?>
</div>
				</div>
			</div>
		</div>
	</section>
</div>
<section id="visita" class="visitas">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<h2><?php echo get_field('titulo_visita_1'); ?></h2>
				<figure>
					<img src="<?php echo get_field('imagem_visita_1'); ?>" class="img-responsive" alt="">
				</figure>
				<p><?php echo get_field('sobre_visita_1'); ?></p>
			</div>
			<div class="col-xs-12 col-sm-6">
				<h2><?php echo get_field('titulo_visita_2'); ?></h2>
				<figure>
					<img src="<?php echo get_field('imagem_visita_2'); ?>" class="img-responsive" alt="">
				</figure>
				<p><?php echo get_field('sobre_visita_2'); ?></p>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
<script>




        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:false,
                marginLeft:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:4
                    }
                }
            });
        });








</script>

