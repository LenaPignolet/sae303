<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cette page présente comment les technologies numériques impactent l'offre culturelle et les défis liés à la numérisation.">
    <title>Sae 303 - Dataviz : Impact des technologies sur l'offre culturelle</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script src="js/jquery.localScroll.min.js" defer></script>
    <script src="js/jquery.scrollTo.min.js" defer></script>
    <script src="js/jquery.parallax-1.1.3.js" defer></script>
    <script src="js/index.js" defer></script>
    <script src="js/data.js" defer></script>
    <script src="js/modal.js" defer></script>
    <style>
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #F9F4EF;
            z-index: 9999;
            transition: transform 0.3s ease-in-out;
        }

        .headroom--unpinned {
            transform: translateY(-100%);
        }

        .headroom--pinned {
            transform: translateY(0);
        }
    </style>
</head>
<body id="body">
    <nav class="navbar navbar-expand-lg bg-beige">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link-brown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Navigation
                </a>
                <ul class="dropdown-menu bg-beige">
                    <li><a class="dropdown-item" href="#pt1">Adoption des technologies numériques dans l'offre culturelle</a></li>
                    <li><a class="dropdown-item" href="#pt1">Les livres</a></li>
                    <li><a class="dropdown-item" href="#cinema">Le cinéma</a></li>
                    <li><a class="dropdown-item" href="#pt1_suite">Les musées</a></li>
                    <li><a class="dropdown-item" href="#festival">Les festivals</a></li>
                    <li><a class="dropdown-item" href="#pt2">Défis liés à la numérisation et à l'accès à distance</a></li>
                    <li><a class="dropdown-item" href="#pt2">Fracture numérique</a></li>
                    <li><a class="dropdown-item" href="#cost">Coût d’accès aux offres numériques</a></li>
                    <li><a class="dropdown-item" href="#pt2_suite">L'impact sur les petits acteurs culturels</a></li>
                    <li><a class="dropdown-item" href="#conclusion">Conclusion</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>

       
    <div id="main">

        <div id="home">
            <div id="home_layout">
                <h1>Comment l'offre culturelle s'adapte-t-elle aux nouvelles technologies et quels défis pose la numérisation 
                    pour l'accès à distance ?</h1>
                <p>• Livres, Cinéma, Musées, Festivals •</p>

                <div class="scrolldown">
                    <div class="chevrons">
                        <div class="chevrondown"></div>
                        <div class="chevrondown"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="intro" class="main_layout">
            <h2>Introduction</h2>
            <p>Avec la révolution numérique, le paysage culturel s’est profondément transformé, conduisant à 
                une adaptation rapide des différents secteurs pour répondre aux nouvelles attentes du public. 
                Les livres, le cinéma, les musées, et les festivals de musique, piliers de l’offre culturelle, 
                ont dû intégrer ces technologies pour assurer leur pérennité et leur accessibilité. Cette 
                transition vers le numérique a rendu la culture plus accessible, en particulier à distance. 
                Cependant, elle a aussi mis en lumière des inégalités liées à l’accès aux outils numériques et à 
                Internet, ainsi que des disparités financières.</p>
        </div>

        <div id="pt1" class="main_layout">
            <h2>Adoption des technologies numériques dans l'offre culturelle</h2>
            <h3>Les livres</h3>

            <div class="sub_layout">

                <div class="graph">
                    <canvas id="myChartLivres"></canvas>
                </div>
                <div class="graph_text">
                    <h4>"Citation importante"</h4>
                    <p>L’adaptation des livres imprimés en formats numériques est une évolution incontournable. Le 
                        livre numérique, autrefois un produit de niche, est désormais largement adopté. Entre 2015 
                        et 2023, le marché du livre numérique a connu une forte croissance en France, facilitant 
                        l’accès à la lecture pour un public plus large, y compris à distance. Cette transition a 
                        cependant eu des répercussions sur l’industrie de l’édition traditionnelle, forçant les 
                        éditeurs et les librairies à revoir leurs stratégies.</p><br>
                    <p class="src">Sources : Baromètre des usages du livre numérique (<a target="_blank" href="https://www.la-sofia.org/">La Sofia</a> et le <a target="_blank" href="https://www.sne.fr/">Syndicat National de l'Édition</a>)</p>
                </div>

            </div>

            <div class="toggle">
                <button id="toggleChartType" class="cta">
                  <span>Changer le type de graphique</span>
                  <svg fill="#55423D" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="15px" viewBox="0 0 305.836 305.836" xml:space="preserve">
                        <g fill="#55423D" id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g fill="#55423D" id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g fill="#55423D" id="SVGRepo_iconCarrier"> <g> 
                        <path fill="#55423D" d="M152.924,300.748c84.319,0,152.912-68.6,152.912-152.918c0-39.476-15.312-77.231-42.346-105.564 c0,0,3.938-8.857,8.814-19.783c4.864-10.926-2.138-18.636-15.648-17.228l-79.125,8.289c-13.511,1.411-17.999,11.467-10.021,22.461 l46.741,64.393c7.986,10.992,17.834,12.31,22.008,2.937l7.56-16.964c12.172,18.012,18.976,39.329,18.976,61.459 c0,60.594-49.288,109.875-109.87,109.875c-60.591,0-109.882-49.287-109.882-109.875c0-19.086,4.96-37.878,14.357-54.337 c5.891-10.325,2.3-23.467-8.025-29.357c-10.328-5.896-23.464-2.3-29.36,8.031C6.923,95.107,0,121.27,0,147.829 C0,232.148,68.602,300.748,152.924,300.748z"></path> </g> </g></svg>
                </button>

                <button id="book_table" class="cta">
                  <span>Afficher le tableau</span>
                  <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                  </svg>
                </button>
            </div>

            <div class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h4 class="modal-title"></h4>
                    <table class="modalTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="modalTableBody">
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        
        <div id="cinema">

            <div class="graph_text">
                <h3>Le Cinéma</h3>
                <h4>“Le streaming à explosé ces dernières années, avec une hausse de 75% des abonnements.”</h4>
                <p>Le secteur du cinéma a lui aussi été radicalement transformé par le numérique, notamment avec la 
                    montée en flèche du streaming. L’explosion des abonnements aux plateformes de streaming, qui 
                    ont augmenté de 75 % en seulement quelques années, a profondément modifié la façon dont le 
                    public consomme des films. Le confinement lié à la pandémie de COVID-19 a accéléré cette 
                    tendance, tandis que les salles de cinéma ont vu leur fréquentation chuter de 25 %. Ce 
                    changement questionne l’avenir des salles chutant face à une offre culturelle toujours plus 
                    accessible depuis chez soi.</p><br>
                <p class="src">Source : <a target="_blank" href="https://www.kantar.com/">Kantar</a></p>

                <div class="toggle">
                    <button id="cinema_table" class="cta">
                      <span>Afficher le tableau cinema</span>
                      <svg width="15px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                      </svg>
                    </button>
                    <button id="streaming_table" class="cta">
                      <span>Afficher le tableau VOD</span>
                      <svg width="15px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                      </svg>
                    </button>
                </div>
                <div class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h4 class="modal-title"></h4>
                        <table class="modalTable">
                        
                        <tbody class="modalTableBody">
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

            <div class="graph">
                 <img src="images/cinema.png" alt="">
            </div>

        </div>

        <div id="pt1_suite" class="main_layout">

            <h3>Les musées</h3>

            <div class="sub_layout">

                <div class="graph">
                    <canvas id="myChartMusees"></canvas>
                </div>
                <div class="graph_text">
                    <h4>“Les musées français ont intensifiés leur numérisation suite à la pandémie de COVID-19.”</h4>
                    <p>Les musées traditionnellement ancrés dans une expérience physique, ont dû s’adapter en urgence à 
                        la numérisation. La pandémie a servi de déclencheur pour intensifier les initiatives numériques, 
                        permettant aux musées de proposer des visites virtuelles et des expositions en ligne. Cette nouvelle 
                        forme de médiation culturelle a permis aux musées français de maintenir un lien avec le public, même 
                        pendant les périodes de fermeture. Cependant, après la réouverture, on constate une baisse de 15 % 
                        de la fréquentation des visites en présentiel, signe d’un changement durable dans les comportements 
                        du public. </p><br>
                    <p class="src">Source : <a target="_blank" href="https://www.culture.gouv.fr/fr/actualites/Des-visites-en-ligne-experimentees-dans-cinq-musees-nationaux">Ministère de la Culture</a></p>
                </div>
            </div>

            <div class="toggle">
                <button id="musee_table" class="cta">
                  <span>Afficher le tableau</span>
                  <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                  </svg>
                </button>
            </div>

            <div class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h4 class="modal-title"></h4>
                    <table class="modalTable">
    
                        <tbody class="modalTableBody">
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <h3 id="festival">Les festivals</h3>

            <div class="sub_layout">

                <div class="graph_text">
                    <h4>“Les musées français ont intensifiés leur numérisation suite à la pandémie de COVID-19.”</h4>
                    <p>Les festivals ont dû, eux aussi, s’adapter à une nouvelle réalité numérique. Face à la pandémie, de 
                        nombreux événements ont migré vers des formats en ligne ou hybrides. Près de 50 % des festivals 
                        français ont opté pour des formules mêlant expériences physiques et numériques, permettant aux 
                        spectateurs de vivre les concerts à distance. Cette transformation a montré la flexibilité du secteur, 
                        mais a également ouvert un débat sur la place du numérique dans les événements culturels à l’avenir.</p><br>
                    <p class="src">Source : <a target="_blank" href="https://www.francefestivals.com/fr/observatoire/toutes-les-etudes/cartographie-nationale-des-festivals">France Festival</a> et <a target="_blank" href="https://www.culturelink.fr/tendances/bilan-des-festivals-de-lannee-2020-944-des-festivals-donnent-rendez-vous-en-2021">Culture Link</a></p>
                </div>

                <div class="graph">
                    <canvas id="myChartFestival"></canvas>
                </div>

            </div>

            <div class="toggle">
                <button id="add_table" class="cta">
                    <span>Ajouter une donnée</span>
                    <svg width="15px" height="15px" viewBox="0 0 15 15">
                        <path d="M2,7.5 L13,7.5" stroke="#000" stroke-width="2"></path>
                        <path d="M7.5,2 L7.5,13" stroke="#000" stroke-width="2"></path>
                    </svg>
                </button>

                <button id="festiv_table" class="cta">
                  <span>Afficher le tableau</span>
                  <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                  </svg>
                </button>
            </div>

            <div class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h4 class="modal-title"></h4>
                    <table class="modalTable">
 
                        <tbody class="modalTableBody">
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- 1ère banderole -->
        <div class="banderole">
            <h3 class="title-stats">Quelques chiffres</h3>
            <div class="stats">
                <div class="stat stat1"><h4>32%</h4> des lecteurs mondiaux lisent des livres numériques</div>
                <div class="stat stat2"><h4>777M</h4> d'abonnements à des plateformes de streaming</div>
                <div class="stat stat3"><h4>+ 11%</h4> de visites dans les musées entre 2022 et 2023</div>
                <div class="stat stat4"><h4>30%</h4> des festivals ont adopté des formats en ligne depuis 2020</div>
            </div>
        </div>

        <div id="pt2" class="main_layout">
            <h3>Défis Liés à la numérisation et à l’accès à distance</h3>

            <h4>“La fracture numérique persiste en France, révélant de profondes inégalités d'accès entre zones rurales et urbaines.”</h4>

            <div id="Fracture">
                <div id="map" class="graph">

                    <div class="map__list">

                        <ul>
                            <li><p id="c84" class="regions myButton">Auvergne-Rhône-Alpes</p></li>
                            <li><p id="c27" class="regions myButton">Bourgogne-Franche-Comté</p></li>
                            <li><p id="c53" class="regions myButton">Bretagne</p></li>
                            <li><p id="c52" class="regions myButton">Centre-Val de Loire</p></li>
                            <li><p id="c94" class="regions myButton">Corse</p></li>
                            <li><p id="c44" class="regions myButton">Grand Est</p></li>
                            <li><p id="c32" class="regions myButton">Hauts-de-France</p></li>
                            <li><p id="c11" class="regions myButton">Ile-de-France</p></li>
                            <li><p id="c76" class="regions myButton">Occitanie</p></li>
                            <li><p id="c75" class="regions myButton">Nouvelle-Aquitaine</p></li>
                            <li><p id="c28" class="regions myButton">Normandie</p></li>
                            <li><p id="c52" class="regions myButton">Pays-de-la-Loire</p></li>
                            <li><p id="c93" class="regions myButton">Provence-Alpes-Cote d'Azur</p></li>
                        </ul>

                    </div>
                </div>
                
                <div class="graph">
                    <canvas id="myChartFracture"></canvas>
                </div>
            </div>

            <p>En France, la numérisation rapide a révélé une fracture numérique persistante. Les zones rurales, souvent moins bien 
                desservies en termes de connectivité, sont particulièrement touchées par ce phénomène. Entre 2018 et 2022, la 
                fracture entre ces zones et les milieux urbains s’est accrue, rendant l’accès à distance aux offres culturelles 
                difficile pour une partie de la population. Les graphiques ci-joints mettent en lumière ces inégalités, montrant 
                notamment l’impact sur les petites librairies et autres acteurs culturels locaux, qui peinent à se digitaliser 
                face aux géants de la distribution.</p><br>
            <p class="src">Source : <a target="_blank" href="https://www.culture.gouv.fr/fr/actualites/Des-visites-en-ligne-experimentees-dans-cinq-musees-nationaux">Ministère de la Culture</a></p>

            <div class="toggle">
                <button id="carte_table" class="cta">
                  <span>Afficher le tableau de la carte</span>
                  <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                  </svg>
                </button>
                <button id="diagramme_table" class="cta">
                  <span>Afficher le tableau du diagramme</span>
                  <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                  </svg>
                </button>
            </div>
            <div class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h4 class="modal-title"></h4>
                    <table class="modalTable">

                        <tbody class="modalTableBody">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="cost">

            <div class="graph_text">
                <h3>Coût d'accès aux offres numériques</h3>
                <h4>"L'évolution fulgurante du divertissement numérique et de la diversité croissante des offres."</h4>
                <p>L’essor des offres numériques s’accompagne également d’une montée des coûts d’accès. Les abonnements aux 
                    services de streaming, aux visites virtuelles ou aux plateformes de musique en ligne représentent une 
                    nouvelle forme de consommation culturelle. Entre 2018 et 2023, les abonnements aux plateformes de streaming 
                    ont augmenté de 33 % en France. Cependant, cette croissance n’est pas sans créer des disparités économiques, 
                    car le coût des abonnements devient une barrière pour les ménages les plus modestes.</p><br>
                <p class="src">Source : <a target="_blank" href="https://lesmakers.fr/statistiques-streaming/">Les Makers</a> et <a target="_blank" href="https://hellosafe.fr/telecom/marche-plateformes-streaming">Hello Safe</a></p>

                <div class="toggle">
                    <button id="toggle_Cost" class="cta">
                      <span>Changer les données</span>
                      <svg fill="#F9F4EF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="15px" viewBox="0 0 305.836 305.836" xml:space="preserve">
                        <g fill="#F9F4EF" id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g fill="#F9F4EF" id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g fill="#F9F4EF" id="SVGRepo_iconCarrier"> <g> 
                        <path fill="#F9F4EF" d="M152.924,300.748c84.319,0,152.912-68.6,152.912-152.918c0-39.476-15.312-77.231-42.346-105.564 c0,0,3.938-8.857,8.814-19.783c4.864-10.926-2.138-18.636-15.648-17.228l-79.125,8.289c-13.511,1.411-17.999,11.467-10.021,22.461 l46.741,64.393c7.986,10.992,17.834,12.31,22.008,2.937l7.56-16.964c12.172,18.012,18.976,39.329,18.976,61.459 c0,60.594-49.288,109.875-109.87,109.875c-60.591,0-109.882-49.287-109.882-109.875c0-19.086,4.96-37.878,14.357-54.337 c5.891-10.325,2.3-23.467-8.025-29.357c-10.328-5.896-23.464-2.3-29.36,8.031C6.923,95.107,0,121.27,0,147.829 C0,232.148,68.602,300.748,152.924,300.748z"></path> </g> </g></svg>
                    </button>
        
                    <button id="cost_table" class="cta">
                      <span>Afficher le tableau</span>
                      <svg width="15px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                      </svg>
                    </button>
                </div>
                <div class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h4 class="modal-title"></h4>
                        <table class="modalTable">
                            <tbody class="modalTableBody">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="cost_canva" class="graph">
                <canvas id="myChartCost"></canvas>
            </div>

        </div>

        <div id="pt2_suite" class="main_layout">

            <h3>l’Impact sur les petits acteurs culturels</h3>

            <div class="sub_layout">
                <div class="graph_text">
                    <h4>“Les petites librairies ont affronté la montée du numérique, transformant leurs ventes et 
                        les poussant à s'adapter à un environnement digital en pleine expansion.”</h4>
                        <p>Les petits acteurs culturels, comme les librairies indépendantes, sont parmi les plus touchés 
                            par l’essor du numérique. Une chute de fréquentation au profit des ventes en ligne et des 
                            livres numériques a était constaté depuis de nombreuses années. Si certaines ont réussi à 
                            se digitaliser et à offrir des services en ligne, beaucoup peinent à survivre face aux géants 
                            du commerce en ligne. La transformation numérique, bien que nécessaire, pose donc des défis 
                            majeurs en termes de concurrence pour ces acteurs locaux.</p><br>
                        <p class="src">Sources : <a target="_blank" href="https://www.sne.fr/economie/chiffres-cles/#:~:text=Le%20chiffre%20d'affaires%20des%20%C3%A9diteurs%20est%20pass%C3%A9%20de%203,baisse%20de%207%2C7%25">Syndicat National de l'Édition</a>, <a target="_blank" href="https://www.insee.fr/fr/accueil">l'INSEE</a>, <a target="_blank" href="https://www.gfk.com/fr/home">GfK</a> et <a target="_blank" href="https://www.livreshebdo.fr/">Livres Hebdo</a>.</p>
                </div>

                <div id="impact_canva" class="graph">
                    <canvas id="myChartImpact"></canvas>
                </div>
            </div>       

            <div class="toggle">
                <button id="toggle_Impact" class="cta">
                    <span>Changer les données</span>
                    <svg fill="#55423D" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="15px" viewBox="0 0 305.836 305.836" xml:space="preserve">
                      <g fill="#55423D" id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g fill="#55423D" id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g fill="#55423D" id="SVGRepo_iconCarrier"> <g> 
                      <path fill="#55423D" d="M152.924,300.748c84.319,0,152.912-68.6,152.912-152.918c0-39.476-15.312-77.231-42.346-105.564 c0,0,3.938-8.857,8.814-19.783c4.864-10.926-2.138-18.636-15.648-17.228l-79.125,8.289c-13.511,1.411-17.999,11.467-10.021,22.461 l46.741,64.393c7.986,10.992,17.834,12.31,22.008,2.937l7.56-16.964c12.172,18.012,18.976,39.329,18.976,61.459 c0,60.594-49.288,109.875-109.87,109.875c-60.591,0-109.882-49.287-109.882-109.875c0-19.086,4.96-37.878,14.357-54.337 c5.891-10.325,2.3-23.467-8.025-29.357c-10.328-5.896-23.464-2.3-29.36,8.031C6.923,95.107,0,121.27,0,147.829 C0,232.148,68.602,300.748,152.924,300.748z"></path> </g> </g>
                    </svg>
                </button>

                <button id="impact_table" class="cta">
                  <span>Afficher le tableau</span>
                  <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                  </svg>
                </button>
            </div>
            <div class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h4 class="modal-title"></h4>
                    <table class="modalTable">
                        <tbody class="modalTableBody">
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <!-- 2ème banderole -->
        <div class="banderole">
            <h3 class="title-stats">En résumé</h3>
            <div class="stats">
                <div class="stat stat1"><h4>92%</h4> des français utilisent Internet</div>
                <div class="stat stat2"><h4>+ 33%</h4> hausse du prix des abonnements de streaming</div>
                <div class="stat stat3"><h4>283M</h4> d’euros de Chiffre d’Affaire des éditions numériques</div>
                <div class="stat stat4"><h4>2 944,7M</h4> d’euros de Chiffre d’Affaire des éditions papiers </div>
            </div>
        </div>

        <div id="conclusion" class="main_layout">
            <h3>Conclusion</h3>
            <p>L’offre culturelle a su s’adapter aux nouvelles technologies, mais cette évolution a aussi soulevé des problèmes. 
                La numérisation a permis d’élargir l’accès à la culture via les livres numériques, le streaming ou les visites 
                virtuelles, mais elle a aussi renforcé des inégalités. La fracture numérique persiste, notamment pour les populations 
                rurales ou à faibles revenus, et le coût d’accès à ces services reste un obstacle. De plus, les petits acteurs 
                culturels, comme les librairies indépendantes et les festivals, sont confrontés à de nouvelles difficultés dans 
                un environnement dominé par le numérique. <br><br>Cependant, l’adoption de formats hybrides pourrait leur permettre de 
                rester compétitifs tout en répondant aux nouveaux usages. Pour conclure, si la numérisation ouvre de nouvelles 
                perspectives, il est crucial d’assurer une accessibilité pour tous, en limitant les inégalités numériques et en 
                soutenant les acteurs locaux face aux grandes plateformes.</p>
        </div>

    <footer>
        <div class="pdp">
            <p class="text-pdp">Créer avec passion par</p>
            <div class="profils">
                <div class="profil profil-lena">
                    <img class="photo" src="images/lena.jpg" alt="Photo de profil Léna Pignolet">
                        <div class="info-profil">
                            <p class="nom">Léna Pignolet</p>
                            <p>BUT S3 - TP D</p>
                            <div class="links-profil">
                                <a target="_blank" href="https://www.linkedin.com/in/lenapignolet/"><img src="images/linkedin.png" alt="Logo Linkedin"></a>
                                <a target="_blank" href="https://github.com/LenaPignolet"><img src="images/github.png" alt="Logo Github"></a>
                                <a target="_blank" href="https://lena-pignolet.fr/"><img src="images/globe.png" alt="Logo site Internet"></a>
                            </div>
                        </div>
                </div>
                <div class="profil profil-diane">
                    <img class="photo" src="images/diane.jpg" alt="Photo de profil Diane de Benedetti">
                        <div class="info-profil">
                            <p class="nom">Diane de Benedetti</p>
                            <p>BUT S3 - TP C</p>
                            <div class="links-profil">
                                <a target="_blank" href="https://www.linkedin.com/in/diane-de-benedetti-5129a1251/"><img src="images/linkedin.png" alt="Logo Linkedin"></a>
                                <a target="_blank" href="https://github.com/DianeDeBenedetti"><img src="images/github.png" alt="Logo Github"></a>
                                <a target="_blank" href="https://www.dianed.dev/"><img src="images/globe.png" alt="Logo site Internet"></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="mentions-legales">
            <p>© 2024 Tous droits réservés - <a href="mention.php">Mentions légales</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/map.js"></script>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.12.0/headroom.min.js"></script>
    <script>
        const navbar = document.querySelector('.navbar');

        const headroom = new Headroom(navbar, {
            "offset": 50,
            "tolerance": 5,
            "classes": {
                "pinned": "headroom--pinned",
                "unpinned": "headroom--unpinned"
            }
        });

        headroom.init();
    </script>
    <script>
        const buttons = document.querySelectorAll('.myButton');
    
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // Réinitialiser la couleur de tous les boutons
                buttons.forEach(btn => btn.style.color = ''); 

                // Appliquer la couleur rouge au bouton cliqué
                this.style.color = '#36A2EB'; 
            });
        });

        const data = fetch('json/internetaccess.json').then(rep => rep.json())
        //console.log(data)
        const width = 550, height = 550;
        const path = d3.geoPath();
        const projection = d3.geoConicConformal()
            .center([2.454071, 46.279229])
            .scale(2600)
            .translate([width / 2, height / 2]);
        path.projection(projection);

        const svg = d3.select('#map').append("svg")
            .attr("id", "svg")
            .attr("width", width)
            .attr("height", height);

        const deps = svg.append("g");


        
        d3.json('json/regions.json').then(function (geojson) {

            d3.json('json/internetaccess.json').then(function (internetData) {

            deps.selectAll("path")
                .data(geojson.features)
                .enter()
                .append("path")
                .attr('class', 'departement')
                .attr("d", path)
                .attr("id", function(d) { return 'carte_'+ d.properties.code; })
                .on("mouseover", function (event, d) {
                    
                    console.log(internetData)
                    const internetAccess = internetData.find(regionData => regionData.region === d.properties.nom);

                    console.log(d)//d contient les informations du département survolé
                    div.transition()
                        .duration(200)
                        .style("opacity", .9);
                    div.html("Région : " + d.properties.nom
                        + "<br>Accès limité à Internet : " + internetAccess.internetAccess + "%")
                        .style("left", (event.pageX + 30) + "px")
                        .style("top", (event.pageY - 30) + "px")
                    d3.select('#c'+ d.properties.code).style("fill", "#36A2EB")
                })
                .on("mouseout", function (event, d) {
                    div.style("opacity", 0);
                    div.html("")
                        .style("left", "-500px")
                        .style("top", "-500px");
                    d3.select('#c'+ d.properties.code).style("fill", "#55423D")
                });
            });
        });

        let previousID = []

        let div = d3.select("body").append("div")
            .attr("class", "map-tooltip")
            .style("opacity", 0);

          document.querySelectorAll('.regions').forEach((e) => {
            console.log('regions')
            e.addEventListener('click', function(event) {

                    console.log('ok' + event.currentTarget.id)
                    console.log(d3.select())

                    id = 'carte_'+ event.currentTarget.id.substr(1,3)

                    previousID[previousID.length] = id

                    console.log(previousID)

                    if (previousID.length > 1){
                        document.getElementById(previousID[previousID.length -2]).classList.toggle('activeDep')
                    }

                    document.getElementById(id).classList.toggle('activeDep')
            })
          })
    </script>
</body>
</html>