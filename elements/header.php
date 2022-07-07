<header class="background d-lg-block d-none">

    <nav class="navbar navbar-expand-lg shadow-5-strong mb-4 pb-4">
        <div class="container-fluid">
        <a class="navbar-brand me-5 pe-5" href="home.php"><img class="logocss" src="../assets/img/logosport.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupported" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupported">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item ">
                        <a href="home.php" class="nav-link  fw-bold  active titre me-5"> <i class="bi bi-house-door m-2"></i>Accueil</a>

                    </li>
                    <!-- <li class="nav-item">

                        <?php if (isset($_SESSION['user'])) {  ?>
                            <a class="nav-link fw-bold active titre me-5 " href="logout.php"><i class="bi bi-person me-2"></i>
                                Deconnexion
                            </a>
                        <?php } else {  ?>
                            <a class="nav-link fw-bold active titre me-5 " href="login.php"><i class="bi bi-person me-2"></i>
                                S'indentifier
                            </a>
                        <?php   }
                        ?>

                    </li> -->
                    <li class="nav-item ">
                        <a href="inscription.php" class="nav-link  fw-bold  active titre me-5">Abonnez-vous</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  fw-bold  active titre" href="parameters.php" tabindex="-1" aria-disabled="true"><i class="bi bi-gear me-2"></i>Paramètres</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="pb-4">
        <h1 class="text-center py-4 h1css ">Le Recap'Sport <img class="logocss" src="../assets/img/logosport.png" alt=""></h1>
    </div>

    <nav class="navbar navbar-expand-lg shadow-5-strong recherche p-4 mt-4 opacitycss">
        <div class="container-fluid ">
            <a class="navbar-brand " href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold textcss text-dark" href="pages.php?sport=bike">Tour de France</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold textcss text-dark" href="pages.php?sport=olympics">Jeux Olympiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold textcss text-dark" href="pages.php?sport=extreme">Sports extrêmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold textcss text-dark" href="pages.php?sport=sail">Voile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold textcss text-dark" href="pages.php?sport=winter">Sports d'hiver</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</header>

<header class="d-lg-none d-block">
    <nav class="navbar fixed-bottom navbar-expand-lg navigation shadow-5-strong py-2">
        <div class="container-fluid">
            <a class="navbar-brand me-5 pe-5" href="home.php"><a class="navbar-brand" href="#">Titre de notre Site</a></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupported" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupported">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item ">
                        <a href="home.php" class="nav-link  fw-bold  active titre me-5 text-light">Accueil</a>

                    </li>
                    <li class="nav-item">

                        <?php if (isset($_SESSION['user'])) {  ?>
                            <a class="nav-link fw-bold active titre me-5 text-light" href="logout.php">
                                Deconnexion
                            </a>
                        <?php } else {  ?>
                            <a class="nav-link fw-bold active titre me-5 text-light" href="login.php">
                                S'indentifier
                            </a>
                        <?php   }
                        ?>

                    </li>
                    <li class="nav-item ">
                        <a href="inscription.php" class="nav-link  fw-bold  active titre me-5 text-light">Abonnez-vous</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fw-bold  active titre me-5 text-light" href="settings.php">Favoris</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold text-light " href="pages.php?sport=bike">Tour de France</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold textcss text-light" href="pages.php?sport=olympics">Jeux Olympiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold textcss text-light" href="pages.php?sport=extreme">Sports extrêmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold textcss text-light" href="pages.php?sport=sail">Voile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold textcss text-light" href="pages.php?sport=winter">Sports d'hiver</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link  fw-bold  active titre text-light" href="parameters.php" tabindex="-1" aria-disabled="true">paramètres</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>