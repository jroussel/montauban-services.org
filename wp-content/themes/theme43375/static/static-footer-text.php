<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
        <?php $myfooter_text = of_get_option('footer_text'); ?>
        
        <?php if($myfooter_text){?>
                <?php echo of_get_option('footer_text'); ?>
        <?php } else { ?>
                <?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> - <a href="<?php echo home_url(); ?>/mentions-legales/" title="Mentions légales">Mentions légales</a>
        <?php } ?>
</div>