<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sae 303 - Dataviz : Mentions légales</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script src="js/jquery.localScroll.min.js" defer></script>
    <script src="js/jquery.scrollTo.min.js" defer></script>
    <script src="js/jquery.parallax-1.1.3.js" defer></script>
    <script src="js/index.js" defer></script>
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
<body>
<nav class="navbar navbar-expand-lg bg-beige">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link-brown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Navigation
                </a>
                <ul class="dropdown-menu bg-beige">
                    <li><a class="dropdown-item" href="index.php">Retour à la page d'accueil</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section id="mentions_legales">
        <h1>Mentions légales</h1>
        <div id="mention_text">
            <section>
                <h2>Informations sur les propriétaires du site</h2>
                <p><strong>Nom :</strong> Léna Pignolet et Diane de Benedetti</p>
                <p><strong>Statut :</strong> Étudiantes</p>
                <p><strong>Email :</strong> lena.pignolet@etudiant.univ-reims.fr / diane.de-benedetti@etudiant.univ-reims.fr</p>
            </section>
    
            <section>
                <h2>Hébergement du site</h2>
                <p><strong>Nom :</strong> <a target="_blank" href="https://pulseheberg.com/">PulseHeberg</a></p>
                <p><strong>Adresse :</strong> 9, Boulevard de Strasbourg 83000 Toulon</p>
                <p><strong>Téléphone :</strong> +33 (0) 4 22 14 13 60</p>
                <p><strong>Email :</strong> contact@pulseheberg.com</p>
            </section>
    
            <section>
                <h2>Propriété intellectuelle</h2>
                <p>Le contenu de ce site (textes, images, vidéos, etc.) est protégé par les droits d'auteur. Toute reproduction, distribution, modification, adaptation, retransmission ou publication de ces différents éléments est strictement interdite sans l'accord écrit de l'auteur.</p>
                <p>Les icônes pour LinkedIn, Github et le globe proviennent du site <a target="_blank" href="https://www.flaticon.com/fr/">Flaticon</a> et sont peuvent être retrouvés via ces liens : <a target="_blank" href="https://www.flaticon.com/fr/icones-gratuites/linkedin">Linkedin</a>, <a target="_blank" href="https://www.flaticon.com/free-icons/github">Github</a>, <a target="_blank" href="https://www.flaticon.com/free-icons/global">Globe</a>.</p>
                <p>L'image de fond sur la page d'accueil du site provient du site <a target="_blank" href="https://www.wallpaperflare.com/">Wallpaper Flare</a> et peut être retrouvé via ce lien : <a target="_blank" href="https://www.wallpaperflare.com/france-paris-louvre-museum-gold-art-wall-building-architecture-wallpaper-eouca">HD Wallpaper Louvre Museum</a></p>
            </section>
    
            <section>
                <h2>Politique de confidentialité</h2>
                <p>Ce site ne collecte pas de données personnelles et n'utilise pas de cookies.</p>
            </section>
    
        </div>
    </section>

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
            <p>© 2024 Tous droits réservés</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
</body>
</html>