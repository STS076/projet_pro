<div class="container">
    <header class="d-lg-block d-none bg-light ">
        <div class="pt-5">
            <h1 class="text-center py-5">All about costumes<img class="logocss" src="../assets/img/logosport.png" alt=""></h1>
        </div>
        <nav class="navbar navbar-expand-lg shadow-5-strong mt-4 navigation">
            <a class="navbar-brand " href="#"></a>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav  w-100 nav-justified  nav d-flex">
                    <li class="nav-item ">
                        <a href="home.php" class="nav-link  fw-bold  text-dark"> <i class="bi bi-house-door m-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active titre box fw-bold text-dark" href="pages.php?sport=bike">News</a>
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark  fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Costumes by genre
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Science Fiction</a></li>
                            <li><a class="dropdown-item" href="#">Fantasy</a></li>

                            <li><a class="dropdown-item" href="#">Historical</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark  fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Costumes by movie
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Star Wars</a></li>
                            <li><a class="dropdown-item" href="#">Lord of the Rings</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
</div>





<!-- navbar mobile -->

<header class="d-lg-none d-block">
    <nav class="navbar fixed-bottom navbar-expand-lg navigation shadow-5-strong py-2">
        <div class="container-fluid">
            <a class="navbar-brand me-5 pe-5" href="home.php"><a class="navbar-brand" href="#">Titre de notre Site</a></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupported" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupported">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="menu-item ">
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