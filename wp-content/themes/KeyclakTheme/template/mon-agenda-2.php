<?php

/*

Template name: Mon Agenda Two

*/



get_header('profile');

?>

<div class="main-content-container">
    <header class="sub-header profile-agenda-two">
        <span class="sub-title-page">Mon agenda</span>
        <div class="sub-header-navigation">
            <a href="http://">Mes biens loués</a>
            <a href="http://">Mon compte</a>
            <a href="http://">Mes annonces</a>
        </div>
    </header>
    <div class="content-container-wrapper">
        <div class="main-slider-wrapper">
            <div class="content-slider-wrapper">
                <div class="slider-title">
                    Mes prochains RDV
                </div>
                <div class="main-gallery">
                    <div class="gallery-cell">
                        <div class="slider-info-wrapper">
                            <div class="tablet-container">
                                <div class="info-container">
                                    <ul>
                                        <li class="info-text date">Jeudi 27 désembre, 17h</li>
                                        <li class="info-text">Gregoire V.</li>
                                        <li class="info-text">Rue La Fayette</li>
                                        <li class="info-text">Surface : <span>42m2</span></li>
                                        <li class="info-text">Étage : <span>5ème</span></li>
                                        <li class="info-text">Ascenseur : <span>Non</span></li>
                                        <li class="info-text">Transports : <span>Ligne 7 et 9</span></li>
                                        <li class="info-text">Loyer : <span>1100 €</span></li>
                                    </ul>
                                </div>
                                <div class="photo-container">
                                    <!-- <img src="../images/house.png" alt=""> -->
                                    <img src="/wp-content/uploads/2019/04/house.png" alt="">
                                </div>
                            </div>
                            <div class="map-container">
                                <!-- <img src="../images/map.png" alt=""> -->
                                <img src="/wp-content/uploads/2019/04/map.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-cell">
                        <div class="slider-info-wrapper">
                            <div class="tablet-container">
                                <div class="info-container">
                                    <ul>
                                        <li class="info-text date">Jeudi 27 désembre, 17h</li>
                                        <li class="info-text">Gregoire V.</li>
                                        <li class="info-text">Rue La Fayette</li>
                                        <li class="info-text">Surface : <span>42m2</span></li>
                                        <li class="info-text">Étage : <span>5ème</span></li>
                                        <li class="info-text">Ascenseur : <span>Non</span></li>
                                        <li class="info-text">Transports : <span>Ligne 7 et 9</span></li>
                                        <li class="info-text">Loyer : <span>1100 €</span></li>
                                    </ul>
                                </div>
                                <div class="photo-container">
                                    <!-- <img src="../images/house.png" alt=""> -->
                                    <img src="/wp-content/uploads/2019/04/house.png" alt="">
                                </div>
                            </div>
                            <div class="map-container">
                                <!-- <img src="../images/map.png" alt=""> -->
                                <img src="/wp-content/uploads/2019/04/map.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-cell">
                        <div class="slider-info-wrapper">
                            <div class="tablet-container">
                                <div class="info-container">
                                    <ul>
                                        <li class="info-text date">Jeudi 27 désembre, 17h</li>
                                        <li class="info-text">Gregoire V.</li>
                                        <li class="info-text">Rue La Fayette</li>
                                        <li class="info-text">Surface : <span>42m2</span></li>
                                        <li class="info-text">Étage : <span>5ème</span></li>
                                        <li class="info-text">Ascenseur : <span>Non</span></li>
                                        <li class="info-text">Transports : <span>Ligne 7 et 9</span></li>
                                        <li class="info-text">Loyer : <span>1100 €</span></li>
                                    </ul>
                                </div>
                                <div class="photo-container">
                                    <!-- <img src="../images/house.png" alt=""> -->
                                    <img src="/wp-content/uploads/2019/04/house.png" alt="">
                                </div>
                            </div>
                            <div class="map-container">
                                <!-- <img src="../images/map.png" alt=""> -->
                                <img src="/wp-content/uploads/2019/04/map.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-cell">
                        <div class="slider-info-wrapper">
                            <div class="tablet-container">
                                <div class="info-container">
                                    <ul>
                                        <li class="info-text date">Jeudi 27 désembre, 17h</li>
                                        <li class="info-text">Gregoire V.</li>
                                        <li class="info-text">Rue La Fayette</li>
                                        <li class="info-text">Surface : <span>42m2</span></li>
                                        <li class="info-text">Étage : <span>5ème</span></li>
                                        <li class="info-text">Ascenseur : <span>Non</span></li>
                                        <li class="info-text">Transports : <span>Ligne 7 et 9</span></li>
                                        <li class="info-text">Loyer : <span>1100 €</span></li>
                                    </ul>
                                </div>
                                <div class="photo-container">
                                    <!-- <img src="../images/house.png" alt=""> -->
                                    <img src="/wp-content/uploads/2019/04/house.png" alt="">
                                </div>
                            </div>
                            
                            <div class="map-container">
                                <!-- <img src="../images/map.png" alt=""> -->
                                <img src="/wp-content/uploads/2019/04/map.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="agenda-navigation-button">
            <a class="nav-button" href="http://">
                <span>Modifier un RDV</span>
            </a>
            <a class="nav-button" href="http://">
                <span>Annuler un RDV</span>
            </a>
        </div>

        <div class="calendar-content-wrapper">
            <div class="calendar-main-container">
                <div class="year-field" id="year_field"></div>
                <div class="month-navigation">
                    <i class="icon prev" id="previous" onclick="previous()"></i>
                    <div class="month-field" id="month_field"></div>
                    <i class="icon next" id="next" onclick="next()"></i>
                </div>

                <div class="calendar-wrapper" id="calendar">
                    <div class="weeks-row">
                        <div class="week-day">MON</div>
                        <div class="week-day">TUE</div>
                        <div class="week-day">WED</div>
                        <div class="week-day">THU</div>
                        <div class="week-day">FRI</div>
                        <div class="week-day">SAT</div>
                        <div class="week-day">SUN</div>
                    </div>

                    <div class="days-container" id="calendar-body">

                    </div>
                </div>
            </div>
            <div class="ivent-description-container">
                <div class="desc-wrap">
                    <div class="day-title">WED 8</div>
                    <ul>
                        <li>
                            <div class="time">9.00</div>
                            <div class="ivent-desc">Studio, Paris 14</div>
                        </li>
                        <li>
                            <div class="time">11.00</div>
                            <div class="ivent-desc">Studio, Paris 11</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="files-content-container">
            <div class="title">Mes dossiers déposés</div>
            <div class="files-content-wrap">

                <div class="file-container">
                    <div class="image-container">
                        <!-- <img src="../images/files-img-1.jpg" alt=""> -->
                        <img src="/wp-content/uploads/2019/04/files-img-1.jpg" alt="">
                    </div>
                    <div class="navigation-container">
                        <!-- <a href="" class="close-btn">
                            <i class="icon close"></i>
                        </a> -->
                        <div class="nav-text">
                            <span>Dossier</span>
                            <span class="status">En attente</span>
                        </div>
                        <div class="progress-bar-container">

                        </div>
                        <!-- <a class="nav-button" href="http://">
                            <span>Annuler un RDV</span>
                        </a> -->
                    </div>
                </div>
                
                <div class="file-container">
                    <div class="image-container">
                        <!-- <img src="../images/files-img-2.jpg" alt=""> -->
                        <img src="/wp-content/uploads/2019/04/files-img-2.jpg" alt="">
                    </div>
                    <div class="navigation-container">
                        <a href="" class="close-btn">
                            <i class="icon close"></i>
                        </a>
                        <div class="nav-text">
                            <span>Dossier</span>
                            <span class="status">Refusé</span>
                        </div>
                        <div class="progress-bar-container">

                        </div>
                        <!-- <a class="nav-button" href="http://">
                            <span>Annuler un RDV</span>
                        </a> -->
                    </div>
                </div>
                
                <div class="file-container">
                    <div class="image-container">
                        <!-- <img src="../images/files-img-3.jpg" alt=""> -->
                        <img src="/wp-content/uploads/2019/04/files-img-3.jpg" alt="">
                    </div>
                    <div class="navigation-container">
                        <!-- <a href="" class="close-btn">
                            <i class="icon close"></i>
                        </a> -->
                        <div class="nav-text">
                            <span>Dossier</span>
                            <span class="status">Accepté!</span>
                        </div>
                        <div class="progress-bar-container">

                        </div>
                        <a class="nav-button" href="http://">
                            <span>RDV le 31/01 10h</span>
                        </a>
                    </div>
                </div>
                
                <div class="file-container">
                    <div class="image-container">
                        <!-- <img src="../images/files-img-4.jpg" alt=""> -->
                        <img src="/wp-content/uploads/2019/04/files-img-4.jpg" alt="">
                    </div>
                    <div class="navigation-container">
                        <!-- <a href="" class="close-btn">
                            <i class="icon close"></i>
                        </a> -->
                        <div class="nav-text">
                            <span>Dossier</span>
                            <span class="status">Accepté!</span>
                        </div>
                        <div class="progress-bar-container">

                        </div>
                        <a class="nav-button" href="http://">
                            <span>Prendre RDV</span>
                        </a>
                    </div>
                </div>
                
                <div class="file-container">
                    <div class="image-container">
                        <!-- <img src="../images/files-img-4.jpg" alt=""> -->
                        <img src="/wp-content/uploads/2019/04/files-img-4.jpg" alt="">
                    </div>
                    <div class="navigation-container">
                        <a href="" class="close-btn">
                            <i class="icon close"></i>
                        </a>
                        <div class="nav-text">
                            <span>Dossier</span>
                            <span class="status">Refusé</span>
                        </div>
                        <div class="progress-bar-container">

                        </div>
                        <!-- <a class="nav-button" href="http://">
                            <span>Annuler un RDV</span>
                        </a> -->
                    </div>
                </div>
                
                <div class="file-container">
                    <div class="image-container">
                        <!-- <img src="../images/files-img-3.jpg" alt=""> -->
                        <img src="/wp-content/uploads/2019/04/files-img-3.jpg" alt="">
                    </div>
                    <div class="navigation-container">
                        <!-- <a href="" class="close-btn">
                            <i class="icon close"></i>
                        </a> -->
                        <div class="nav-text">
                            <span>Dossier</span>
                            <span class="status">Accepté!</span>
                        </div>
                        <div class="progress-bar-container">

                        </div>
                        <a class="nav-button" href="http://">
                            <span>Louer le bien</span>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php

    get_footer();

?>

