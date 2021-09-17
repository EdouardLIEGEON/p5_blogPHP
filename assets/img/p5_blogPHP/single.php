<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include("nav.php") ?>
    </head>
    <body>
        <header>
        </header>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo $projets['header']; ?>" alt="Image du post" />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h3 class="site-heading text-center text-faded d-none d-lg-block">
                                    <?php echo $projets['titre']; ?>
                                </h3>
                                <p><?php echo $projets['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("footer.php") ?>
    </body>
</html>
