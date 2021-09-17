
<!DOCTYPE html>
<html>
    <header>
        <?php include("nav.php"); ?>
        <h2>Mes posts</h2>
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

        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex rounded">
                        <img src="<?php echo 'assets/img/'. $donnees['header']; ?>" alt="Image de l'application" width="600px" height="400px">
                    </div>
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 ms-auto rounded">
                            <h3 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $donnees['titre']; ?></span>
                            </h3><br>
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $donnees['sous-titre']; ?></p><br>
                        <a href="single.php">En savoir plus</a></div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
        }
        $reponse->closeCursor();
        ?>
       <?php include("footer.php") ?>
</html>
