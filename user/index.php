<?php
session_start();
include('../conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin-left:450px">
        <div class=" row ">
            <div class="col-md-8 ">
                <div class="card " style="margin-top:150px ; box-shadow:0px 0px 7px 1px; ">
                    <div class="card-header">
                        <h3>retriving infor from the database</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>username</th>
                                    <th>upload</th>
                                    <th>size</th>
                                    <th>Remaining size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $query = "SELECT * FROM users";
                                    $statement = $pdo->prepare($query);
                                    $statement->execute();

                                    $statement->setFetchMode(PDO::FETCH_OBJ);
                                    $result = $statement->fetchAll();
                                    if ($result) {

                                        foreach ($result as $row) {

                                    ?>
                                <tr>
                                    <td><?= $row->id ?></td>
                                    <td><?= $row->username ?></td>
                                    <td><?= $row->uploads ?></td>
                                    <td><?= $row->size ?>MB</td>
                                    <td><?= $row->remainingsize ?></td>


                                </tr>
                            <?php

                                        }
                                    } else {
                            ?>

                            <tr>
                                <td colspan="6">no recode found</td>
                            </tr>
                        <?php
                                    }
                        ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>