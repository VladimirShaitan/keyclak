<?php
/*
 Template name: Registration
*/
get_header();
$form_type = get_post_meta($post->ID, 'reg_form', true);
$template = 'template/parts/registration/';
if($form_type === 'locataire_registration'){ $template .= 'locataire';} else {$template .= 'proprietaire';}
?>
<div class="main-content-container" style="background: url(<?php echo get_the_post_thumbnail_url($post->id); ?>)">
    <header class="main-header">
        <?php the_custom_logo(); ?>
    </header>
    <div class="content-container-wrapper form-page register-page">
        <div class="register-page-container">
            <div class="title"><?php echo $post->post_title; ?></div>
            <div class="subtitle"><?php echo $post->post_content; ?></div>
            <div class="middle-content-container">
                <?php echo get_template_part($template); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>