<?php
session_start();

// Check if user submitted the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are correct in the database using PHP PDO
    // If login is successful, create session and redirect to loading page
    $_SESSION['username'] = $username;
    $_SESSION['size'] = $size;
    header('Location: user/index.php ');
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U-Drive</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</head>

<!-- internal style -->

<style>
    .custom-style {
        margin: 10px;
    }

    .well {
        margin-top: 220px;
        margin-left: 670px;
    }

    .cet {
        margin-left: 35px;
    }

    body {
        background: url(img/3840x2160-dark-tile_1563221383.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>

    <div class="col-md-6 well  container">
        <div class="fix" style="background-color: #ffffff79; border-radius:20px; padding:35px; width:50%;">
            <div class="cet">
                <h3 class="text" style="font-size:24px; margin-right:20px; font-weight:bold;">Sign in with your U-Drive
                    ID</h3>
                <hr style="border-top:1px dotted #ccc; width:40%;" />
            </div>
            <!-- Link for redirecting page to Registration page -->



            <div class="col">
                <!-- Login Form Starts -->

                <form method="POST" action="">
                    <div class="alert alert-info">Login</div>
                    <div class="form-group">
                        <label style="color:black; font-weight:bold;">Username</label>
                        <input type=" text" name="username" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label style="color:black; font-weight:bold;">Password</label>
                        <input type="password" name="password" class="form-control" required="required" />
                    </div>
                    <?php
                    //checking if the session 'error' is set. Erro session is the message if the 'Username' and 'Password' is not valid.
                    if (isset($_SESSION['error'])) {
                        ?>
                        <!-- Display Login Error message -->
                        <?php echo '<label>Invalid username or password</label>' ?>
                        <?php
                        //Unsetting the 'error' session after displaying the message. 
                        unset($_SESSION['error']);
                    }
                    ?>
                    <div class="custom-style">
                        <a href="signup.php" style="font-size:14px; text-decoration:none; font-weight:bold;">Not a
                            member yet? Register here...</a>
                    </div>

                    <button class="btn btn-primary btn-block" name="login"><span
                            class="glyphicon glyphicon-log-in"></span> Login</button>
                </form>
                <!-- Login Form Ends -->
            </div>
        </div>
    </div>
</body>

</html>