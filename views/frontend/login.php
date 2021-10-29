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
        <h2 class="section-heading mb-0">
                                Se connecter
                            </h2><br>
        </header>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <div id="box">
                                <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
                                    <input type="text" id="name" name="name" placeholder="Pseudo"/><br><br>
                                    <input type="password" id="email" name="email" placeholder="Mot de passe"/><br><br>
                                    <input class="btn-form" type="submit" name="send" value="Envoyer"/>
                                <div id="statusMessage"> 
                                    <?php if (! empty($db_msg)) { ?>
                                    <p class='<?= $type_db_msg; ?>Message'><?= $db_msg; ?></p>
                                    <?php } ?>
                                    <?php if (! empty($mail_msg)) { ?>
                                    <p class='<?= $type_mail_msg; ?>Message'><?= $mail_msg; ?></p>
                                    <?php } ?>
                                </div>
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
