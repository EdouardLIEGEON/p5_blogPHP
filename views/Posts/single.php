<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edouard LIEGEON - Développeur PHP/Symfony</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
         integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
         crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
        crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="/images/logoEd.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/styles.css" rel="stylesheet" />
    </head>
    <header>
            <h1>Edouard LIEGEON 
            <img class="img_header"src="/images/logoEd.png" width="100px" height="100px" alt="Logo">
            Développeur PHP</h1>
        </header>
    <h2><?= $post->title ?></h2>
    <section class="page-section about-heading">
        <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0 header" src="<?= '/images/'.$post->header ?>" alt="Image du post" />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto ">
                        <div class="bg-faded rounded p-5 m-auto">
                            <p><?= $post->content ?></p>
                            <em>le <?= $post->date ?></em><br><br>
                        </div>
                    </div>
                </div>
            </div>   
            <h2>Aperçu de l'application</h2>
        <div class="row">
            <div class="col-md-6 offset-3">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0 mockup"src="<?='/images/'.$post->mockup ?>" alt="">
            </div>
        </div> 
    </section>
    <!-- <section>
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto ">
                    <div class="bg-faded rounded p-5 m-auto">
                        <h3>Commentaires</h3><br>
                        <div class=row>
                            <div class="col-md-6">
                                <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                                    <div>
                                        <label for="author"><?= $_SESSION['name'] ?></label><br />
                                        <input type="text" id="author" name="author" />
                                    </div><br>
                                    <div>
                                        <label for="content">Commentaire</label><br />
                                        <textarea id="content" name="content"></textarea>
                                    </div>
                                    <div>
                                        <input type="submit" class="btn-form"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 offset-2">
                                <?php
                                while ($comment = $comments->fetch())
                                {
                                ?>
                                <h4><?= htmlspecialchars($comment['author']) ?></h4><span class="little_p">le <?= $comment['date'] ?></span>
                                <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p><br>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</html>