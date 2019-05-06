<?php
/**
 * Created by G5Theme.
 * User: trungpq
 * Date: 01/11/16
 * Time: 5:11 PM
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if (!is_user_logged_in()) {
    echo ere_get_template_html('global/access-denied.php', array('type' => 'not_login'));
    return;
}
global $current_user;
wp_get_current_user();
$user_id = $current_user->ID;
$user_login = $current_user->user_login;
$user_firstname = get_the_author_meta('first_name', $user_id);
$user_lastname = get_the_author_meta('last_name', $user_id);
$user_email = get_the_author_meta('user_email', $user_id);
$user_mobile_number = get_the_author_meta(ERE_METABOX_PREFIX . 'author_mobile_number', $user_id);
$user_fax_number = get_the_author_meta(ERE_METABOX_PREFIX . 'author_fax_number', $user_id);
$user_company = get_the_author_meta(ERE_METABOX_PREFIX . 'author_company', $user_id);
$user_licenses = get_the_author_meta(ERE_METABOX_PREFIX . 'author_licenses', $user_id);
$user_office_number = get_the_author_meta(ERE_METABOX_PREFIX . 'author_office_number', $user_id);
$user_office_address = get_the_author_meta(ERE_METABOX_PREFIX . 'author_office_address', $user_id);
$user_des = get_the_author_meta('description', $user_id);
$user_facebook_url = get_the_author_meta(ERE_METABOX_PREFIX . 'author_facebook_url', $user_id);
$user_twitter_url = get_the_author_meta(ERE_METABOX_PREFIX . 'author_twitter_url', $user_id);
$user_linkedin_url = get_the_author_meta(ERE_METABOX_PREFIX . 'author_linkedin_url', $user_id);
$user_pinterest_url = get_the_author_meta(ERE_METABOX_PREFIX . 'author_pinterest_url', $user_id);
$user_instagram_url = get_the_author_meta(ERE_METABOX_PREFIX . 'author_instagram_url', $user_id);
$user_googleplus_url = get_the_author_meta(ERE_METABOX_PREFIX . 'author_googleplus_url', $user_id);
$user_youtube_url = get_the_author_meta(ERE_METABOX_PREFIX . 'author_youtube_url', $user_id);
$user_vimeo_url = get_the_author_meta(ERE_METABOX_PREFIX . 'author_vimeo_url', $user_id);
$user_skype = get_the_author_meta(ERE_METABOX_PREFIX . 'author_skype', $user_id);
$user_website_url = get_the_author_meta('user_url', $user_id);
$user_revenu = get_the_author_meta('revenu', $user_id);
$user_garant = get_the_author_meta('garant', $user_id);
$user_revenu_garant = get_the_author_meta('revenu_garant', $user_id);

$user_position = get_the_author_meta(ERE_METABOX_PREFIX . 'author_position', $user_id);
$user_custom_picture = get_the_author_meta(ERE_METABOX_PREFIX . 'author_custom_picture', $user_id);
$author_picture_id = get_the_author_meta(ERE_METABOX_PREFIX . 'author_picture_id', $user_id);
$no_avatar_src = ERE_PLUGIN_URL . 'public/assets/images/profile-avatar.png';
$width = get_option('thumbnail_size_w');
$height = get_option('thumbnail_size_h');
$default_avatar = ere_get_option('default_user_avatar', '');
if ($default_avatar != '') {
    if (is_array($default_avatar) && $default_avatar['url'] != '') {
        $resize = ere_image_resize_url($default_avatar['url'], $width, $height, true);
        if ($resize != null && is_array($resize)) {
            $no_avatar_src = $resize['url'];
        }
    }
}
$user_as_agent = ere_get_option('user_as_agent', 1);
$enable_submit_property_via_frontend = ere_get_option('enable_submit_property_via_frontend', 1);
$is_agent = ere_is_agent();

wp_enqueue_script('plupload');
wp_enqueue_script(ERE_PLUGIN_PREFIX . 'profile');
$hide_user_info_fields = ere_get_option('hide_user_info_fields', array());
if (!is_array($hide_user_info_fields)) {
    $hide_user_info_fields = array();
}
?>
<div class="main-content-container">
    <header class="sub-header">
        <span class="sub-title-page">Mon profil</span>
        <div class="sub-header-navigation">
            <a href="http://">Mon recherche</a>
            <a href="http://">Mon agenda</a>
        </div>
    </header>
    <div class="content-container-wrapper">
        <form action="#" class="ere-update-profile">
            <div class="profile-wrapper">
                <div class="profile-info-container">
                    <div class="profile-photo-container">
                        <label for="ere_select_profile_image" class="label-user-profile-photo">
                             <div id="user-profile-img">
                                            <div class="profile-thumb">
                                                <?php
                                                if (!empty($author_picture_id)) {
                                                    $author_picture_id = intval($author_picture_id);
                                                    if ($author_picture_id) {
                                                        $avatar_src = ere_image_resize_id($author_picture_id, $width, $height, true);
                                                        ?>
                                                        <img width="<?php echo esc_attr($width) ?>"
                                                             height="<?php echo esc_attr($height) ?>" id="profile-image"
                                                             src="<?php echo esc_url($avatar_src); ?>"
                                                             onerror="this.src = '<?php echo esc_url($no_avatar_src) ?>';"
                                                             alt="<?php esc_attr_e('User Avatar', 'essential-real-estate') ?>">
                                                        <input type="hidden" class="profile-pic-id" id="profile-pic-id"
                                                               name="profile-pic-id"
                                                               value="<?php echo esc_attr($author_picture_id); ?>"/>
                                                        <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <img width="<?php echo esc_attr($width) ?>"
                                                         height="<?php echo esc_attr($height) ?>" id="profile-image"
                                                         src="<?php echo esc_url($user_custom_picture); ?>"
                                                         onerror="this.src = '<?php echo esc_url($no_avatar_src) ?>';"
                                                         alt="<?php esc_attr_e('User Avatar', 'essential-real-estate') ?>">
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        

                                        </div>
                                    </label>
                                    <div class="profile-img-controls">
                                        <div id="errors_log"></div>
                                    </div>
                                    <div id="ere_profile_plupload_container">
                                        <button type="button" id="ere_select_profile_image"
                                                class="btn btn-primary"><?php esc_html_e('Update Profile Picture', 'essential-real-estate'); ?></button>
                                    </div>
                                    <a href="<?php echo esc_url($user_linkedin_url); ?>" class="social-link" target="_blank">
                                                <img src="/wp-content/uploads/2019/03/linkedin.png" alt="">
                                            </a>
                        <div class="user-navigation-panel">
                            <a class="navigation-link" href="<?php $permalink = get_permalink(); echo wp_logout_url($permalink); ?>">Me déconnecter</a>
                            <p id="modife-profile" class="navigation-link">Modifier mes informations</p>
                            <a href="#" class="navigation-link">Supprimer mon compte</a>
                        </div>
                    </div>

                    <div class="profile-data-wrapper">
                        <div class="profile-main-data">
                            <ul>
                                <li>
                                    <div class="left-side">
                                        <label for="user_lastname"><?php esc_html_e('Nom', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side">
                                        <input type="text" name="user_lastname" id="user_lastname" class="form-control" value="<?php echo esc_attr($user_lastname); ?>" readonly>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-side">
                                        <label for="user_firstname"><?php esc_html_e('Prénom', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side">
                                        <input type="text" name="user_firstname" id="user_firstname" class="form-control" value="<?php echo esc_attr($user_firstname); ?>" readonly>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-side">
                                        <label for="user_email"><?php esc_html_e('Email', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side">
                                        <input type="text" name="user_email" id="user_email" class="form-control"value="<?php echo esc_attr($user_email); ?>" readonly>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-side">
                                        <label for="user_mobile_number"><?php esc_html_e('Numéro de téléphone ', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side">
                                        <input type="text" id="user_mobile_number" name="user_mobile_number" class="form-control" value="<?php echo esc_attr($user_mobile_number); ?>" readonly>
                                    </div>
                                </li>
                                <li>
                                	<div class="left-side">
                                        <label for="user_mobile_number"><?php esc_html_e('Mot de passe', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side">
                                        <input id="newpass" value="" class="form-control" name="newpass" type="password" readonly placeholder="******">
                                    </div>
                                </li>
                                <li>
                                    <div class="left-side">
                                        <label
                                                for="user_youtube_url"><?php esc_html_e('Vidéo de présentation', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side">
                                        <input type="text" id="user_youtube_url" name="user_youtube_url"
                                                   class="form-control"
                                                   value="<?php echo esc_url($user_youtube_url); ?>" readonly>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-side">
                                        <label for="user_linkedin_url"><?php esc_html_e('Linkedin', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side">
                                        <input type="text" id="user_linkedin_url" name="user_linkedin_url" class="form-control" value="<?php echo esc_url($user_linkedin_url); ?>" readonly>
                                    </div>
                                </li>           
                            </ul>
                            <?php wp_nonce_field('ere_update_profile_ajax_nonce', 'ere_security_update_profile'); ?>
                            <button type="button" class="btn btn-primary display-block"
                                    id="ere_update_profile"><?php esc_html_e('Valider', 'essential-real-estate'); ?></button> 
                        </div>
                        <div class="profile-sub-data">
                            <div class="sub-data-wrapper">
                                <div class="sub-data-string">
                                    <div class="left-side">
                                         <label for="user_des"><?php esc_html_e('Statut :', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side">
                                        <input id="user_des" name="user_des" class="form-control" value="<?php echo esc_attr($user_des); ?>" readonly>
                                    </div>
                                </div>
                                <div class="sub-data-string">
                                    <div class="left-side">
                                         <label for="user_des"><?php esc_html_e('Revenu :', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side">
                                        <input type="text" name="user_revenu" id="user_revenu" class="form-control" value="<?php echo esc_attr($user_revenu); ?>" readonly>
                                    </div>
                                </div>
                                <div class="sub-data-string">
                                    <div class="left-side">
                                         <label for="user_garant"><?php esc_html_e('Garant :', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side">
                                        <input id="user_garant" name="user_garant" class="form-control" value="<?php echo esc_attr($user_garant); ?>" readonly>
                                    </div>
                                </div>
                                <div class="sub-data-string">
                                    <div class="left-side">
                                         <label for="user_revenu_garant"><?php esc_html_e('Revenu garant :', 'essential-real-estate'); ?></label>
                                    </div>
                                    <div class="right-side revenu_garant">
                                        <input id="user_revenu_garant" name="user_revenu_garant" class="form-control" value="<?php echo esc_attr($user_revenu_garant); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="profile-document-container">
            <div class="section-title">
                Mes documents
            </div>
            <div class="document-nav-panel">
                <div class="navigate-wrapper">
                    <div class="document-hidden-list" id="dropdown-button">
                        <span>Toutes mes pièces</span>
                        <i class="icon arrow"></i>
                    </div>
                    <div class="document-download">
                        <label class="upload-file">
                            <input type="file" name="" id="">
                            <span>ajouter une pièce jointe</span>
                            <i class="icon upload"></i>
                        </label>
                        
                    </div>
                </div>

                <ul class="document-list-container" id="dropdown-list">
                    <li class="document-item">
                        <div class="doc-icon-container">
                            <i class="icon doc-1"></i>
                        </div>
                        <div class="document-name">Fiche<br /> de paies</div>
                    </li>
                
                    <li class="document-item">
                        <div class="doc-icon-container">
                            <i class="icon doc-2"></i>
                        </div>
                        <div class="document-name center-phrase">CNI</div>
                    </li>
                
                    <li class="document-item">
                        <div class="doc-icon-container">
                            <i class="icon doc-3"></i>
                        </div>
                        <div class="document-name">Dernière quittance</div>
                    </li>
                
                    <li class="document-item">
                        <div class="doc-icon-container">
                            <i class="icon doc-4"></i>
                        </div>
                        <div class="document-name">Dernier avis d’imposition</div>
                    </li>
                
                    <li class="document-item">
                        <div class="doc-icon-container">
                            <i class="icon doc-5"></i>
                        </div>
                        <div class="document-name">Contrat de travail</div>
                    </li>
                
                    <li class="document-item">
                        <div class="doc-icon-container">
                            <i class="icon doc-6"></i>
                        </div>
                        <div class="document-name">Attestation d’employeur</div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="profile-document-container">
            <div class="document-nav-panel bottom-nav-panel">
                <div class="navigate-wrapper">
                    <div class="document-hidden-list">
                        <span>Toutes mes pièces</span>
                        <i class="icon arrow"></i>
                    </div>
                    <div class="section-title">
                        Mon conjoint
                    </div>
                    <div class="document-download">
                        <label class="upload-file">
                            <input type="file" name="" id="">
                            <span>ajouter une pièce jointe</span>
                            <i class="icon upload"></i>
                        </label>
                    </div>
                </div>

            </div>
            <div class="documents-wrapper">
                <label class="upload-file firs-button">
                    <input type="file" name="" id="">
                    <span>+ Ajouter un Colocataire</span>
                </label>

                <label class="upload-file">
                    <input type="file" name="" id="">
                    <span>+ Ajouter un garant</span>
                </label>
            </div>
        </div>
    </div>
</div>


