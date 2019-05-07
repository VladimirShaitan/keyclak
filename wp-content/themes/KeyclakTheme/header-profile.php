<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">

    <header class="header-all-page">
        <div class="header-container">
            <span class="logo-span">
                <a href="<?php bloginfo('url'); ?>"><img src="<? echo get_bloginfo('template_url');?>/img/logo.png"></a>
            </span>
            <span class="user-info">
                <div class="round-user-photo">
                    <img src="/wp-content/uploads/2019/03/user-photo.png">
                </div>
                <div class="user-name-block">
                    <span class="user-name">Bonjour Grégoire !</span>
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


