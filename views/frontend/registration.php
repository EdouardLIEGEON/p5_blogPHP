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
       <?php include("nav.php") ?>
    </head>
    <body>
    <header>
        <h2 class="section-heading mb-0">S"inscrire</h2><br>
        </header>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <div id="box">
                                <form id="form" action="submit_form.php" method="post">
                                    <input type="text" id="name" name="name" placeholder="Pseudo *" value="<?= $_POST['name'] ?? '' ?>" required/><br><br>
                                    <input type="password" id="password" name="password" placeholder="Mot de passe *" value="<?= $_POST['password'] ?? '' ?>" required/><br><br>  
                                    <input class="btn-form" type="submit" value="Envoyer"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                 
        </section>
        <footer>
            <?php include("footer.php") ?>
        </footer>