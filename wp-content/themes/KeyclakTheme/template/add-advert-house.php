<?php
/*
 * Template name: add-advert-house
 */

?>
<?php get_header(); ?>

<div class="main-content-container">
    <header class="sub-header profile-annonces">
        <span class="sub-title-page">Mes annonces</span>
        <div class="sub-header-navigation">
            <a href="http://">Mon agenda</a>
            <a href="http://">Mes biens loués</a>
            <a href="http://">Mon compte</a>
        </div>
    </header>
    <div class="content-container-wrapper">
        <section class="add-advert">
            <h2 class="add-advert_title">Ajouter une annonce</h2>
            <!-- addr input -->
            <div class="add-advert_addr">
                <input class="add-advert_input" type="text" placeholder="Adresse du bien (n de rue, code postale, ville)"/>
            </div>
            <!-- Type -->
            <div class="add-advert_type flex-type">
                <div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_house.png" alt="house"></div>
                <div class="custom-select" >
                    <select>
                        <option value="0">Type de bien</option>
                        <option value="1">Appartement</option>
                        <option value="2">Maison</option>
                    </select>
                </div>
            </div>
            <!-- Surface terrain -->
            <div class="add-advert_surface-terrain flex-type">
                <div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_tree.png" alt="house"></div>
                <input class="add-advert_input" type="text" placeholder="Surface du terrain"/>
            </div>
            <!-- Bath -->
            <div class="add-advert_bath flex-type">
                <div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_bath.png" alt="house"></div>
                <input class="add-advert_input" type="text" placeholder=" Nombre de salle d’eau"/>
            </div>
            <div class="flex-row three">
                <!-- Surface -->
                <div class="add-advert_surface flex-type">
                    <div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_note.png" alt="house"></div>
                    <input class="add-advert_input" type="text" placeholder="Surface du bien"/>
                </div>
                <!-- Key -->
                <div class="add-advert_key flex-type">
                    <div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_key.png" alt="house"></div>
                    <div class="custom-select" >
                        <select>
                            <option value="0">Type de bail</option>
                            <option value="1">Location</option>
                            <option value="2">Colocation</option>
                        </select>
                    </div>
                </div>
                <!-- Group -->
                <div class="add-advert_group flex-type">
                    <div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_group.png" alt="house"></div>
                    <div class="custom-select" >
                        <select>
                            <option value="0">Nombre de coloc</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="+ 8">+ 8</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex-row four">
                <!-- Rooms -->
                <div class="add-advert_rooms flex-type">
                    <div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_room.png" alt="house"></div>
                    <div class="custom-select" >
                        <select>
                            <option value="0">Nombre de pièces</option>
                            <option value="Studio">Studio</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="+ 8" class="plus">+ 8</option>
                        </select>
                    </div>
                </div>
                <!-- Level -->
                <div class="add-advert_level flex-type">
                    <div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_stairs.png" alt="stairs"></div>
                    <div class="custom-select" >
                        <select>
                            <option value="Étage">Étage</option>
                            <option value="Plain-pied">Plain-pied</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="+ 8" class="plus">+ 8</option>
                        </select>
                    </div>
                </div>
                <!--Beds -->
                <div class="add-advert_beds flex-type">
                    <div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_beds.png" alt="beds"></div>
                    <div class="custom-select" >
                        <select>
                            <option value="Nombre de chambres">Nombre de chambres </option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="+ 8" class="plus">+ 8</option>
                        </select>
                    </div>
                </div>
                <!-- Orientation -->
                <div class="add-advert_orient flex-type">
                    <div class="add-advert_icon"><img src="/wp-content/uploads/2019/04/prof_sun.png" alt="orientation"></div>
                    <div class="custom-select" >
                        <select>
                            <option valuse="Orientation">Orientation </option>
                            <option valuse="Nord">Nord</option>
                            <option valuse="Sud">Sud</option>
                            <option valuse="Est">Est</option>
                            <option valuse="Ouest">Ouest</option>
                            <option valuse="Nord-Est">Nord-Est</option>
                            <option valuse="Nord-Ouest">Nord-Ouest</option>
                            <option valuse="Sud-Est">Sud-Est</option>
                            <option valuse="Sud-Ouest">Sud-Ouest</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="checkboxes-wrap">
                <div class="flex-row left">
                    <!-- Commodites -->
                    <div class="add-advert_commodites flex-type">
                        <div class="flex-type_top">
                            <h3 class="checkbox-list_title">Commodités :</h3>
                            <div class="add-advert_icon">
                                <img src="/wp-content/uploads/2019/04/prof__commadts.png" alt="commodites">
                            </div>
                        </div>
                        <div class="checkbox-list">
                            <label class="container-checkbox">Parking
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Ascenseur
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Cave
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Normes PMR
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Balcon
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Terrasse
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Bureau
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="flex-row left-inner">
                        <!-- Chauffage -->
                        <div class="add-advert_chauffage flex-type">
                            <div class="flex-type_top">
                                <h3 class="checkbox-list_title">Chauffage :</h3>
                                <div class="add-advert_icon">
                                    <img src="/wp-content/uploads/2019/04/prof_temperature.png" alt="temperature">
                                </div>
                            </div>
                            <div class="checkbox-list">
                                <label class="container-checkbox">Gaz
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-checkbox">Collectif
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-checkbox">Central
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-checkbox">Électrique
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-checkbox">Individuel
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-checkbox">Au sol
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!-- Cuisine  -->
                        <div class="add-advert_cuisine flex-type">
                            <div class="flex-type_top">
                                <h3 class="checkbox-list_title">Cuisine : </h3>
                                <div class="add-advert_icon">
                                    <img src="/wp-content/uploads/2019/04/prof_kitchen.png" alt="kitchen">
                                </div>
                            </div>
                            <div class="checkbox-list">
                                <label class="container-checkbox">Aménagée
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-checkbox">Ouverte
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-checkbox">Équipée
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-checkbox">Séparée
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-row right">
                    <div class="right_inner">
                        <!-- Baths -->
                        <div class="add-advert_baths flex-type">
                            <div class="flex-type_top">
                                <h3 class="checkbox-list_title">Équipement(s) salle d’eau :</h3>
                                <div class="add-advert_icon">
                                    <img src="/wp-content/uploads/2019/04/prof_baths.png" alt="kitchen">
                                </div>
                            </div>
                            <div class="checkbox-list">
                                <div class="baths_wrap">
                                    <label class="container-checkbox">Douche
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container-checkbox">Baignoire
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Mebl -->
                        <div class="add-advert_mebl flex-type">
                            <div class="flex-type_top">
                                <h3 class="checkbox-list_title">Meublée</h3>
                                <div class="add-advert_icon">
                                    <img src="/wp-content/uploads/2019/04/prof_mebl.png" alt="kitchen">
                                </div>
                            </div>
                            <div class="checkbox-list">
                                <div class="yep-nop">
                                    <!-- custom radio -->
                                    <label class="container-radio oui">oui
                                        <input type="radio" checked="checked" name="Meublée">
                                        <span class="radiobtn"></span>
                                    </label>
                                    <label class="container-radio non">non
                                        <input type="radio"  name="Meublée">
                                        <span class="radiobtn"></span>
                                    </label>
                                    <!-- /custom radio -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Diagnostics -->
                    <div class="add-advert_diagnost flex-type">
                        <div class="flex-type_top">
                            <h3 class="flex-type_top">Diagnostics</h3>
                            <div class="add-advert_icon">
                                <img src="/wp-content/uploads/2019/04/prof_question.png" alt="kitchen">
                            </div>
                        </div>
                        <!-- ERNMT -->
                        <div class="ERNMT radio-box">
                            <h3>ERNMT</h3>
                            <!-- custom radio -->
                            <div class="yep-nop">
                                <label class="container-radio oui">oui
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio non">non
                                    <input type="radio"  name="radio">
                                    <span class="radiobtn"></span>
                                </label>
                            </div>
                            <!-- /custom radio -->
                        </div>
                        <!-- DPE -->
                        <div class="DPE radio-box">
                            <div class="DPE_wrap">
                                <h3>DPE</h3>
                                <!-- custom radio -->
                                <div class="yep-nop">
                                    <label class="container-radio oui">oui
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="radiobtn"></span>
                                    </label>
                                    <label class="container-radio non">non
                                        <input type="radio"  name="radio">
                                        <span class="radiobtn"></span>
                                    </label>
                                </div>
                                <!-- /custom radio -->
                            </div>
                            <div class="letters-block">
                                <label class="container-radio A-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio B-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio C-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio D-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio E-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio F-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio G-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>


                            </div>
                        </div>
                        <div class="GAZ radio-box">
                            <div class="GAZ_wrap">
                                <h3>Electricité/Gaz</h3>
                                <!-- custom radio -->
                                <div class="yep-nop">
                                    <label class="container-radio oui">oui
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="radiobtn"></span>
                                    </label>
                                    <label class="container-radio non">non
                                        <input type="radio"  name="radio">
                                        <span class="radiobtn"></span>
                                    </label>
                                </div>
                                <!-- /custom radio -->
                            </div>
                            <div class="letters-block">
                                <label class="container-radio A-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio B-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio C-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio D-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio E-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio F-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="container-radio G-letter">
                                    <input type="radio"  name="energy">
                                    <span class="radiobtn"></span>
                                </label>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-advert_two-inputs">
                <div class="add-advert_loyer">
                    <input class="add-advert_input" type="text" placeholder="Loyer mensuel hors charges "/>
                </div>
                <div class="add-advert_charges">
                    <input class="add-advert_input" type="text" placeholder="Charges mensuelles"/>
                </div>
            </div>
            <div class="add-advert-bottom">
                <!-- LEFT -->
                <div class="add-advert-bottom-left">
                    <div class="add-advert-bottom-left_top">
                        <h4 class="add-advert-bottom-left__title">Mon locataire ideal</h4>
                        <div class="astuces">
                            <div class="circle-question"></div>
                            <p>Astuces</p>
                        </div>
                    </div>
                    <div class="status-obligator">
                        <div class="status">
                            <h3 class="checkbox-list_title">Statut :</h3>
                            <label class="container-checkbox">CDI
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">CDD
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Libéral
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Contrat pro
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-checkbox">Alternance
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>

                        </div>
                        <div class="status-obligator_obligator">
                            <h3 class="checkbox-list_title">Garant obligatoire :</h3>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="status-garant">
                        <h4 class="checkbox-list_title">Statut garant :</h4>
                        <label class="container-checkbox">CDI
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-checkbox">Libéral
                            <input type="checkbox" >
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-checkbox">Chef d’entreprise
                            <input type="checkbox" >
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <!-- RIGHT -->
                <div class="add-advert-bottom_right">
                    <div class="add-advert-bottom_right_top">
                        <h4 class="add-advert-bottom-left__title">Mon second choix</h4>
                        <div class="astuces">
                            <div class="circle-question"></div>
                            <p>Astuces</p>
                        </div>
                    </div>
                    <div class="status">
                        <h3 class="checkbox-list_title">Statut :</h3>
                        <label class="container-checkbox">CDI
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-checkbox">CDD
                            <input type="checkbox" >
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-checkbox">Libéral
                            <input type="checkbox" >
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-checkbox">Contrat pro
                            <input type="checkbox" >
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-checkbox">Alternance
                            <input type="checkbox" >
                            <span class="checkmark"></span>
                        </label>

                    </div>
                    <div class="revenu_input">
                        <input class="add-advert_input" type="text" placeholder="Revenu minimum"/>
                    </div>

                </div>
            </div>
            <div class="add-advert btn">
                <input  class="valider-btn" type="submit" value="Valider"/>
            </div>
        </section>
    </div>

<?php get_footer(); ?>
