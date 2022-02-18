<h2><?= $post->title ?></h2>
    <section class="page-section about-heading">
        <div class="container">
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto ">
                        <div class="bg-faded rounded p-5 m-auto">
                            <p><?= $post->content ?></p>
                            <em>Modifié le <?= $post->date ?></em><br><br>
                            <p>Auteur : <?= $post->author ?></p>
                            <h3>Commentaires</h3><br>
                        <div class=row>
                            <div class="col-md-6">
                            <?php foreach($comments as $comment): ?>
                                <p><strong><?= $comment->author ?></strong></p>
                                <p><?= $comment->content ?></p>
                                <span class="little_p">le <?= $comment->date ?></span><br>
                                ________
                                <?php endforeach ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form ?> 
                            </div>   
                        </div>
                    </div>
                </div>
            </div>   
    </section>
</html>