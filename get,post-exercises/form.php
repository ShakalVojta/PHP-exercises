<?
echo "Here is the form!";
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<?php
    foreach ($items as $i => $text) {
        echo "<p>Item $i: $text</p>";
        echo '<label for="item' . htmlspecialchars($i) . '">Item:</label>';
        echo '<input type="text" id="item' . htmlspecialchars($i) . '" name="items[' . htmlspecialchars($i) . ']" value="' . htmlspecialchars($text) . '">';
    }
    $numberOfItems = count($items);
    echo '<label for="item">Item:</label>';
    echo '<input type="text" id="item" name="items[' . htmlspecialchars($numberOfItems) . ']" value="">';
    ?>
    <label for="item">Item:</label>
    <input type="text" id="item" name="items[0]" value="">
    
    <input type="submit" name="submit" value="Add">
</form>
