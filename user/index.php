<?php
session_start();
include '../conn.php';
// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Retrieve the username from the session
    $username = $_SESSION['username'];

    // Display the username on the page

} else {
    // Redirect the user to the login page if they're not logged in
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U-Drive</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<style>
    body {
        background-image: url(../img/blue-lint-abstract-8k-5120x2880.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .card {

        height: 35vh;
        background: url(../img/10896733.jpg);
        background-size: cover;
        background-repeat: no-repeat;
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

    .dropdown {
        margin-right: 20px;
    }

    .dropdown-menu {
        margin-right: 20px;
    }

    .icon {
        border-radius: 50px;
    }
</style>

<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgba(100, 100, 100, 0.558);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">U-Drive</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">icon notify</a>
                    </li>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../img/IMG_0112.JPG" alt="Image Icon" class="icon" width="35" height="35">
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../settings/settings.php">Settings</a>
                            <a class="dropdown-item" href="../index.php">Logout</a>
                        </div>
                    </div>

                </ul>
            </div>
        </div>
    </nav>

    <!-- main content -->


    <div class="container" style="margin-left:450px">
        <div class=" row " style="margin-top: 150px;">

            <div class="card" style="width: 24rem;">


                <a href="../settings/settings.php">
                    <div class="card-body">
                        <img src="../img/IMG_0112.JPG" class="profile">
                       
                                <h2 class="card-text"><?php echo $username ?></h2>
                                <p class="em">
                           
                                </p>
                                <h2 class="card-text udrive">U-Drive</h2>

                    </div>
                </a>

            </div>

            <!-- uploads  -->
            <div class="card" style="width: 40rem; background:rgba(100, 100, 100, 0.484);">


            </div>

        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</html>