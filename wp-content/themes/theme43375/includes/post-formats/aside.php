<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
	<?php get_template_part('includes/post-formats/post-meta'); ?>	
	
    <!-- Post Content -->
    <div class="post_content">
        <?php the_content('<span>Continue Reading</span>'); ?>
    	<!--// Post Content -->
    	<div class="clear"></div>
    </div>
    
    

</article><!--//.post__holder-->