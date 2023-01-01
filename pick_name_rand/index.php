<?php
/**
 * @var TYPE_NAME $conn
 * @var TYPE_NAME $errors
 * @var TYPE_NAME $firstName
 * @var TYPE_NAME $lastName
 * @var TYPE_NAME $email
 * @var TYPE_NAME $result
 * @var TYPE_NAME $users
 */

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/Style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">write your name</h1>
                <p class="lead fw-normal">write all names to shuffle and get the lucky one :)</p>
                <h2 id="countdown"></h2>
            </div>
        </div>
        <div class="position-relative text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <h3>just type the names</h3>
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" name="firstName" class="form-control" id="firstName" value="<?= $firstName ?>" >
                <div class="form-text error"><?= $errors['firstNameError'] ?></div>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" name="lastName" class="form-control" id="lastName" value="<?= $lastName ?>">
                <div class="form-text error"><?= $errors['lastNameError'] ?></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text" name="email" class="form-control" id="email"  value="<?= $email ?>">
                <div class="form-text error"><?= $errors['emailError'] ?></div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Send</button>
        </form>
            </div>
        </div>

        <div class="loader-container">
            <div id="loader">
                <canvas id="circularLoader" width="200" height="200"></canvas>
            </div>
        </div>

        <!-- Button trigger modal -->
        <div class="d-grid gap-2 col-6 mx-auto my-5">
            <button type="button" id="winner" class="btn btn-primary">
                pick one
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">you picked</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php foreach ($users as $user) : ?>
                            <h5 class="text-center display-3 modal-title"><?= htmlspecialchars($user['firstName'])
                                . ' ' . htmlspecialchars($user['lastName']) ?></h5>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/loader.js"></script>
<script src="./js/script.js"></script>
</body>
</html>