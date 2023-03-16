<?php
session_start();
include '../conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<style>
    .card {

        height: 35vh;
        margin-right: 100px;
        border-radius: 35px;

    }

    .row a {
        text-decoration: none;
    }

    .profile {
        height: 12vh;
        border-radius: 70px;
        margin-top: 30px;

    }

    .settings {
        height: 30px;
        border-radius: 70px;

    }

    .card-text {
        margin-top: 20px;
        color: black;
        font-weight: bold;
        font-size: 40;
    }

    .em {
        color: rgba(0, 0, 0, 0.587);
    }

    .udrive {
        font-size: 22px;
    }

    .card {
        margin-left: 50px;
    }

    .link a:hover {
        color: green;
    }
</style>

<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgba(192, 191, 191, 0.261);">
        <div class="container-fluid">
            <a class="navbar-brand" href="../user/index.php">U-Drive</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">icon notify</a>
                    </li>
                    <li class="nav-item link">
                        <a class="nav-link " href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            <img src="../img/IMG_0112.JPG" class="settings">
                        </a>
                        <ul class=" dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- second nav link -->
    <!-- Nav tabs -->

    <div class="container py-5">

        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Your U-Drive Storage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="settings.php">Settings</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <?php
        $query = "SELECT * FROM users";
        $statement = $pdo->prepare($query);
        $statement->execute();

        $statement->setFetchMode(PDO::FETCH_OBJ);
        $result = $statement->fetchAll();
        if ($result) {

            foreach ($result as $row) {

        ?>
                <h2 class="card-text udrive" style="margin-left: 20px; font-size: 40px;"><?= $row->username ?></h2>


                </a>
        <?php

            }
        } ?>






    </div>
    <div class="container-fluid">
        <div class="card " style="width: 40rem; background:rgba(100, 100, 100, 0.484); margin-left: 290px; ">


        </div>
    </div>
</body>


</html>