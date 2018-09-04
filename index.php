
<h1>Hello <?= isset($_GET['name']) ? $_GET['name'] : "Guests" ?></h1>

<p>Connection string<?= $_ENV['MYSQLCONNSTR_localdb'] ?></p>

