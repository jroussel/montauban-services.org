<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
	<?php get_template_part('includes/post-formats/post-meta'); ?>
	
	<?php $url =  get_post_meta(get_the_ID(), 'tz_link_url', true); ?>
	
	
	<!-- Post Content -->
	<div class="post_content">
		<?php the_content(''); ?>
		<div class="clear"></div>
	</div>
	<!-- //Post Content -->
	
</article><!--//.post-holder-->