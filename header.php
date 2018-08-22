<!DOCTYPE html><html <?php language_attributes(); ?>>

<?php get_template_part( 'header', 'head' ); ?>

<body id="top" <?php body_class(); ?>>

<?php get_template_part( 'header', 'accessibility' ); ?>

	<div id="header"><div id="header-inner">
		<?php get_template_part( 'header', 'nav' ); ?>

		<h1><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	</div></div>
	<hr class="hidden" />
	
<?php get_template_part( 'header', 'front'  ); ?>

	<div id="main" <?php if ( ( function_exists( 'is_bbpress' ) && is_bbpress() && ! is_front_page() ) || is_page( 'new-topic' ) ) : ?> <?php echo 'class="bborg_forum"'; ?> <?php endif; ?>>
		<div class="content">
