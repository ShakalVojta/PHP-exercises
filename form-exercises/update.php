<?php
require_once('DBBlackbox.php');
require_once('Artist.php');

$id = $_GET['id'] ?? null;

if (!$id) {
    die("Error Processing Request");   
}

$artist = find($id, 'artist');

$artist->first_name = $_POST['first_name'];
$artist->last_name = $_POST['last_name'];
$artist->year_of_birth = $_POST['year_of_birth'];
$artist->genre = $_POST['genre'];

update($id, $artist);