<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>CRUD APP PHP</title>
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="addNewUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add new User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="add-user-form" class="p-2" novalidate>
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <input type="text" name="fname" class="form-control form-control-lg" placeholder="first name" required>
                            <div class="invalid-feedback">required</div>
                        </div>
                        <div class="col">
                            <input type="text" name="lname" class="form-control form-control-lg" placeholder="last name" required>
                            <div class="invalid-feedback">required</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="E-mail" required>
                        <div class="invalid-feedback">required</div>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="phone" class="form-control form-control-lg" placeholder="phone" required>
                        <div class="invalid-feedback">required</div>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary btn-lg" id="add-user-btn" value="send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="edit-user-form" class="p-2" novalidate>
                    <input type="hidden" name="id" id="id">
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <input type="text" name="fname" id="fname" class="form-control form-control-lg" placeholder="first name" required>
                            <div class="invalid-feedback">required</div>
                        </div>
                        <div class="col">
                            <input type="text" name="lname" id="lname" class="form-control form-control-lg" placeholder="last name" required>
                            <div class="invalid-feedback">required</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="E-mail" required>
                        <div class="invalid-feedback">required</div>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="phone" id="phone" class="form-control form-control-lg" placeholder="phone" required>
                        <div class="invalid-feedback">required</div>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success btn-lg" id="edit-user-btn" value="send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <div>
                <h4 class="text-primary"> all users </h4>
            </div>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewUser">
                    Add New
                </button>
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-log-12">
            <div id="showAlert"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th> first name</th>
                        <th> last name</th>
                        <th> E-mail</th>
                        <th> phone</th>
                        <th> Action</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>