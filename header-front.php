<?php if ( is_front_page() ) : ?>
	<div id="headline"><div id="headline-inner">
		<h2 class="graphic home"><?php bloginfo( 'description' ); ?></h2>
		<p><?php esc_html_e( 'Thou hast made me endless, such is thy pleasure. This frail vessel thou emptiest again and again, and fillest it ever with fresh life. ', 'bborg' ); ?></p>
		<div>
			<a href="<?php echo esc_url( home_url() ); ?>/forums/" id="big-demo-button" class="button"><?php esc_html_e( 'Chatter Gaily &rarr;', 'bborg' ); ?></a>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/screenshots.png?v=6" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/screenshots.png?v=6 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/screenshots-2x.png?v=6 2x" alt="<?php esc_attr_e( 'Screenshots', 'bborg' ); ?>">
		</div>
	</div></div>
	<hr class="hidden" />

<?php endif;
