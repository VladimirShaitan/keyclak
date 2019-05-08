<div class="form-black-bg form-proprietaire">
    <form id="proprietaire" class="inscription-form">
        <div class="preloader">
            <img class="loader" src="">
        </div>
        <div class="form-rows-wrapper">
            <div class="central-field-blocks">
                <div class="input-main">
                    <label for="last-name">Nom</label>
                    <input type="text" name="last-name" id="last-name" required>
                    <div class="error"></div>
                </div>

                <div class="input-main">
                    <label for="first-name">Prènom</label>
                    <input type="text" name="first-name" id="first-name" required>
                    <div class="error"></div>
                </div>

                <div class="input-main">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" id="email" required>
                    <div class="error"></div>
                </div>

                <div class="input-main">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                    <div class="error"></div>
                </div>

                <div class="input-main last-input">
                    <label for="pasword-confirm">Confirmation mot de passe</label>
                    <input type="password" id="pasword-confirm" autocomplete="off" required>
                    <div class="error"></div>
                </div>

                <div class="input-main">
                    <div class="file-upload">
                        <label for="file-photo">
                            <span class="upload-text-btn">
                                + ajouter une photo de profil
                            </span>
                            <input type="file" name="file-photo" id="file-photo" accept="image/*" multiple="false">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="inscription-form-submit">
            <input type="submit" value="Inscription" class="submit-btn-green">
        </div>
        <input type="hidden" name="user_role" value="proprietaire">
    </form>
</div>