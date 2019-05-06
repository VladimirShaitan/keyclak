<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


//add_shortcode('email_code', 'email_code');
add_action('wpmm_after_body', 'email_code');
function email_code(){
     echo do_shortcode( '[contact-form-7 id="58" title="email"]' );
}
//font for keyclak site
add_action( 'wp_enqueue_scripts', 'keyclack_fonts' );
function keyclack_fonts(){
    wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/font/fonts.css');
}
//home page
add_action( 'wp_enqueue_scripts', 'keyclack_home_new' );
function keyclack_home_new(){
    wp_enqueue_style('home-new', get_stylesheet_directory_uri() . '/home-new.css');
}
//login page
add_action( 'wp_enqueue_scripts', 'keyclack_login_page_new' );
function keyclack_login_page_new(){
    wp_enqueue_style('login-page-new', get_stylesheet_directory_uri() . '/login-page.css');
}
//profile page
add_action( 'wp_enqueue_scripts', 'keyclack_profile_page' );
function keyclack_profile_page(){
    wp_enqueue_style('profile-page', get_stylesheet_directory_uri() . '/profile-page.css');
}
//add-advert-page
add_action( 'wp_enqueue_scripts', 'keyclack_add_advert_page' );
function keyclack_add_advert_page(){
    wp_enqueue_style('add-advert-page', get_stylesheet_directory_uri() . '/profile-add-advert.css');
}
//flickity-css file
add_action( 'wp_enqueue_scripts', 'flickity_main_css' );
function flickity_main_css(){
    wp_enqueue_style('flickity-slider', get_stylesheet_directory_uri() . '/flickity.css');
}





//include js-file
add_action('wp_footer', 'keyclack_main_js');
function keyclack_main_js(){ 
    wp_enqueue_script('flickity_js',  get_stylesheet_directory_uri() . '/scripts/flickity.js', array('jquery'));
    wp_enqueue_script('main_js',  get_stylesheet_directory_uri() . '/scripts/main.js', array('jquery'));
}

add_filter('user_contactmethods', 'user_verification');

function user_verification($user_contactmethods){
    $user_contactmethods['verification_user'] = 'Verification';
    return $user_contactmethods;
}

// facebook log in
add_filter( 'wsl_hook_alter_provider_scope', 'wsl_change_default_permissons', 10, 2 );
function wsl_change_default_permissons( $provider_scope, $provider )
{
    if( 'facebook' == strtolower( $provider ) )
    {
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
