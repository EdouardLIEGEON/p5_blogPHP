<h2>Mes posts</h2>
<?php foreach($posts as $post) : ?>
    <section class="page-section about-heading">
        <div class="container">
            <div class="about-heading-content">
                <div class="row post">
                    <div class="col-xl-9 col-lg-10 mx-auto ">
                        <div class="bg-faded rounded p-5 m-auto">
                            <h3 class="section-heading mb-0">
                                <span class="section-heading-upper"><?= $post->title ?></span>
                            </h3><br>
                            <p class="sousTitre"><?= $post->subTitle ?></p><br>             
                            <p>Date de modification : <?= $post->date ?></p>
                            <button class="btn-projects"><a href="/posts/single/<?= $post->id ?>" target="blank">En savoir plus</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach ?>


