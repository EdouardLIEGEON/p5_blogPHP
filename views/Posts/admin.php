<h2>Administration</h2>
<?php foreach($posts as $post) : ?>
    <section class="page-section about-heading">
        <div class="container">
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto ">
                        <div class="bg-faded rounded p-5 m-auto">
                            <h3 class="section-heading mb-0">
                                <span class="section-heading-upper"><?= $post->title ?></span>
                            </h3><br>
                            <p class="sousTitre"><?= $post->subTitle ?></p><br>    
                            <p><?= $post->content ?></p>    
                            <p>Modifié le <?= $post->date ?></p>    
                            <button class="btn-projects"><a href="/posts/modifier/<?= $post->id ?>">Modifier le projet</a></button><br><br>
                            <button class="btn-projects"><a href="/posts/supprimer/<?= $post->id ?>">Supprimer le projet</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endforeach ?>
<button class="btn-projects justify-content-center"><a href="/posts/ajouter" target="blank">Ajouter un projet</a></button>

