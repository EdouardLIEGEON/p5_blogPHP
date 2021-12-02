<?php session_start(); // $_SESSION ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edouard LIEGEON - Développeur PHP/Symfony</title>
        <link rel="icon" type="image/x-icon" href="public/images/logoEd.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="public/styles.css" rel="stylesheet" />
    </head>
<?php include('nav.php') ?>
<section class="page-section clearfix intro">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="public/images/code.jpg" alt="Screenshot d'un code" />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-lower">Du commerce au Web</span>
                        </h2>
                        <p class="mb-3">Après 10 ans passés dans la grande distribution, des problèmes de santé m'ont permis de réfléchir à une reconversion. 
                            J'ai donc décidé de me lancer dans le web, cherchant un métier où la créativité et la réflexion sont de mise. <br>
                           J'ai ainsi pu réaliser un titre professionnel <b>"Développeur web junior"</b>, mais à la fin de cette formation j'ai su que ce n'était que la première étape 
                           d'un périple enrichissant. Pour moi la polyvalence est importante et même essentielle, j'ai donc décider de rejoindre la formation PHP/Symfony chez OpenClassrooms.</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="index.php?action=contact">Me contacter</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-lower">Mes projets</span>
                            </h2>
                            <p class="mb-3">Ici vous pourrez trouver les différents projets que j'ai réaliser dans mes différentes formations mais surtout de Openclassrooms. J'ai pu travailler sur JavaScript, PHP, Twig, Symfony, Sass. Je pourrai aussi 
                                partager ma veille technologique. Vous pouvez donner votre avis et vos impressions sur mes expériences.
                            </p>
                            <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="index.php?action=listPosts">Accéder aux projets</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("footer.php") ?>
    </body>
</html>
