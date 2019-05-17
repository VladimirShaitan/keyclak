<?php
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
function themename_custom_logo_setup() {
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails' ); 
    add_post_type_support( 'page', 'excerpt' );
    register_nav_menus(array(
        'locataire'    => 'Locataire account menu',
        'proprietaire' => 'Proprietaire account menu',
        'footer-menu'  => 'Footer menu',
    ) );
}


// Menus
add_filter( 'wp_nav_menu_items', 'filter_function_name_4792', 10, 2 );
function filter_function_name_4792( $items, $args ){
    echo '<pre>';
        print_r($items);
    echo '</pre>';
    return $items;
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
    $user_profile_picture = get_the_author_meta( 'profile_picture', $user->ID );
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
        <tr>
            <th><label for="user_profile_picture"><?php esc_html_e( 'Profile picture', 'crf' ); ?></label></th>
            <td>
                <img width="100" src="<?php echo esc_attr( $user_profile_picture ); ?>">
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

// registration
add_action('wp_ajax_nopriv_register_user', 'register_user');
add_action('wp_ajax_register_user', 'register_user');
function register_user(){
    $file_exist = false;
    $errors = array();
    $dep_fields = array('email', 'first-name', 'last-name', 'user_role');
    if($_FILES['file-photo']['size'] > 0){$file_exist = true;}

    if($file_exist){
        $file = & $_FILES['file-photo'];
        $overrides = [ 'test_form' => false ];
        $movefile = wp_handle_upload($file, $overrides, null );
        if(!empty($movefile['error'])){
            $errors['errors']['file'] = "Impossible de télécharger le fichier";
        }
    }

    if(!is_email($_POST['email'])){
        $errors['errors']['email'] =  'L\'adresse E-mail est incorrecte';
    } else {
        if(email_exists($_POST['email'])){
            $errors['errors']['email'] =  'Cet email est déjà enregistré';
        }
    }

    if(!empty($errors)){
        wp_send_json($errors);
    }
    

    $userdata = array(
        'user_pass'       => $_POST['password'],
        'user_login'      => $_POST['email'],
        'user_nicename'   => $_POST['first-name'] . ' ' . $_POST['last-name'],
        'user_email'      => $_POST['email'],
        'display_name'    => $_POST['first-name'] . ' ' . $_POST['last-name'],
        'nickname'        => $_POST['first-name'] . ' ' . $_POST['last-name'],
        'first_name'      => $_POST['first-name'],
        'last_name'       => $_POST['last-name'],
        'rich_editing'    => 'false',
        'role'            => $_POST['user_role'],
        'show_admin_bar_front' => true,
        'use_ssl' => true,
    );
    $user_id = wp_insert_user($userdata);
    if(!is_wp_error($user_id)){
        update_user_meta($user_id, 'profile_picture', $movefile['url']);
        foreach ($_POST as $f_name => $f_val) {
            if(!in_array($f_name, $dep_fields) && $f_name != 'password'){
                update_user_meta($user_id, $f_name, $f_val);
            } else if($f_name === 'password'){
                update_user_meta($user_id, 'pwd', base64_encode($f_val));
            }
        }

        $login_user = wp_signon(array(
            'user_login'    => $userdata['user_login'],
            'user_password' => $userdata['user_pass'],
            'remember'      => true,
        ));
        if(!is_wp_error($login_user)){
            $responce = array('success' => true);
            switch ($userdata['role']) {
                case 'locataire':
                    $responce['url'] = '/account/locataire/';
                    break;
                case 'proprietaire':
                    $responce['url'] = '/account/proprietaire/';
                    break;
            }
        } else {
            $responce = array('success' => true);
            switch ($userdata['role']) {
                case 'locataire':
                    $responce['url'] = '/login/locataire/';
                    break;
                case 'proprietaire':
                    $responce['url'] = '/login/proprietaire/';
                    break;
            }
        }
     } else {
        $errors['errors']['general'] = 'Désolé, une erreur s\'est produite lors de l\'inscription, veuillez réessayer plus tard.';
        wp_send_json($errors);
     }

    wp_send_json($responce);
}

// login

add_action('wp_ajax_nopriv_login_user', 'login_user');
add_action('wp_ajax_login_user', 'login_user');
function login_user(){
    $er_mes = 'Le nom d\'utilisateur ou le mot de passe sont incorrects';
    if(!is_wp_error(wp_signon($_POST))){
        $user_data = wp_signon($_POST)->roles;
        $responce = array('success' => true);
        if(in_array('locataire', $user_data)){
            $responce['url'] = '/account/locataire/';
        } else if(in_array('proprietaire', $user_data)){
            $responce['url'] = '/account/proprietaire/';
        } else {
            wp_logout();
            wp_send_json(array('errors' => $er_mes));
        }
        wp_send_json($responce);
    } else {
        wp_send_json(array('errors' => $er_mes));
    }
}

function check_user_loggedin(){
    if(is_user_logged_in()){
        $user_info = wp_get_current_user();
        if(in_array('proprietaire', $user_info->roles)){
            wp_safe_redirect('/account/proprietaire/');
        } elseif(in_array('locataire', $user_info->roles)) {
            wp_safe_redirect('/account/locataire/');
        }
    }
}

function check_user_loggedout(){
    if(!is_user_logged_in()){
        wp_safe_redirect('/');
    }
}