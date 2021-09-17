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
                    <div class="row">   
                        <div class="bg-faded rounded p-5 m-auto">
                            <div class="col-xl-5 col-lg-5">
                                <span class="section-heading-upper title_admin"><?php echo $donnees['titre']; ?>
                            </div>
                            <div class="col-xl-4 col-lg-4 offset-8">
                                <a target="blank" href="alter.php"><button class="btn_admin">MODIFIER</button></a><a target="blank" href="delete.php"><button class="btn_admin">SUPPRIMER</button></a></span>
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
