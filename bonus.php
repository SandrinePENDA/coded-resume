<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- My own CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Mon CV web et responsive réalisé en HTML, CSS par Sandrine N. PENDA</title>
</head>

<body class="container pt-4">
    <!-- HEADER section -->
    <header class="row justify-content-between">
        <!-- Left side -->
        <article class="col-6">
            <!-- Prénom & Nom -->
            <!-- <span class="d-block">Sandrine N. PENDA</span> -->

            <form action="" method="post" class="name-firstname">
                <div id="toBeHidden">
                    <input type="text" name="firstname" id="firstname">
                    <input type="text" name="fathername" id="fathername">
                    <button type="submit">Changer</button>
                </div>


                <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Vérifie que le formulaire a été soumis
                        if (!empty($_POST['firstname']) && !empty($_POST['fathername'])) {
                            echo '<span class="d-block">' . htmlspecialchars($_POST["firstname"]) . ' ' . htmlspecialchars($_POST["fathername"]) . '</span>';
                            //  To hide fiels after sumitting so it just remains the names filled
                             echo '<script>document.getElementById("toBeHidden").style.display = "none";</script>';
                        } else {
                            echo '<p style="color: red;">Veuillez remplir tous les champs.</p>';
                        }
                    }
                ?>
                </form>

            <!-- Moyen de contact -->
            <div class="flex-column">
                <a class="d-block" href="tel:+33667817910">06.67.81.79.10</a>
                <a class="d-block" href="mailto:sandrine.penda@yahoo.fr">sandrine.penda@yahoo.fr</a>
            </div>
        </article>

        <!-- Right side -->
        <article class="flex-column text-end col-6">
            <span class="d-block">Nationalité française</span>
            <a href="https://www.linkedin.com/in/sandrine-penda" target="_blank">Profil LinkedIn</a>
            <p>Région parisienne</p>
        </article>
    </header>

    <!-- MAIN section -->
    <main>
        <h1 class="cv-title text-uppercase text-center">webmaster digital junior</h1>

        <!-- Rubrique 'à propos de moi' -->
        <section class="row justify-content-center align-items-center">
            <div class="cv-headings">
                <span class="text-uppercase text-center d-flex justify-content-center fs-3">à propos de moi</span>
            </div>

            <p class="mt-2 intro">
                Créative et technique, je conçois des sites web performants et accessibles en intégrant SEO et
                technologies
                web (HTML, CSS, PHP, WordPress, etc.). Problem solver, autonome et rigoureuse, je m’investis pleinement
                dans
                des projets digitaux variés et collabore étroitement avec les différentes parties prenantes, en plaçant
                l’utilisateur au cœur des solutions.
            </p>
        </section>

        <!-- Rubrique 'compétences' -->
        <section class="row justify-content-center align-items-center mb-3">
            <div class="cv-headings mb-2">
                <span class="text-uppercase text-center d-flex justify-content-center fs-3">compétences</span>
            </div>

            <div class="container">
                <div class="row">
                    <div class="d-flex flex-column col-sm-6 col-12 align-items-center justify-content-center">
                        <span class="skills"><strong>Frontend : </strong>HTML5, CSS3, BEM, SASS, Vanilla JS</span>
                        <span class="skills"><strong>Backend : </strong> PHP, SQL, MySQL, Composer, NPM</span>
                        <span class="skills"><strong>Framework : </strong> Bootstrap, jQuery, architecture MVC</span>
                        <span class="skills"><strong>CMS : </strong> WordPress, Contentful, Kentico, Proximis</span>
                    </div>

                    <div class="d-flex flex-column col-sm-6 col-12 align-items-center justify-content-center">
                        <span class="skills"><strong>Frontend : </strong>HTML5, CSS3, BEM, SASS, Vanilla JS</span>
                        <span class="skills"><strong>Backend : </strong> PHP, SQL, MySQL, Composer, NPM</span>
                        <span class="skills"><strong>Framework : </strong> Bootstrap, jQuery, architecture MVC</span>
                        <span class="skills"><strong>CMS : </strong> WordPress, Contentful, Kentico, Proximis</span>
                    </div>

                </div>
            </div>
        </section>

        <!-- Rubrique 'expériences' -->
        <section class="row justify-content-center align-items-center mb-3">
            <div class="cv-headings mb-2">
                <span class="text-uppercase text-center d-flex justify-content-center fs-3">expériences</span>
            </div>

            <!-- Accordion -->
            <article class="container">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <!-- France Scooters -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                <strong class="title-exp">Webmaster WordPress de 3 sites web | Octobre, Juin-Juillet
                                    2024 |
                                    France Scooters –
                                    Paris 17 <em>(prestations)</em>
                                </strong>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        Création de A à Z site vitrine ; mise à jour & création de nouvelles pages +
                                        fiches-produits (images, textes).
                                    </li>
                                    <li>
                                        Migrations, maintenance + assistance client ; optimisations UI & UX d’un site en
                                        version
                                        mobile.
                                    </li>
                                    <li>
                                        Création & retouches d’infographies, amélioration de la performance (Google
                                        PageSpeed)
                                        et SEO.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Autobacs France -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                <strong class="title-exp">Intégrateur web e-Commerce | Sept.-Nov. 2023 | Autobacs France
                                    –
                                    Pierrelaye
                                    <em>(CDI)</em>
                                </strong>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        Création de fiches-produits (argumentaires marketing, maillage interne SEO,
                                        etc.).
                                    </li>
                                    <li>
                                        Intégration responsive de diverses pages de contenu (HTML, CSS).
                                    </li>
                                    <li>
                                        Optimisation performance des pages web & du SEO ; retouches & création visuels
                                        produit
                                        (Photoshop).
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Tilbury agency -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                <strong class="title-exp">Développeur front-end | Sept. 2022 - Juin 2023 | Tilbury –
                                    Paris
                                    18
                                    <em>(CDI)</em>
                                </strong>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        Maquettage UI diverses pages web (accueil, en-tête, pied-de-page, connexion,
                                        etc.)
                                    </li>
                                    <li>
                                        Intégrations en responsive de maquettes graphiques + refontes pages web sur
                                        tablettes et mobiles.
                                    </li>
                                    <li>
                                        Ajout de fonctionnalités + maintenance technique ; MAJ des contenus de 6 sites
                                        web.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Point Ligne Plan agence WordPress -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFour">
                                <strong class="title-exp">Développeur full-stack WordPress | Oct. 2020-Fév. 2021 |
                                    PointLignePlan - Paris 17
                                    <em>(stage)</em>
                                </strong>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        Création d’un bloc Gutenberg WordPress sur-mesure (ACF, PHP) + Gestion d’un site
                                        multilingue WordPress.
                                    </li>
                                    <li>
                                        Refonte de la page 404 + intégration landing pages WordPress (HTML5, CSS3, PHP).
                                    </li>
                                    <li>
                                        Élaboration en anglais d'un guide du contributeur WordPress pour un site
                                        Corporate.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Rubrique 'formations' -->
        <section class="row justify-content-center align-items-center mb-3">
            <div class="cv-headings mb-2">
                <span class="text-uppercase text-center d-flex justify-content-center fs-3">formations</span>
            </div>

            <!-- Accordion -->
            <article class="container">
                <div class="accordion" id="accordionPanelsStayOpenExample2">
                    <!-- Doranco -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne2" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne2">
                                <ul class="title-exp">
                                    <li class="fw-bold">Titre professionnel d’Infographiste Designer web |
                                        <span>2021-2022.</span>
                                    </li>
                                </ul>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>
                                    École DORANCO, Paris
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Epitech -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne3" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne3">
                                <ul class="title-exp">
                                    <li class="fw-bold">Certificat de concepteur développeur web et mobile
                                        <em>(reconversion professionnelle)</em> |
                                        <span>2019-2021.</span>
                                    </li>
                                </ul>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne3" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>
                                    Coding Academy by EPITECH, Paris
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Association Philo. -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne4" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne4">
                                <ul class="title-exp">
                                    <li class="fw-bold">Initiation à la création de sites internet en HTML5 et CSS3 |
                                        <span> 2018-2019.</span>
                                    </li>
                                </ul>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne4" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>
                                    Association Philotechnique, Paris
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Université de Dla. -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne5" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne5">
                                <ul class="title-exp">
                                    <li class="fw-bold">Licence en communication des organisations |
                                        <span> 2006.</span>
                                    </li>
                                </ul>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne5" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>
                                    Université de Douala
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Rubrique 'centres d'intérêt' -->
        <section class="row justify-content-center align-items-center mb-3">
            <div class="cv-headings mb-2">
                <span class="text-uppercase d-flex justify-content-center fs-3">centres d'intérêt</span>
            </div>

            <!-- Accordion -->
            <article class="container">
                <div class="accordion" id="accordionPanelsStayOpenExample6">
                    <!-- Sport -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne6" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne6">
                                <ul class="title-exp">
                                    <li class="fw-bold">Événements sportifs à la télé</li>
                                </ul>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne6" class="accordion-collapse collapse">
                            <div class="accordion-body row justify-content-center">
                                <img src="assets/img/interet-sport.jpg" class="interests img-thumbnail"
                                    alt="Image d'une personne regardant un match de football à la télé">
                            </div>
                        </div>
                    </div>

                    <!-- Cuisine -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne7" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne7">
                                <ul class="title-exp">
                                    <li class="fw-bold">Cuisine & pâtisserie</li>
                                </ul>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne7" class="accordion-collapse collapse">
                            <div class="accordion-body row justify-content-center">
                                <img src="assets/img/interet-cuisine.jpg" class="interests img-thumbnail"
                                    alt="Image d'une de petites boules de farine pétries sur un plan de travail">
                            </div>
                        </div>
                    </div>

                    <!-- Dramas coréens -->
                    <div class="accordion-item experiences border border-dark">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne8" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne8">
                                <ul class="title-exp">
                                    <li class="fw-bold">Séries TV coréennes</li>
                                </ul>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne8" class="accordion-collapse collapse">
                            <div class="accordion-body row justify-content-center">
                                <img src="assets/img/interet-kdrama.jpg" class="interests img-thumbnail"
                                    alt="Image d'un laptop allumé sur la plateforme de streaming Netflix">
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <!-- FOOTER section -->
    <footer class="container">
        <span class="inline-block footer-legals">
            Cette page web a été conçue et réalisée par Sandrine N. PENDA le 05/02/2025, dans le cadre du test technique
            pour le
            recrutement du Webmaster Digital Junior au sein de l'agence bb&b.
        </span>

        <!-- crédits Flaticon & Pexels. -->
        <div class="text-center footer-legals"> <em>Icônes utilisées conçues par <a
                    href="https://www.flaticon.com/fr/auteurs/vectaicon" title="vectaicon">
                    vectaicon </a>
                de <a href="https://www.flaticon.com/fr/" title="Flaticon">www.flaticon.com</a>

                <span class="inline-block">Les images proviennent de Soumith Soman, Lara Farber et Luca Sammarco à <a
                        href="https://www.pexels.com" title="Pexels">www.pexels.com</a>
                </span></em>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>