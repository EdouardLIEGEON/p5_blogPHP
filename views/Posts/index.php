<h2>Mes posts</h2>
    <section class="page-section about-heading">
        <div class="container">
            <div class="about-heading-content">
                <div class="row post">
                <?php foreach($posts as $post) : ?>
                    <div class="col-md-6 mx-auto">
                        <div class="bg-faded rounded p-5 m-auto">
                            <h3 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php print_r($post->title) ?></span>
                            </h3><br>
                            <p class="sousTitre"><?php print_r($post->subTitle) ?></p><br>             
                            <button class="btn-projects"><a href="/posts/single/<?php print_r($post->id) ?>" target="blank">En savoir plus</a></button><br>
                            <p class="sousTitre">Date de modification : <?php print_r($post->date) ?></p>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>


