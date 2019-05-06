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
                        <a href="http://" class="social-link">
                            <img src="/wp-content/uploads/2019/03/linkedin.png" alt="">
                        </a>
                    </div>
                    <div class="user-navigation-panel">
                        <a href="#" class="navigation-link">Me déconnecter</a>
                        <a href="#" class="navigation-link">Modifier mes informations</a>
                        <a href="#" class="navigation-link">Supprimer mon compte</a>
                    </div>
                </div>

                <div class="profile-data-wrapper">
                    <div class="profile-main-data">
                        <ul>
                            <li>
                                <div class="left-side">Nom</div>
                                <div class="right-side">Vanne</div>
                            </li>
                            <li>
                                <div class="left-side">Prénom</div>
                                <div class="right-side">Grégoire</div>
                            </li>
                            <li>
                                <div class="left-side">Adresse e-mail</div>
                                <div class="right-side">gregoire@gmail.com</div>
                            </li>
                            <li>
                                <div class="left-side">Numéro de téléphone</div>
                                <div class="right-side">+33 6 59 08 61 43</div>
                            </li>
                            <li>
                                <div class="left-side">Mot de passe</div>
                                <div class="right-side">**********</div>
                            </li>
                            <li>
                                <div class="left-side">Vidéo de présentation</div>
                                <div class="right-side">myvideo.mov</div>
                            </li>
                        </ul>
                    </div>
                    <div class="profile-sub-data">
                        <div class="sub-data-wrapper">
                            <div class="sub-data-string">
                                Statut : <span>Salarié en CDD</span>
                            </div>
                            <div class="sub-data-string">
                                Revenu : <span>1500€</span>
                            </div>
                            <div class="sub-data-string">
                                Garant : <span>CDI</span>
                            </div>
                            <div class="sub-data-string">
                                Revenu garant : <span>3600€</span>
                            </div>
                        </div>
                    </div>
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

