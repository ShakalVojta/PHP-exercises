<?php 

require_once('DBBlackbox.php');
require_once('Artist.php');

$artist = new Artist;

$artist->first_name = $_POST['first_name'];
$artist->last_name = $_POST['last_name'];
$artist->year_of_birth = $_POST['year_of_birth'];
$artist->genre = $_POST['genre'];

$id = insert($artist);

echo "Artist is created {$id}";
?>
