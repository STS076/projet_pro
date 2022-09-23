<?php
session_start();
require_once '../controllers/allComments-controller.php';
// var_dump($_POST);
// var_dump($allComments);

?>
<?php include '../elements/top.php' ?>


<body class="mx-auto min-vh-100 backgroundAdmin p-0 shadow-lg container justify-content-center">
    <?php include '../elements/header.php' ?>
    <div class="container bienvenue d-flex align-items-center flex-column  my-5 p-5  bg-light shadow">


        <div class="d-flex justify-content-start">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for an user ..." class="px-5 my-2 shadow-sm myInput">
        </div>

        <div class="col-lg-10 col-11 text-center ">
            <div class="table-responsive table-hover">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center">User</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Deal</th>
                            <!-- <th class="text-center">Comment</th> -->
                            <th class="text-center">Rating</th>
                            <th class="text-center">More Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($allComments as $value) {

                        ?>
                            <tr>
                                <td class="text-center"><?= $value['users_username'] ?></td>
                                <td class="text-center"><?= $value['comments_date'] ?></td>
                                <td class="text-center"><?= $value['deals_title'] ?></td>
                                <!-- <td class="text-center text-truncate" style="max-width: 100px;"><?= $value['comments_comment'] ?></td> -->
                                <td class="text-center text-truncate" style="max-width: 100px;"><?= $value['comments_rating'] ?></td>
                                <td class="text-center"><a class="text-light btn bouton" href="infoComments.php?info=<?= $value['comments_id'] ?>"> + d'info</a></td>
                            </tr>
                            <div class="modal fade" id="comments-<?= $value['comments_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="modal-title fs-4" id="exampleModalLabel"><?= $value['comments_id'] ?> </p>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            do you want to delete this comment ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                            <form action="" method="POST">
                                                <button class="btn btn-primary" name="delete" value="<?= $value['comments_id'] ?> ">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-5">
                <a class="text-decoration-none" href="dashboard-comments.php">
                    <button class="btn text-white bg-info">back</button>
                </a>
            </div>
        </div>
    </div>

    <?php include '../elements/footer.php' ?>
    <script src="../assets/script/filterImages.js"></script>

</body>

</html>