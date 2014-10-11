<?php $post_meta = of_get_option('post_meta'); ?>
<?php if ($post_meta=='true' || $post_meta=='') { ?>
	<!-- Post Meta -->
	<header class="post-header">
		<time class="post_date" datetime="<?php the_time('Y-m-d\TH:i:s'); ?>"><div><?php the_time('j'); ?></div><div><?php the_time('M'); ?></div></time>
		<div class="post_meta">
			<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php _e('Permalink to:', CURRENT_THEME);?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		</div>
	</header>
	<!--// Post Meta -->
<?php } ?>