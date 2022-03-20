<body>
    <header>
        <h2 class="section-heading mb-0">Se connecter</h2><br>
        </header>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <?php if(!empty($_SESSION['erreur'])) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php print_r( $_SESSION['erreur']); unset($_SESSION['erreur']); ?>
                                </div>
                            <?php endif; ?> 
                            <div id="box">
                                <?php print_r($loginForm) ?> 
                                <p>Pas encore de compte utilisateur ?<a href="/users/register">M'inscrire</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                   
        </section>
