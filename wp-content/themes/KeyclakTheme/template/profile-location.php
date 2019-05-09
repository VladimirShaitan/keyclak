<?php

/*

Template name: Profile Location

*/



get_header('profile');

?>

<div class="main-content-container">
    <header class="sub-header profile-location ">
        <span class="sub-title-page">Ma location</span>
        <div class="sub-header-navigation">
            <a href="http://">Mon profil</a>
            <a href="http://">Mon agenda</a>
            <a href="http://">Ma recherche</a>
        </div>
    </header>
    <div class="content-container-wrapper">
        <div class="profile-wrapper profile-location">
            <div class="profile-info-container">
                <div class="profile-photo-container">
                    <div class="user-profile-photo">
                        <img src="/wp-content/uploads/2019/03/user-pic-2.png" alt="">
                    </div>
                </div>

                <div class="profile-data-wrapper">
                    <div class="profile-main-data">
                        <ul>
                            <li>
                                <div class="left-side">Nom</div>
                                <div class="right-side">Guillon</div>
                            </li>
                            <li>
                                <div class="left-side">Prénom</div>
                                <div class="right-side">Bertrand</div>
                            </li>
                            <li>
                                <div class="left-side">Adresse e-mail</div>
                                <div class="right-side">bertrand@gmail.com</div>
                            </li>
                            <li>
                                <div class="left-side">Numéro de téléphone</div>
                                <div class="right-side">+33 6 59 08 61 43</div>
                            </li>
                        </ul>
                    </div>
                    <div class="profile-sub-data">
                    
                        <div class="dropdown-doc-menu">
                            <div class="document-hidden-list">
                                <span>Toutes mes pièces</span>
                                <i class="icon arrow"></i>
                            </div>
                            <ul class="document-list-container">
                                <li class="document-item">
                                    <div class="doc-icon-container">
                                        <i class="icon doc-4"></i>
                                    </div>
                                    <div class="document-name">Bail</div>
                                </li>
                    
                                <li class="document-item">
                                    <div class="doc-icon-container">
                                        <i class="icon doc-3"></i>
                                    </div>
                                    <div class="document-name">Quittances</div>
                                </li>
                            </ul>
                        </div>
                    
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</div>

<?php

    get_footer();

?>

