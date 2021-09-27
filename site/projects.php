<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include("nav.php") ?>
    </head>
    <body>
    <header>
        <h2 class="section-heading mb-0">
                                Mes posts
                            </h2><br>
        </header>
    <?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=blogphp;charset=utf8', 'root', '');
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM projets');
while ($donnees = $reponse->fetch()){
?>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo 'assets/img/'.$donnees['header']; ?>" alt="Image du post" />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto ">
                            <div class="bg-faded rounded p-5 m-auto">
                                <h3 class="section-heading mb-0">
                                    <span class="section-heading-upper"><?php echo $donnees['titre']; ?></span>
                                </h3><br>
                                <p class="sousTitre"><?php echo $donnees['sous-titre']; ?></p><br>
                                <img src="<?php echo 'assets/img/'.$donnees['technologie1']; ?>" alt="technologie utilisée 1">
                                <img src="<?php echo 'assets/img/'.$donnees['technologie2']; ?>" alt="technologie utilisée 2">
                                <img src="<?php echo 'assets/img/'.$donnees['technologie3']; ?>" alt="technologie utilisée 3">
                                <img src="<?php echo 'assets/img/'.$donnees['technologie4']; ?>" alt="technologie utilisée 4"><br><br>
                                <p>Date de publication : <?php echo $donnees['date']; ?></p>
                                <button class="btn-projects justify-content-center"><a href="single.php?id='.$donnees['id'].'">En savoir plus</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
        }
        $reponse->closeCursor();
        ?>
        <?php include("footer.php") ?>
    </body>
</html>