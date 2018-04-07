		<div class="footer footer-contact-boxes">
    		<div class="footer-content">
        		<div class="gridContainer">
            		<div class="row">
						<?php wp_nav_menu( array( 'theme_location' => 'footer'));?>
					</div>
				</div>
			</div>
			<div class="footer-content red">
        		<div class="gridContainer">
					<div class="row text-center">
						<?php wp_nav_menu( array( 'theme_location' => 'social'));?>
                    	<p class="copyright">&copy;&nbsp;&nbsp;2018&nbsp;La Compagnie de l'Artois - Tous droits réservés</p>
					</div>
        		</div>
    		</div>
		</div>
	</div>
<?php wp_footer(); ?>
</body>
</html>