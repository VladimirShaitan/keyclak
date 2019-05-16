<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<?php
$GLOBALS['user_meta'] = get_user_meta(get_current_user_id());
$GLOBALS['user_data'] = get_userdata(get_current_user_id());
$user_menu = 'locataire';
if(in_array('proprietaire', $GLOBALS['user_data']->roles)){$user_menu = 'proprietaire';}
?>
<!-- <pre>
    <?php print_r($GLOBALS['user_meta']);?> 
    <?php print_r($GLOBALS['user_data']);?> 
</pre> -->
    <header class="header-all-page">
        <div class="header-container">
            <span class="logo-span">
                <?php the_custom_logo(); ?>
            </span>
            <span class="user-info">
                <div class="round-user-photo">
                    <img alt="<?php echo $GLOBALS['user_data']->data->display_name; ?>" title="<?php echo $GLOBALS['user_data']->data->display_name; ?>" class="profile_photo_header" src="<?php echo $GLOBALS['user_meta']['profile_picture'][0]; ?>">
                </div>
                <div class="user-name-block">
                    <span class="user-name">Bonjour <?php echo $GLOBALS['user_meta']['first_name'][0]; ?></span>
                    <span class="user-progress">
                        <span class="progress_load" style="width: 70%;"></span>
                    </span>
                </div>
            </span>
            <span class="user-notifications">
                <span class="round-notifications"></span>
                <span class="btn-mes">Mes notifications</span>
                <span class="header-sign-out-btn">Déconnexion</span>
            </span>
        </div>
    </header>

    <div id="container">
        <div class="main-content-container">



        <div class="sub-header">
            <span class="sub-title-page">Mon profil</span>
            <div class="sub-header-navigation">
                <a href="http://">Mon recherche</a>
                <a href="http://">Mon agenda</a>
            </div>
<!--             <?php wp_nav_menu(array(
                    'theme_location'  => $user_menu,
                    'menu'            => 10, 
                    'container'       => 'div', 
                    'container_class' => '', 
                    'container_id'    => '',
                    'menu_class'      => 'sub-header-navigation', 
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<div>%3$s</div>',
                    'depth'           => 0,
                    'walker'          => '',
                 )); ?> -->
        </div>


