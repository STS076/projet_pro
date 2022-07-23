<header class="d-lg-block d-none sewing bg-light ">
    <div class="py-3">
        <h1 class="text-center py-2 bw-bold">It's always better when it's free<img class="logocss" src="../assets/img/logosport.png" alt=""></h1>
    </div>
    <nav class="navbar navbar-expand-lg shadow-5-strong py-2 navigation">
        <!-- <a class="navbar-brand " href="#"></a> -->
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav  w-100 nav-justified  nav d-flex">
                <li class="nav-item d-flex">
                    <a href="home.php" class="nav-link fw-bold text-white">Home</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link active titre box fw-bold text-white" href="news.php">News</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white  fw-bold" href=id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Arrondissement
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="arrondissements.php?choice=1">1<sup>st</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=2">2<sup>nd</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=3">3<sup>rd</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=4">4<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=5">5<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=6">6<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=7">7<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=8">8<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=9">9<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=10">10<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=11">11<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=12">12<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=13">13<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=14">14<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=15">15<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=16">16<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=17">17<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=18">18<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=19">19<sup>th</sup> Arrondissement</a></li>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=20">20<sup>th</sup> Arrondissement</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white  fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Beauty</a></li>
                        <li><a class="dropdown-item" href="#">Culture</a></li>
                        <li><a class="dropdown-item" href="#">Music</a></li>
                        <li><a class="dropdown-item" href="#">Museums</a></li>
                        <li><a class="dropdown-item" href="#">Sports</a></li>
                        <li><a class="dropdown-item" href="#">Cinema and theatre</a></li>
                        <li><a class="dropdown-item" href="#">Nature</a></li>
                        <li><a class="dropdown-item" href="#">Restaurants</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active titre box fw-bold text-white" href="contact.php">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>






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