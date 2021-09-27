<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include("nav.php") ?>
    </head>
    <body>
    <?php 
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=blogphp;charset=utf8', 'root', '');
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
            $reponse = $bdd->query('SELECT * FROM projets');
            $donnees = $reponse->fetch();
        ?>
<h3 class="section-heading mb-0 titresingle">
                                <span class="section-heading-upper"><?php echo $donnees['titre']; ?></span>
                            </h3><br>
        <section class="page-section about-heading">
            <div class="container">
            
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo 'assets/img/'.$donnees['header']; ?>" alt="Image du post" />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <p><?php echo $donnees['description']; ?></p>
                            </div>
                            <h3 class="section-heading mb-0 titreMockup">
                                <span class="section-heading-upper">Aperçu de l'application</span>
                            </h3><br>
                            <img class="mockup" src="<?php echo 'assets/img/'.$donnees['mockup']; ?>" alt="Mockup de l'application">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("footer.php") ?>
    </body>
</html>
