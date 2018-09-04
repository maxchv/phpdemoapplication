<h1>Hello <?= isset($_GET['name']) ? $_GET['name'] : "Guests" ?></h1>

<p>Connection string<?= $_SERVER['MYSQLCONNSTR_localdb'] ?></p>

<?php
try {
    $db = new PDO("mysql:host=localhost;port=54386", "azure", "6#vWHD_$");
    echo "Connected";
} catch (PDOException $ex) {
    echo $ex->getMessage();
}


