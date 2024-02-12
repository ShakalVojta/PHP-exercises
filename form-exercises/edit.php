<?php

require_once('DBBlackbox.php');
require_once('Artist.php');

$id = $_GET['id'] ?? null;

if (!$id) {
    die("Error Processing Request");
}

$artist = find($id, 'Artist');

if (!$artist) {
    die("Error Processing Request");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Please enter information</h1>
    <form action="update.php?id=<?=$artist->id?>" method="post">

        First Name:
        <br />
        <input type="text" name="first_name" value="<?= htmlspecialchars((string)$artist->first_name) ?>">
        <br />
        Last Name:
        <br />
        <input type="text" name="last_name" value="<?= htmlspecialchars((string)$artist->last_name) ?>">
        <br />
        Year of birth:
        <br />
        <input type="date" name="year_of_birth" value="<?= htmlspecialchars((string)$artist->year_of_birth) ?>">
        <br />
        Genre:
        <br />
        <input type="text" name="genre" value="<?= htmlspecialchars((string)$artist->genre) ?>">
        <br />
        <br>

        <button type="submit">Save</button>
    </form>
</body>

</html>