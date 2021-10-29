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
        <h2 class="section-heading mb-0">
                                Administration des projets
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
