<?php
session_start();
require_once("./conn.php");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['log_in'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user1 = $pdo->prepare("SELECT * FROM users WHERE username= '$username'");
    $user1->execute();
    $user = $user1->fetchAll(PDO::FETCH_ASSOC);
    foreach($user as $u){
        $db_name = $u['username'];
        $db_pas = $u['password'];

    if($username === $db_name && $password === $db_pas){
        $_SESSION['username'] = $db_name;
        $_SESSION['password'] = $db_pas;
        header('Location: ./user/index.php');
    }else{
        echo "wrong password";
    }
    }

}
}
?>

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
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 250px;">
            <h3 class="text-center">login</h3>
            <form action="" class="form" style="width: 40%;" method="POST">
                <div class="form-floating mb-3">
                    <label for="floatingInput">Username</label>
                    <input type="name" name="username" class="form-control" id="floatingInput" placeholder="enter username">
                    
                </div>
                <div class="form-floating">
                    <label for="floatingPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">

                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3 py-2 p-5 mt-3" style="margin-left: 180px;" name="log_in">Log in</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>