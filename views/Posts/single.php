<h2><?php print_r($post->title) ?></h2>
    <section class="page-section about-heading">
        <div class="container">
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto ">
                        <div class="bg-faded rounded p-5 m-auto">
                            <h3><?php print_r($post->subTitle) ?></h3><br>
                            <p><?php print_r($post->content) ?></p>
                            <em>Modifié le <?php print_r($post->date) ?></em><br><br>
                            <p>Auteur : <?php print_r($post->author) ?></p>
                            <h4>Commentaires</h4><br>
                        <div class=row>
                            <div class="col-md-6">
                            <?php foreach($comments as $comment): ?>
                                <p><strong><?php print_r($comment->author) ?></strong></p>
                                <p><?php print_r($comment->content) ?></p>
                                <span class="little_p">le <?php print_r($comment->date) ?></span><br>
                                ____________________
                                <?php endforeach ?>
                            </div>
                            <div class="col-md-6">

                            <!--On vérifie que l'utilisateur est bien connecté-->
                                <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
                                print_r( $form); 
                                }?> 
                            </div>   
                        </div>
                    </div>
                </div>
            </div>   
    </section>
</html>