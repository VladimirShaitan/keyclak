<?php 
/*
	Template name: Login
*/
	get_header();
?>
<div class="main-content-container" style="background: url(<?php echo get_the_post_thumbnail_url($post->id); ?>)">
    <header class="main-header">
		<?php the_custom_logo(); ?>
    </header>
    <div class="content-container-wrapper register-page">
        <div class="login-page-container">
            <div class="title"><?php echo $post->post_title; ?></div>

            <div class="middle-content-container">
                <div class="left-content">
                    <div class="text-container">
                    	<?php echo $post->post_content; ?>
                    </div>
                </div>

                <div class="right-content">
                    <div class="text-container">
                        <div class="form-title">Se connecter :</div>
                        <form class="se-connecter-form">
                            <input type="email" placeholder="Adresse e-mail">
                            <input type="email" placeholder="Mot de passe">
                            <input type="submit" class="se-connecte-submit" value="Connexion">
                        </form>
                       <!--  <div class="p-facebook-under-form">
                            Se connecter avec <i class="icon facebook"></i>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="subtitle"><?php echo $post->post_excerpt; ?></div>
        </div>
    </div>
</div>

<?php
    get_footer();

?>
