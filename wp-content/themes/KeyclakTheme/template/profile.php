<?php

/*

Template name: Profile page

*/



get_header('profile');

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
        <div class="profile-wrapper">
            <div class="profile-info-container">
                <div class="profile-photo-container">
                    <div class="user-profile-photo">
                        <img src="/wp-content/uploads/2019/03/user-pic.png" alt="">
                        <a href="https://www.linkedin.com" target="_blank" class="social-link">
                            <img src="/wp-content/uploads/2019/03/linkedin.png" alt="">
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
                                <input class="right-side user-field" type="text" readonly value="Vanne">
                            </li>
                            <li>
                                <div class="left-side">Prénom</div>
                                <input class="right-side user-field" type="text" readonly value="Grégoire">
                            </li>
                            <li>
                                <div class="left-side">Adresse e-mail</div>
                                <input class="right-side user-field" type="email" readonly value="gregoire@gmail.com">
                            </li>
                            <li>
                                <div class="left-side">Numéro de téléphone</div>
                                <input class="right-side user-field" type="tel" readonly value="+33 6 59 08 61 43">
                            </li>
                            <li>
                                <div class="left-side">Mot de passe</div>
                                <input class="right-side user-field" type="password" readonly value="somepassword">
                            </li>
                            <li>
                                <div class="left-side">Vidéo de présentation</div>
                                <input class="right-side user-field" type="text" readonly value="myvideo.mov">
                            </li>
                        </ul>
                    </div>
                    <div class="profile-sub-data">
                        <div class="sub-data-wrapper">
                            <div class="sub-data-string">
                                <span>Statut : </span><input class="user-field" type="text" value="Salarié en CDD" readonly>
                            </div>
                            <div class="sub-data-string">
                                <span>Revenu :</span> <input class="user-field" type="text" value="1500€" readonly>
                            </div>
                            <div class="sub-data-string">
                                <span>Garant : </span><input class="user-field" type="text" value="CDI" readonly>
                            </div>
                            <div class="sub-data-string">
                                <span>Revenu garant :</span> <input class="user-field" type="text" value="3600€" readonly>
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
</div>

<?php

    get_footer();

?>

