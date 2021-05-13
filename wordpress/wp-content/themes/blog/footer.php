<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<footer id="footer" class="text-center" role="contentinfo">
	<div class="container">
		<div class="row">
            <div class="col-xs-12 col-sm-4">
                <span class="titleFooter">Fale Conosco</span>
                <ul class="email">
                    <li class="email">contato@promatresp.com.br</li>
                </ul>
            </div>
			<div class="col-xs-12 col-sm-4">
				<span class="titleFooter">Nossos canais</span>
				<ul class="sociais">
					<li class="linkedin">
						<a href="https://www.linkedin.com/company/grupo-santa-joana/" target="_blank">
							<img src="<?php echo CONTENT_URI .'/assets/images/linkedin.png'; ?>" alt="">
						</a>
					</li>
					<li class="instagram">
						<a href="https://www.instagram.com/pro_matre/" target="_blank">
							<img src="<?php echo CONTENT_URI .'/assets/images/instagram.png'; ?>" alt="">
						</a>
					</li>
					<li class="youtube">
						<a href="https://www.youtube.com/user/ProMatrePaulista1" target="_blank">
							<img src="<?php echo CONTENT_URI .'/assets/images/youtube.png'; ?>" alt="">
						</a>
					</li>
					<li class="facebook">
						<a href="https://www.facebook.com/promatre/" target="_blank">
							<img src="<?php echo CONTENT_URI .'/assets/images/facebook.png'; ?>" alt="">
						</a>
					</li>
					<li class="spotify">
						<a href="https://open.spotify.com/playlist/3i9xAAKRB2pGjauS2Jgwim?si=HLtjtS_PTO-ib0_w_K5rFA" target="_blank">
							<img src="<?php echo CONTENT_URI .'/assets/images/spotify_icone.png'; ?>" alt="">
						</a>
					</li>
				</ul>
			</div>
            <div class="col-xs-12 col-sm-4">
                <span class="titleFooter">Central de atendimento</span>
                <ul class="contatos">
                    <li class="tel">11 3269-2233</li>
                    <li class="whats"><a href="https://api.whatsapp.com/send?phone=5511996846935&text=Ol%C3%A1,+gostaria+de+mais+informa%C3%A7%C3%B5es+sobre+o+novo+Centro+de+Sa%C3%BAde+da+Mulher+Pro+Matre" target="_blank">11 99684-6935</a></li>
                </ul>
            </div>

		</div>
	</div>
	<!-- .container -->
	<div class="container">
		<div class="row">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main-menu-footer',
					'depth' => 2,
					'container' => false,
					'menu_class' => 'nav navbar-nav menu-footer',
					'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
					'walker' => new Odin_Bootstrap_Nav_Walker()
				)
			);
			?>
		</div>
		<div class="row">
			<p>&copy; <?php echo 'Copyright'; ?> <?php echo date('Y'); ?> Pro Matre. Todos os Direitos Reservados. | R. São Carlos do Pinhal, 139 - CEP: 01333-001 Bela Vista - SP São Paulo - SP - 11 3269 2233 <br>
				Responsável Técnico: Dr. Rodrigo Buzzini - CRM 124390 | <b> Grupo Santa Joana: <a href="https://www.promatresp.com.br/" target="_blank"> Hospital e Maternidade Pro Matre</a> |<a href="https://santajoana.com.br/" target="_blank"> Hospital e Maternidade Santa Joana </a> |
                    <a href="https://maternidadesantamaria.com.br/" target="_blank">Hospital e Maternidade Santa Maria</a></b></p>
		</div>
	</div>
</footer>
<!-- #footer -->

<?php wp_footer(); ?>
</body>
</html>
