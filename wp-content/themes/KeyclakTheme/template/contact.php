<?php

/*

Template name: Contact page

*/



get_header('profile');

?>

<div class="contact-wrapper">
    <div class="sub-header">
        <span class="sub-title-page">Contact</span>
    </div>
    <div class="form-map">
        <div class="contact-form-block">

            <?php echo do_shortcode('[contact-form-7 id="63" title="Contact form"]');?>

        </div>
        <div class="contact-map-block">
            <span class="contact-info">
                <span class="phone-info">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icon/phone-icon.png">
                    <a href="tel:00330130118384">(00 33) 01 30 11 83 84</a>
                </span>
                 <span class="adress-info">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/icon/adress-icon.png">
                    <span>Paris, 34 Rue Jean Jaures</span>
                </span>
            </span>
            <span class="map-info">
                <iframe src="https://snazzymaps.com/embed/140483" width="100%" height="100%" style="border:none;"></iframe>
            </span>
        </div>
    </div>
</div>

<?php

    get_footer();

?>

