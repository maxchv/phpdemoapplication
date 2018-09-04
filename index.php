<h1>Hello <?= isset($_GET['name']) ? $_GET['name'] : "Guests" ?></h1>

<p>Connection string<?= $_ENV['MYSQLCONNSTR_localdb'] ?></p>

<?php
try {
    $db = new PDO("mysql:host=localhost", "azure", "");
} catch (PDOException $ex) {
    echo $ex->getMessage();
}


