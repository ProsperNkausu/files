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

    .icon {
        border-radius: 50px;
    }

    .udrive_title {
        font-size: 22px;
        margin: 30px;
    }

    a:hover {
        color: black;

    }
</style>

<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#24160aa1;">
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


        <h2 class="card-text udrive" style="margin-left: 20px; font-size: 40px;"><?php echo $username ?></h2>


        </a>







    </div>
    <div class="container-fluid">
        <div class="card " style="width: 40rem; 
        background:url(../img/1727327223.jpg); 
        background-size:cover;
        background-repeat:no-repeat;
         margin-left: 290px; ">
            <h1 class="card-text udrive_title" style="margin-left: 50px; color:white; font-size:35px;">U-Drive</h1>

            <div class="links " style="margin-top: 145px; display:inline-flex; justify-content:space-between; ">
                <ul class="links">
                    <a href="" style="text-decoration:none; 
            font-size:20px; margin-left:25px; 
            color:white; 
            font-weight:bold; ">Storage ></a>
                </ul>



                <div class="" style="background-color:#3e352e77; box-shadow:0px 0px 1px 1px; padding:7px; align-items:center; margin-right:15px; border-radius:10px; color:white;">
                    <h3 class="text" style=" ">100 MB</h3>
                </div>
                <?php


                ?>
            </div>

        </div>
    </div>
</body>


</html>