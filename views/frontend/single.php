<!DOCTYPE html>
<html>
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
      <?php require('nav.php');  ?>
    <body>
    <h2><?= htmlspecialchars($post['title']); ?></h2>

    <section class="page-section about-heading">
        <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0 header" src="<?= 'public/images/'.$post['header']; ?>" alt="Image du post" />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto ">
                        <div class="bg-faded rounded p-5 m-auto">
                            <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
                            <em>le <?= $post['date'] ?></em><br><br>
                        </div>
                    </div>
                </div>
            </div>    
    </section>
    <section>
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto ">
                    <div class="bg-faded rounded p-5 m-auto">
                        <h3>Commentaires</h3>
                        <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                            <div>
                                <label for="author">Auteur</label><br />
                                <input type="text" id="author" name="author" />
                            </div>
                            <div>
                                <label for="comment">Commentaire</label><br />
                                <textarea id="comment" name="comment"></textarea>
                            </div>
                            <div>
                                <input type="submit" class="btn-form"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mockup">
        <h2>Aperçu de l'application</h2>
        <img class="mockup"src="<?='public/images/' .$post['mockup'] ?>" alt="">
    </section>

        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <h4><strong><?= htmlspecialchars($comment['author']) ?></h4></strong><span class="little_p">le <?= $comment['date'] ?></span>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p><br>
        <?php
        }
        ?>
    </body>
    <?php require("footer.php"); ?>
</html>