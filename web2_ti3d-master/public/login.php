<?php
require_once '../config/fungsi.php';
require_once 'config/koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5>Form login</h5>
                        <form action="ceklogin.php" method="POST">
                            <div class="mb-2">
                                <label for="" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukan Username" autocomplete="off" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukan Password" autocomplete="off" required>
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>