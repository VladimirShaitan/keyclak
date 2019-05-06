<?php

/*

Template name: Locataire Registration

*/



get_header();

?>

<div class="main-content-container locataire-bg">
    <header class="main-header">
        <a href="http://keyclak.html-studio.net/new-home/">
            <img src="/wp-content/themes/KeyclakTheme/img/logo.png" alt="keyclack">
        </a>
    </header>
    <div class="content-container-wrapper form-page register-page">
        <div class="register-page-container">
            <div class="title">Locataire</div>

            <div class="subtitle">Inscrivez-vous en remplissant les champs ci-dessous:</div>

            <div class="middle-content-container">
                <div class="form-black-bg">
                    <form class="inscription-form">
            
                        <div class="form-rows-wrapper">
                            <div class="left-field-blocks">
                                <div class="input-main">
                                    <label>Nom</label>
                                    <input type="text">
                                </div>
            
                                <div class="input-main">
                                    <label>Prènom</label>
                                    <input type="text">
                                </div>
            
                                <div class="input-main">
                                    <label>Adresse email</label>
                                    <input type="email">
                                </div>
            
                                <div class="input-main">
                                    <label>Mot de passe</label>
                                    <input type="password">
                                </div>
            
                                <div class="input-main last-input">
                                    <label>Confirmation mot de passe</label>
                                    <input type="password">
                                </div>
            
                                <div class="input-main">
                                    <div class="file-upload">
                                        <label>
                                            <span class="upload-text-btn">
                                                + ajouter une photo de profil
                                            </span>
                                            <input type="file" id="upload-btn-left" name="file-photo">
                                        </label>
                                    </div>
                                </div>
                            </div>
            
                            <div class="right-field-blocks">
                                <div class="input-main">
                                    <label>Numéro de téléphone</label>
                                    <input type="tel" class="right-first-input">
                                </div>
            
                                <div class="input-main">
                                    <label>Statut</label>
                                    <input type="text">
                                </div>
            
                                <div class="input-main">
                                    <label>Revenu (net mensuel)</label>
                                    <input type="text">
                                </div>
            
                                <div class="input-main radio-block">
                                    <label>Garant</label>
                                    <div class="radio-block-wp">
                                        <div class="radio-oui">
                                            <label>
                                                <input type="radio" name="garant-radio" checked="checked" />
                                                <i></i>
                                                <span>oui</span>
                                            </label>
                                            
                                        </div>
            
                                        <div class="radio-non">
                                            <label>
                                                <input type="radio" name="garant-radio" />
                                                <i></i>
                                                <span>non</span>
                                            </label>
                                            
                                        </div>
            
                                    </div>
                                </div>
            
                                <div class="input-main">
                                    <label>Statut du Garant</label>
                                    <input type="text">
                                </div>
            
                                <div class="input-main last-input">
                                    <label>Revenu du garant (net mensuel)</label>
                                    <input type="text">
                                </div>
            
                                <div class="input-main">
                                    <div class="file-upload">
                                        <label class="right-btn">
                                            <span class="upload-text-btn">
                                                + ajoter une vidéo de présentation
                                            </span>
                                            <input type="file" id="upload-btn-right" name="file-video">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="inscription-form-submit">
                            <input type="submit" value="Inscription" class="submit-btn-green">
                        </div>
                    </form>
                </div>
            </div>

            
        </div>
    </div>
</div>

<?php

    get_footer();

?>

