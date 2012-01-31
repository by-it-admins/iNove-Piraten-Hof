<!-- header START -->
<div id="header">

	<!-- banner START -->
	<?php if( $options['banner_content'] && (
		($options['banner_registered'] && $user_ID) || 
		($options['banner_commentator'] && !$user_ID && isset($_COOKIE['comment_author_'.COOKIEHASH])) || 
		($options['banner_visitor'] && !$user_ID && !isset($_COOKIE['comment_author_'.COOKIEHASH]))
	) ) : ?>
		<div class="banner">
			<?php echo($options['banner_content']); ?>
		</div>
	<?php endif; ?>
	<!-- banner END -->

	

	<div class="fixed"></div>
</div>
<!-- header END -->

<!-- navigation START -->
<div id="navigation">
	<!-- menus START -->
	<ul id="menus">
		<li class="<?php echo($home_menu); ?>"><a class="home" title="<?php _e('Home', 'inove'); ?>" href="<?php echo get_settings('home'); ?>/"><?php _e('Home', 'inove'); ?></a></li>
		<?php
			if($options['menu_type'] == 'categories') {
				wp_list_categories('title_li=0&orderby=name&show_count=0');
			} else {
				wp_list_pages('title_li=0&sort_column=menu_order');
			}
		?>
		<li><a class="lastmenu" href="javascript:void(0);"></a></li>
	</ul>
	<!-- menus END -->


	<div class="fixed"></div>
</div>
<!-- navigation END -->
