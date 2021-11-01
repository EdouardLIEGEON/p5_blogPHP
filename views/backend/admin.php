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
       <?php include("views/frontend/nav.php") ?>
    </head>
    <body>
    <header>
        <h2 class="section-heading mb-0">Administration des projets</h2><br>
    </header>
<?php
while ($data = $posts->fetch())
{
?>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?= 'public/img/'.$data['header']; ?>" alt="Image du post" />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto ">
                        <div class="bg-faded rounded p-5 m-auto">
                            <h3 class="section-heading mb-0">
                                <span class="section-heading-upper"><?= htmlspecialchars($data['title']); ?></span>
                            </h3><br>
                            <p class="sousTitre"><?= htmlspecialchars($data['subtitle']); ?></p><br>
                            <img src="<?= '../public/img/'.$data['technology1']; ?>" alt="technologie utilisée 1">
                            <img src="<?= '../public/img/'.$data['technology2']; ?>" alt="technologie utilisée 2">
                            <img src="<?= '../public/img/'.$data['technology3']; ?>" alt="technologie utilisée 3">
                            <img src="<?= '../public/img/'.$data['technology4']; ?>" alt="technologie utilisée 4"><br><br>
                            <p>Date de publication : <?= $data['date_fr']; ?></p>
                            <button class="btn-projects justify-content-center"><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">En savoir plus</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
}
$posts->closeCursor();
?>
<?php require("footer.php") ?>
    </body>
</html>

