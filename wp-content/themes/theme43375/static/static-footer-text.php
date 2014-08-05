<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
        <?php $myfooter_text = of_get_option('footer_text'); ?>
        
        <?php if($myfooter_text){?>
                <?php echo of_get_option('footer_text'); ?>
        <?php } else { ?>
                <?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>. <a href="<?php echo home_url(); ?>/privacy-policy/" title="Privacy Policy"><?php _e('Privacy Policy', CURRENT_THEME); ?></a>
        <?php } ?>
        <?php if( is_front_page() ) { ?>
                Parcourez des <a target="_blank" rel="nofollow" href="http://www.templatemonster.com/fr/type/themes-wordpress/">thèmes WordPress</a> sur TemplateMonster.com
        <?php } ?>
</div>