<header class=" paris bg-light ">
    <div class="py-5">
        <a href="home.php" class="text-decoration-none">
            <p class="text-center titleMain py-5 bw-bold fs-1">It's always better when it's free</p>
        </a>
    </div>
</header>

<!-- nav computer  -->
<nav class="d-lg-block d-none navbar sticky-top navcomputer navbar-expand-lg shadow-5-strong py-2 navigation">
    <!-- <a class="navbar-brand " href="#"></a> -->
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav  w-100 justify-content-center nav d-flex">
            <li class="nav-item d-flex">
                <a href="home.php" class="nav-link fw-bold text-black me-5">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active titre box fw-bold text-black me-5" href="news.php">News</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black  fw-bold me-5" href=id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="arrondissements.php">
                    Arrondissements
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php foreach ($allTagsArrArray as $value) { ?>
                        <li><a class="dropdown-item" href="arrondissements.php?choice=<?= $value['tag_arr_id'] ?>"><?= $value['tag_arr_name'] ?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black  fw-bold me-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <?php foreach ($allTagsCategoryArray as $value) { ?>
                        <li><a class="dropdown-item " href="categories.php?category=<?= $value['tag_categories_name'] ?>"><?= $value['tag_categories_name'] ?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link active titre box fw-bold text-black" href="contact.php">Contact us</a>
            </li>
        </ul>
    </div>
</nav>


<!-- navbar mobile -->

<header class="d-lg-none d-block">
    <nav class="navbar fixed-bottom navbar-expand-lg navigationMobile shadow-5-strong py-2">
        <div class="container-fluid">
            <!-- <a class="navbar-brand me-5 pe-5 text-light" href="home.php"><a class="navbar-brand text-light" href="home.php">Home</a></a> -->
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupported" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupported">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
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

                            <?php foreach ($allTagsArrArray as $value) { ?>
                                <li><a class="dropdown-item" href="arrondissements.php?choice=1"><?= $value['tag_arr_name'] ?></li>
                            <?php } ?>
                        </ul>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white  fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="categories.php?choice=beauty">Beauty</a></li>
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
        </div>
    </nav>
</header>