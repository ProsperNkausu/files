<?php 
    $pdo = new pdo("mysql:host=localhost;port=3306;dbname=files", "root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>