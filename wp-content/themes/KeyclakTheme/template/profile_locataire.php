<?php

/*
Template name: Profile locataire
*/

check_user_loggedout();
get_header('profile');
$linkedin = '';
if(!empty($GLOBALS['user_meta']['linkedin'][0])){
    $linkedin = $GLOBALS['user_meta']['linkedin'][0];
}
?>
<!-- <pre>
    <?php // print_r($GLOBALS['user_meta']);?> 
    <?php // print_r($GLOBALS['user_data']);?> 
</pre> -->

    
    <div class="content-container-wrapper">
        <div class="profile-wrapper">
            <div class="profile-info-container">
                <div class="profile-photo-container">
                    <div class="user-profile-photo">
                        <img class="profile_img" src="<?php echo $GLOBALS['user_meta']['profile_picture'][0]; ?>" alt="<?php echo $GLOBALS['user_data']->data->display_name; ?>" title="<?php echo $GLOBALS['user_data']->data->display_name; ?>">
                        <a href="https://www.linkedin.com" target="_blank" class="social-link">
                            <img src="/wp-content/uploads/2019/03/linkedin.png" alt="linkedin" title="linkedin">
                        </a>
                    </div>
                    <div class="user-navigation-panel">
                        <span class="navigation-link">Me déconnecter</span>
                        <span class="navigation-link" id="modificate_button">Modifier mes informations</span>
                        <span class="navigation-link">Supprimer mon compte</span>
                    </div>
                </div>

                <div class="profile-data-wrapper">
                    <div class="profile-main-data">
                        <ul>
                            <li>
                                <div class="left-side">Nom</div>
                                <input class="right-side user-field" type="text" readonly value="<?php echo $GLOBALS['user_meta']['last_name'][0]; ?>">
                            </li>
                            <li>
                                <div class="left-side">Prénom</div>
                                <input class="right-side user-field" type="text" readonly value="<?php echo $GLOBALS['user_meta']['first_name'][0]; ?>">
                            </li>
                            <li>
                                <div class="left-side">Adresse e-mail</div>
                                <input class="right-side user-field" type="email" readonly value="<?php echo $GLOBALS['user_data']->data->user_email; ?>">
                            </li>
                            <li>
                                <div class="left-side">Numéro de téléphone</div>
                                <input class="right-side user-field" type="tel" readonly value="<?php echo $GLOBALS['user_meta']['phone'][0]; ?>">
                            </li>
                            <li>
                                <div class="left-side">Mot de passe</div>
                                <input class="right-side user-field" type="password" readonly value="<?php echo base64_decode($GLOBALS['user_meta']['pwd'][0]); ?>">
                            </li>
                            <li>
                                <div class="left-side">Vidéo de présentation</div>
                                <input class="right-side user-field" type="text" readonly value="<?php echo $GLOBALS['user_meta']['file-video'][0]; ?>">
                            </li>
                            <li>
                                <div class="left-side">Linkedin</div>
                                <input class="right-side user-field" type="text" readonly placeholder="Lien profil LinkedIn" value="<?php echo $linkedin; ?>">
                            </li>
                        </ul>
                    </div>
                    <div class="profile-sub-data">
                        <div class="sub-data-wrapper">
                            <div class="sub-data-string">
                                <span>Statut : </span><input class="user-field" type="text" placeholder="Salarié en CDD" value="<?php echo $GLOBALS['user_meta']['statut'][0]; ?>" readonly>
                            </div>
                            <div class="sub-data-string">
                                <span>Revenu :</span> <input class="user-field" type="text" placeholder="€" value="<?php echo $GLOBALS['user_meta']['revenu'][0]; ?>" readonly>
                            </div>
                            <div class="sub-data-string">
                                <span>Garant: </span><input class="user-field" type="text" placeholder="Exemple - CDI" value="<?php echo $GLOBALS['user_meta']['statut_du_garant'][0]; ?>" readonly>
                            </div>
                            <div class="sub-data-string">
                                <span>Revenu garant :</span> <input class="user-field" type="text" placeholder="€" value="<?php echo $GLOBALS['user_meta']['revenu_du_garant'][0]; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="save_modification" class="modificate-btn-container">
                <div class="mod-button">
                    <span>Valider</span>
                </div>
            </div>
        </div>

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
<?php

    get_footer('profile');

?>

