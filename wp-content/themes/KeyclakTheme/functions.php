<?php

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
function themename_custom_logo_setup() {
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails' ); 
}
//Styles

add_action('wp_enqueue_scripts', 'include_styles');
function include_styles(){
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('style-new', get_stylesheet_directory_uri() . '/css/style-new.css');
    wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/font/fonts.css');
    wp_enqueue_style('home-new', get_stylesheet_directory_uri() . '/css/home-new.css');
    wp_enqueue_style('login-page-new', get_stylesheet_directory_uri() . '/css/login-page.css');
    wp_enqueue_style('profile-page', get_stylesheet_directory_uri() . '/css/profile-page.css');
    wp_enqueue_style('add-advert-page', get_stylesheet_directory_uri() . '/css/profile-add-advert.css');
    wp_enqueue_style('flickity-slider', get_stylesheet_directory_uri() . '/css/flickity.css');
}

// Scripts

add_action( 'wp_footer', 'include_scripts' );
function include_scripts() {
    echo '<script>let ajaxurl = "' . admin_url('admin-ajax.php') . '";</script>';
    wp_enqueue_script( 'password-strength-meter' );
    wp_enqueue_script('helper',  get_stylesheet_directory_uri() . '/scripts/helper.js');
    wp_enqueue_script('classes',  get_stylesheet_directory_uri() . '/scripts/classes.js');
    wp_enqueue_script('flickity_js',  get_stylesheet_directory_uri() . '/scripts/flickity.js', array('jquery'));
    wp_enqueue_script('main_js',  get_stylesheet_directory_uri() . '/scripts/main.js', array('jquery'));
    wp_enqueue_script('script',  get_stylesheet_directory_uri() . '/scripts/script.js');
}


add_filter('user_contactmethods', 'user_verification');
function user_verification($user_contactmethods){
    $user_contactmethods['verification_user'] = 'Verification';
    return $user_contactmethods;
}

// facebook log in
add_filter( 'wsl_hook_alter_provider_scope', 'wsl_change_default_permissons', 10, 2 );
function wsl_change_default_permissons( $provider_scope, $provider ) {
    if( 'facebook' == strtolower( $provider ) ) {
        $provider_scope = 'email, public_profile';
    }
    return $provider_scope;
}

// add user fields to admin panel
add_action( 'show_user_profile', 'profile_fields' );
add_action( 'edit_user_profile', 'profile_fields' );

function profile_fields( $user ) {
    $user_revenu = get_the_author_meta( 'revenu', $user->ID );
    $user_garant = get_the_author_meta( 'garant', $user->ID );
    $user_revenu_garant = get_the_author_meta( 'revenu_garant', $user->ID );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="user_revenu"><?php esc_html_e( 'Revenu', 'crf' ); ?></label></th>
            <td>
                <input type="text" id="user_revenu" name="user_revenu" value="<?php echo esc_attr( $user_revenu ); ?>" class="regular-text"
                />
            </td>
        </tr>

        <tr>
            <th><label for="user_garant"><?php esc_html_e( 'Garant', 'crf' ); ?></label></th>
            <td>
                <input type="text" id="user_garant" name="user_garant" value="<?php echo esc_attr( $user_garant ); ?>" class="regular-text"
                />
            </td>
        </tr>

        <tr>
            <th><label for="user_revenu_garant"><?php esc_html_e( 'Revenu garant', 'crf' ); ?></label></th>
            <td>
                <input type="text" id="user_revenu_garant" name="user_revenu_garant" value="<?php echo esc_attr( $user_revenu_garant ); ?>" class="regular-text"
                />
            </td>
        </tr>
    </table>
    <?php
}


// save user fields to database
add_action( 'personal_options_update', 'save_profile_fields' );
add_action( 'edit_user_profile_update', 'save_profile_fields' );

function save_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'revenu', $_POST['user_revenu'] );
    update_user_meta( $user_id, 'garant', $_POST['user_garant'] );
    update_user_meta( $user_id, 'revenu_garant', $_POST['user_revenu_garant'] );
}


add_role(
    'locataire',
    __( 'Locataire' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => false,
    )
);

add_role(
    'proprietaire',
    __( 'Proprietaire' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => false,
    )
);


add_action('wp_ajax_nopriv_register_user', 'register_user');
add_action('wp_ajax_register_user', 'register_user');
function register_user(){
    print_r($_POST);
    wp_die();
}