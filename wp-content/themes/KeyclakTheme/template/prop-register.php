<?php

/*

Template name: Propriétaire Registration

*/

get_header();
global $wpdb, $user_ID;

?>

<div class="main-content-container propriétaire-bg">
    <header class="main-header">
        <a href="/">
            <img src="/wp-content/themes/KeyclakTheme/img/logo.png" alt="keyclak">
        </a>
    </header>
    <div class="content-container-wrapper form-page register-page">
        <div class="register-page-container">
            <div class="title">Propriétaire</div>

            <div class="subtitle">Inscrivez-vous en remplissant les champs ci-dessous:</div>

            <div class="middle-content-container">
                <div class="form-black-bg form-proprietaire">
                    <form class="inscription-form">

                        <div class="form-rows-wrapper">
                            <div class="central-field-blocks">
                                <div class="input-main">
                                    <label for="last-name">Nom</label>
                                    <input type="text" name="last-name" id="last-name">
                                </div>

                                <div class="input-main">
                                    <label for="first-name">Prènom</label>
                                    <input type="text" name="first-name" id="first-name">
                                </div>

                                <div class="input-main">
                                    <label for="email">Adresse email</label>
                                    <input type="email" name="email" id="email">
                                </div>

                                <div class="input-main">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" name="password" id="password">
                                </div>

                                <div class="input-main last-input">
                                    <label for="pasword-confirm">Confirmation mot de passe</label>
                                    <input type="password" name="pasword-confirm" id="pasword-confirm">
                                </div>

                                <div class="input-main">
                                    <div class="file-upload">
                                        <label for="file-photo">
                                            <span class="upload-text-btn">
                                                + ajouter une photo de profil
                                            </span>
                                            <input type="file" name="file-photo" id="file-photo">
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

