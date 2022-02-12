<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edouard LIEGEON - Développeur PHP/Symfony</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="/images/logoEd.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/styles.css" rel="stylesheet" />
    </head>
    <header>
            <h1>Edouard LIEGEON 
            <img class="img_header"src="/images/logoEd.png" width="100px" height="100px" alt="Logo">
            Développeur PHP</h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/">Accueil</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/posts">Mes  projets</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contact">Me contacter</a></li>
                    </ul>
                    <ul class="navbar-nav mx-auto">
                        <?php if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])): ?>
                            <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/users/logout">Se déconnecter</a></li>
                            <li class="nav-item px-lg-4"><a target="blank" class="nav-link text-uppercase" href="posts/admin">Admin</a></li>
                            <?php else: ?>
                                <li class="nav-item px-lg-4"><a target="blank" class="nav-link text-uppercase" href="/users/login">Se connecter</a></li>
                                <li class="nav-item px-lg-4"><a target="blank" class="nav-link text-uppercase" href="/users/register">S"inscrire</a></li>
                                <?php endif; ?>
                                <li><a href="https://www.linkedin.com/in/edouardliegeon/"><img src="/images/linkedin.png" width="30px" height="30px" alt="Logo Linkedin"></a></li>
                    </ul>
                </div>
        </nav>
<body>
    <div class="container">
        <?= $content ?>
    </div>
    
</body>
<footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Edouard LIEGEON 2021 &copy; </p></div><img src="/images/logoEd.png" width="75px" height="75px" alt="Logo">
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
         integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
         crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</html>