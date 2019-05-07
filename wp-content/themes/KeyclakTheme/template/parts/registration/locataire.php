<div class="form-black-bg">
    <form id="locataire-registration" class="inscription-form">

        <div class="form-rows-wrapper">
            <div class="left-field-blocks">
                <div class="input-main">
                    <label>Nom</label>
                    <input name="lastname" type="text" required>
                </div>

                <div class="input-main">
                    <label>Prènom</label>
                    <input name="firstname" type="text" required>
                </div>

                <div class="input-main">
                    <label>Adresse email</label>
                    <input name="email" type="email" required>
                </div>

                <div class="input-main">
                    <label>Mot de passe</label>
                    <input name="password" type="password" required>
                </div>

                <div class="input-main last-input">
                    <label>Confirmation mot de passe</label>
                    <input type="password" required>
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
                    <input type="tel" class="right-first-input" required>
                </div>

                <div class="input-main">
                    <label>Statut</label>
                    <input name="statut" type="text" required>
                </div>

                <div class="input-main">
                    <label>Revenu (net mensuel)</label>
                    <input name="revenu" type="text" required>
                </div>

                <div class="input-main radio-block">
                    <label>Garant</label>
                    <div class="radio-block-wp">
                        <div class="radio-oui">
                            <label>
                                <input type="radio" name="garant-true" checked="checked" />
                                <i></i>
                                <span>oui</span>
                            </label>
                            
                        </div>

                        <div class="radio-non">
                            <label>
                                <input type="radio" name="garant-false" />
                                <i></i>
                                <span>non</span>
                            </label>
                            
                        </div>

                    </div>
                </div>

                <div class="input-main">
                    <label>Statut du Garant</label>
                    <input name="statut_du_garant" type="text" required>
                </div>

                <div class="input-main last-input">
                    <label>Revenu du garant (net mensuel)</label>
                    <input name="revenu_du_garant" type="text" required>
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