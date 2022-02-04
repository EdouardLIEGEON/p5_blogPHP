
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
<!DOCTYPE html>
<?php $title = 'Mes projets'; ?>
<?php require('views/frontend/nav.php') ?>

<h2>Mes projets de formation</h2>

<?php

while ($data = $posts->fetch())
{
?>
    <section class="page-section about-heading">
        <div class="container admin_projects">
                <div class="row">
                            <h3>
                                <span class="section-heading-upper"><?= htmlspecialchars($data['title']); ?></span>
                            </h3><br>
                            <div class="row">
                                <div class="col-md-3 offset-4">
                                    <button class="btn-projects justify-content-center"><a target="_blank" href="index.php?action=post&amp;id=<?= $data['id'] ?>" target="blank">Modifier</a></button>
                                </div>    
                                <div class="col-md-3 ">
                                    <button class="btn-delete justify-content-center"><a target="_blank" href="index.php?action=post&amp;id=<?= $data['id'] ?>" target="blank">Supprimer</a></button>
                                </div>    
                            </div>
                </div>
        </div>
    </section>
<?php 
}
$posts->closeCursor();
?>
<button class="btn-create justify-content-center"><a target="_blank" href="index.php?action=post&amp;id=<?= $data['id'] ?>" target="blank">Créer un nouveau projet</a></button>

<footer>
<?php require("views/frontend/footer.php") ?>
</footer>
    </body>
</html>


