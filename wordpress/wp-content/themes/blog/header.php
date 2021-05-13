<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>   

    <!--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->

    <link rel="stylesheet" type="text/css" href="https://novoprediopromatre.com.br/wp-content/themes/blog/assets/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="https://novoprediopromatre.com.br/wp-content/themes/blog/assets/css/owl.theme.default.css"/>
    <script type="text/javascript" src="https://novoprediopromatre.com.br/wp-content/themes/blog/assets/js/owl.carousel.js"></script>
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TP66N2C');</script>
<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TP66N2C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<a id="skippy" class="sr-only sr-only-focusable" href="#content">
	<div class="container">
		<span class="skiplink-text"><?php _e('Skip to content', 'odin'); ?></span>
	</div>
</a>
<header id="header" role="banner">
	<div class="container">
		<div class="row">
            <div class="col-xs-12 col-sm-3">
                <a href="https://www.promatresp.com.br/" target="_blank">
                    <img src="https://novoprediopromatre.com.br/wp-content/uploads/2021/02/logo_promatre_tagline_negativo_rgb-01-1.png" class="img-responsive logo1 logo" alt="">
					<img src="https://novoprediopromatre.com.br/wp-content/uploads/2021/02/logo_promatre_tagline_negativo_rgb-02-1.png" class="img-responsive logo2 logo" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-9">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e('Toggle navigation', 'odin'); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'depth' => 2,
						'container' => false,
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
						'walker' => new Odin_Bootstrap_Nav_Walker()
					)
				);
				?>
			</nav>
            </div>
		</div>
	</div>
	<!-- .container-->
</header>
<?php while(have_rows('slider')): the_row();
$before = '';
if(get_sub_field('titulo')){
    $before = 'before';
}
?>
<?php
    $class = '';
    $video = '';
    if(is_home() OR is_front_page()){
        $bg = CONTENT_URI .'/assets/images/Abertura_Site_Pro_Novo_Predio_GIF.gif';
        $video = CONTENT_URI .'/assets/images/Abertura_Site_Pro_Novo_Predio_Ok.mp4';
        $class = 'video-modal';
        $video = 'data-theVideo="https://www.youtube.com/embed/jFvnoQ71Mi4?autoplay=1"';
    } else {
        $bg = get_sub_field('imagem');
    }
    ?>

<section class="banner <?php echo $before.' '. $class; ?>" <?php echo $video; ?> style="background-image: url(<?php echo $bg; ?>); background-size: cover;" data-toggle="modal" data-target="#myModal">
    <?php echo get_sub_field('video') ?>
	<div class="container">
		<div class="row">
			<div class="content-mid">
                <?php if(get_sub_field('icone')){ ?>
                <img src="<?php echo get_sub_field('icone')['url'] ?>" alt="">
                <?php } ?>
				<h1><?php echo get_sub_field('titulo') ?></h1>
				<p><?php echo get_sub_field('subtitulo') ?></p>
			</div>
            <div class="video-home">
                <img src="" class="img-responsive" alt="">
            </div>
		</div>
	</div>
</section>
<?php
    if(is_home() OR is_front_page()){ ?>
    <!-- Modal -->
    <div id="myModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <iframe width="750" height="450" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <style>
        .video-home {
            display: table;
            width: 45%;
            position: absolute;
            left: 55%;
            top: 50%;
            transform: translateY(-50%);
        }
        .modal-dialog {
            width: auto;
            display: table;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) !important;
            max-width: 80%;
        }
        .modal-content {
            background: transparent;
            box-shadow: none !important;
            border: none;
        }
        .modal-header {
            border: none;
            padding: 0;
        }

        button.close {
            color: #fff;
            text-shadow: none;
            font-size: 45px;
        }
        video,
        video source {
            max-width: 100%;
            width: auto;
        }

        section.banner:after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: url(<?php echo CONTENT_URI .'/assets/images/player.png'; ?>);
            background-size: contain;
        }

        .modal-backdrop.in {
            opacity: .9 !important;
            filter: alpha(opacity=90) !important;
        }
        iframe {
            max-width: 100%;
        }
    </style>
    <script>


        autoPlayYouTubeModal();

        //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
        function autoPlayYouTubeModal() {
            var trigger = $("body").find('[data-toggle="modal"]');
            trigger.click(function () {
                var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-theVideo"),
                    videoSRCauto = videoSRC + "";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal + ' button.close').click(function () {
                    $(theModal + ' iframe').attr('src', videoSRC);
                });
            });
        }
    </script>
<?php } ?>
<?php endwhile;?>
<style>
   .logo {
    display: table;
    margin: 10px auto 0;
    height: auto;
    width: auto;
    max-width: 160px;
    max-height: 85px;
}
    header#header {
        padding: 0px 0;
    }

    header#header nav {
        padding: 50px 0;
    }
</style>
