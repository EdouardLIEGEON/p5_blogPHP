<?php session_start(); ?>
<!-- <div class="login_message"><?=$login_message;?></div> -->

        <header>
            <h1>Edouard LIEGEON <a target="_blank" href="https://www.linkedin.com/feed/">
            <img class="img_header"src="/images/logoEd.png" width="100px" height="100px" alt="Logo"></a>
            Développeur PHP</h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Accueil</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php?action=listPosts">Mes  projets</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php?action=contact">Me contacter</a></li>
                        <li class="nav-item px-lg-4"><a target="blank" class="nav-link text-uppercase" href="index.php?action=login">Se connecter</a></li>
                        <?php if(isset($_SESSION['user']) && !empty ($_SESSION['user']['id'])) : ?>
                            <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php?action=deconnexion">Se déconnecter</a></li>
                        <li class="nav-item px-lg-4"><a target="blank" class="nav-link text-uppercase" href="index.php?action=registration">S"inscrire</a></li>
                            <li class="nav-item px-lg-4"><a target="blank" class="nav-link text-uppercase" href="index.php?action=admin">Admin</a></li>
                            <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>