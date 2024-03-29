<header class="paris bg-light ">
    <div class="py-5">
        <a href="home.php" class="text-decoration-none">
            <p class="text-center titleMain py-2 bw-bold fs-1 ms-5">Paris For Free</p>
        </a>
    </div>
</header>

<!-- nav computer  -->
<nav class="d-lg-block d-none navbar sticky-top navcomputer navbar-expand-lg shadow-5-strong py-1 shadow navigation ">
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupported" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav  w-100 justify-content-evenly nav d-flex">
            <li class="nav-item d-flex">
                <a href="home.php" class="nav-link fw-bold text-white ">Home</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link active titre box fw-bold text-white " href="news.php">News</a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link active titre box fw-bold text-white " href="allArrondissements.php">Arrondissements</a>
            </li>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white  fw-bold " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <?php foreach ($allTagsCategoryArray as $value) { ?>
                        <li><a class="dropdown-item " href="categories.php?category=<?= $value['tag_categories_id'] ?>"><?= $value['tag_categories_name'] ?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link active titre box fw-bold text-white " href="contact.php">Contact us</a>
            </li>
            <li class="nav-item">
                <?php if (!isset($_SESSION['user'])) { ?>
                    <a class="nav-link active titre box fw-bold text-white " href="loginAdmin.php">
                        <i class="bi bi-person-circle me-2"></i>Login
                    </a>
                <?php } else { ?>
                    <a class="nav-link active titre box fw-bold text-white " href="dashboard.php">
                        <i class="bi bi-person-circle me-2"></i><?= $_SESSION['user']['users_username'] ?>
                    </a>
                <?php } ?>
            </li>
            <?php if (isset($_SESSION['user'])) { ?>
                <li class="nav-item">
                    <a class="nav-link active titre box fw-bold text-white" href="logout.php">
                        <i class="bi bi-box-arrow-left me-2"></i>Log Out
                    </a>
                </li>
            <?php } ?>
            <?php if (!isset($_SESSION['user'])) { ?>
                <li class="nav-item">
                    <a class="nav-link active titre box fw-bold text-white" href="signUp.php">
                        Sign Up
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>


<!-- navbar mobile -->


<nav class="navbar sticky-top navbar-expand-lg navigationMobile shadow-5-strong py-2 d-lg-none d-block">
    <div class="container-fluid">
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupported" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupported">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item d-flex">
                    <a href="home.php" class="nav-link fw-bold text-white">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active titre box fw-bold text-white " href="allArrondissements.php">Arrondissements</a>
                </li>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white  fw-bold " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <?php foreach ($allTagsCategoryArray as $value) { ?>
                            <li><a class="dropdown-item " href="categories.php?category=<?= $value['tag_categories_id'] ?>"><?= $value['tag_categories_name'] ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active titre box fw-bold text-white " href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <?php if (!isset($_SESSION['user'])) { ?>
                        <a class="nav-link active titre box fw-bold text-white " href="loginAdmin.php">
                            <i class="bi bi-person-circle me-2"></i>Login
                        </a>
                    <?php } else { ?>
                        <a class="nav-link active titre box fw-bold text-white " href="dashboard.php">
                            <i class="bi bi-person-circle me-2"></i><?= $_SESSION['user']['users_username'] ?>
                        </a>
                    <?php } ?>
                </li>
                <?php if (isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link active titre box fw-bold text-white" href="logout.php">
                            <i class="bi bi-box-arrow-left me-2"></i>Log Out
                        </a>
                    </li>
                <?php } ?>
                <?php if (!isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link active titre box fw-bold text-white" href="signUp.php">
                            Sign Up
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>