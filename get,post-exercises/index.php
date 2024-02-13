<?php
    $page_title = 'Shopping list';
    $page = 'home';
    $items = [];

    if (!empty($_POST['items'])) {
        var_dump($_POST);
        $items = $_POST['items'];
        echo "<p>Items added: " . implode(", ", $items) . "</p>";
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
    <h1><?php echo "{$page_title}"?></h1>
    <?php 
    var_dump($_GET);
    var_dump($page);
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        include'home.php';
        echo "<p>Is set. Value of GET is {$page}</p>";
    } else {
        echo "<p>Not set</p>";
    }
    if ($page === 'form') {
        include'./form.php';
        echo "<p>Form is included</p>";
    }
    ?>
    <nav>
    <a href="?page=home">Home</a>
    <a href="?page=form">Form</a>
</nav>

</body>
</html>