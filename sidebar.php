</div>
<div class="sidebar">

	<?php if ( ( function_exists( 'is_bbpress' ) && is_bbpress() && ! is_front_page() ) || is_page( 'new-topic' ) ) : ?>

		<?php if ( bbp_is_single_forum() || bb_base_topic_search_query( false ) ) : ?>

			<div>
				<h3><?php _e( 'Forum Info', 'bborg'); ?></h3>
				<ul class="forum-info">
					<?php bb_base_single_forum_description(); ?>
				</ul>
			</div>

			<?php bb_base_topic_search_form(); ?>

			<div>
				<h3><?php _e( 'Forum Feeds', 'bborg'); ?></h3>
				<ul>
					<li><a class="feed" href="<?php bbp_forum_permalink(); ?>feed/" title="<?php esc_attr_e( 'Forum Posts', 'bborg' ); ?>"><?php esc_html_e( 'Recent Posts', 'bborg' ); ?></a></li>
					<li><a class="feed" href="<?php bbp_forum_permalink(); ?>feed/?type=topic" title="<?php esc_attr_e( 'Forum Topics', 'bborg' ); ?>"><?php esc_html_e( 'Recent Topics', 'bborg' ); ?></a></li>
				</ul>
			</div>

		<?php elseif ( bbp_is_single_topic() || bbp_is_topic_edit() || bbp_is_reply_edit() ) : ?>

			<div>
				<h3><?php _e( 'Topic Info', 'bborg'); ?></h3>
				<ul class="topic-info">
					<?php bb_base_single_topic_description(); ?>
				</ul>
			</div>

			<div>
				<?php bbp_topic_tag_list( 0, array(
					'before' => '<h3>' . esc_html__( 'Topic Tags', 'bborg' ) . '</h3><ul class="topic-tags"><li>',
					'after'  => '</li></ul>',
					'sep'    => '</li><li>',
				) ); ?>
			</div>

			<?php bb_base_reply_search_form(); ?>

			<?php if ( current_user_can( 'moderate', bbp_get_topic_id() ) ) : ?>

				<div>
					<?php bbp_topic_admin_links( array (
						'id'     => bbp_get_topic_id(),
						'before' => '<h3>' . esc_html__( 'Topic Admin', 'bborg' ) . '</h3><ul class="topic-admin-links"><li>',
						'after'  => '</li></ul>',
						'sep'    => '</li><li>',
						'links'  => array()
					) ); ?>
				</div>

			<?php endif; ?>

		<?php else : ?>

			<div>
				<h3><?php _e( 'Forums', 'bborg'); ?></h3>
				<?php echo do_shortcode( '[bbp-forum-index]' ); ?>
				
			</div>
			<hr class="hidden" />

			<div>
				<h3><?php _e( 'Views', 'bborg'); ?></h3>
				<ul>

					<?php foreach ( bbp_get_views() as $view => $args ) : ?>

						<li><a class="bbp-view-title" href="<?php bbp_view_url( $view ); ?>" title="<?php bbp_view_title( $view ); ?>"><?php bbp_view_title( $view ); ?></a></li>

					<?php endforeach; ?>

				</ul>
			</div>

			<div>
				<h3><?php _e( 'Feeds', 'bborg'); ?></h3>
				<ul>
					<li><a class="feed" href="<?php bbp_forums_url(); ?>feed/" title="<?php esc_attr_e( 'All Recent Posts', 'bborg' ); ?>"><?php esc_html_e( 'All Recent Posts', 'bborg' ); ?></a></li>
					<li><a class="feed" href="<?php bbp_topics_url(); ?>feed/" title="<?php esc_attr_e( 'All Recent Topics', 'bborg' ); ?>"><?php esc_html_e( 'All Recent Topics', 'bborg' ); ?></a></li>
				</ul>
			</div>

			<div>
				<h3><?php _e( 'Tags', 'bborg'); ?></h3>
				<?php echo do_shortcode( '[bbp-topic-tags]' ); ?>
			</div>

		<?php endif; ?>

	<?php elseif ( is_front_page() || is_404() ) : ?>

		<div class="feature">
			<h3><?php _e('Blog', 'bborg'); ?></h3>
			<?php echo do_shortcode('[recent-posts]');?>
		</div>


	<?php elseif ( ( ! is_page( 'login' ) && ! is_page( 'register' ) && ! is_page( 'lost-password' ) ) || is_home() || is_singular( 'post' ) || is_archive() ) : ?>

		<div>
			<h3><?php _e( 'Categories', 'bborg'); ?></h3>
			<ul>
				<?php wp_list_categories( array( 'title_li' => false ) ); ?>
			</ul>
		</div>

		<?php if ( bborg_active_sidebars() ) : ?>
		<div>
		<?php
				dynamic_sidebar('bborg-social-widget');
				dynamic_sidebar('bborg-sidebar'); 
		?>
		</div>
		<?php endif; ?>

		<div>
			<h3><?php _e( 'Tags', 'bborg'); ?></h3>
			<?php wp_tag_cloud(); ?><br>
		</div>
		
	<?php endif; ?>

</div>
