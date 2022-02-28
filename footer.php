<footer id="colophon" class="site-footer" itemscope itemtype="http://schema.org/WPFooter">
	 <div class="footer-b">
		<div class="container">
			<div class="grupo">
			<div class="pie">
				<?php dynamic_sidebar( 'footer-one' ); ?>
			</div>
			<div class="pie">
				<?php dynamic_sidebar( 'footer-two' ); ?>
			</div>
			<div class="pie">
				<?php dynamic_sidebar( 'footer-three' ); ?>
			</div>
			</div>
			<div class="copyright">
				<?php if (is_page('Madrid - Barrio Chamberí')){?>
				<p style="text-align: center;">
				Tu clínica de Fisioterapia en el barrio de Chamberí
				</p>
				<?php 
                }else{ ?>
					<p style="text-align: center;">
					Corpostual - Tu clínica de Fisioterapia en Villaverde Alto
				</p>
                <?php } ?>             
            </div>
			<div class="legal">         
					<ul>
						<li><a href="/aviso-legal/" rel="nofollow">Aviso Legal</a></li>
						<li><a href="/politica-de-cookies/" rel="nofollow">Política de Cookies</a></li>
						<li><a href="/politica-de-privacidad/" rel="nofollow">Política de Privacidad</a></li>
					</ul>
            </div>
            <button aria-label="go to top" class="back-to-top">
                <i class="fas fa-chevron-up"></i>
            </button>
		</div>
	</div>
</footer><!-- #colophon -->
 <?php wp_footer(); ?>

</body>
</html>
