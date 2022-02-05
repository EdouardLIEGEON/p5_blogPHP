<h2>Mes projets de formation</h2>
<?php foreach($posts as $post) : ?>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?= '/images/'.$post->header ?>" alt="Image du post" />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto ">
                        <div class="bg-faded rounded p-5 m-auto">
                            <h3 class="section-heading mb-0">
                                <span class="section-heading-upper"><?= $post->title ?></span>
                            </h3><br>
                            <p class="sousTitre"><?= $post->subTitle ?></p><br>
                            <p class="tech_title">Technologies utilisées : </p>
                            <div class="tech_logos">
                                <img src="<?= '/images/'.$post->technology1 ?>" alt="technologie utilisée 1">
                                <img src="<?= '/images/'.$post->technology2 ?>" alt="technologie utilisée 2">
                                <img src="<?= '/images/'.$post->technology3 ?>" alt="technologie utilisée 3">
                                <img src="<?= '/images/'.$post->technology4 ?>" alt="technologie utilisée 4">
                            </div>
                            <p>Date de publication : <?= $post->date ?></p>
                            <button class="btn-projects justify-content-center"><a href="/posts/single/<?= $post->id ?>" target="blank">En savoir plus</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach ?>


