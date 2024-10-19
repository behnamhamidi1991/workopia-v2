<?php 

$config = require basePath('config/db.php');
$db = new Database($config);

$id = $_GET['id'] ?? '';

inspect($id);

$listing = $db->query('SELECT * FROM listings WHERE id = ' . $id)->fetch();



loadView('listings/show');