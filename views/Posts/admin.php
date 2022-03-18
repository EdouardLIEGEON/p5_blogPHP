<h2>Administration</h2>
    <section class="page-section about-heading">
        <div class="container">
            <div class="about-heading-content">
                <div class="row">
                <?php foreach($posts as $post) : ?>
                    <div class="col-md-6 mx-auto ">
                        <div class="bg-faded rounded p-5 m-auto" style="height: 1000px;">
                            <h3 class="section-heading mb-0">
                                <span class="section-heading-upper"><?= htmlentities($post->title) ?></span>
                            </h3><br>
                            <p class="sousTitre"><?=htmlentities($post->subTitle) ?></p><br>    
                            <p><?=htmlentities($post->content)?></p>    
                            <p>Modifié le <?= htmlentities($post->date) ?></p>    
                            <button class="btn-projects"><a href="/posts/modifier/<?=htmlentities($post->id) ?>">Modifier le projet</a></button><br><br>
                            <button class="btn-projects"><a href="/posts/supprimer/<?php print_r(htmlentities($post->id)) ?>">Supprimer le projet</a></button>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>

<button class="btn-projects justify-content-center"><a href="/posts/ajouter" target="blank">Ajouter un projet</a></button>

