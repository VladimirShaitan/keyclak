<div class="clear"></div>
</div>


<?php
//if(is_front_page() || is_page('45') || is_page('73')) {?>



<footer id="footer" role="contentinfo">
    <div class="foot-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </div>
    <div id="copyright" style="display: none;">
        <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
    </div>

</footer>


<?php //} ?>


</div>
    <?php wp_footer(); ?>
</body>
</html>