<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-new.css"/>
    <?php wp_head(); ?>

    <script>
        jQuery(document).ready( function() {
            window.$ = window.jQuery;

            $("#ubload-btn-left").change(function(){
                var filename = $(this).val().replace(/.*\\/, "");
                $(".upload-text-btn").html(filename);
            });

            $("#ubload-btn-right").change(function(){
                var filename = $(this).val().replace(/.*\\/, "");
                $(".upload-text-btn-right").html(filename);
            });

        });
    </script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">

    <?php
    //    if( is_front_page() ) {
    //         include('template/header/home-header.php');
    //     }

    //    if(is_page('45') || is_page('73')){
        // else{
        //     include('template/header/all-page-header.php');
        // }
    ?>

    <div id="container">