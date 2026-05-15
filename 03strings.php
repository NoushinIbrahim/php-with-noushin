<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings in php</title>
</head>
<body>
    <?php
    $str = 'this is a string <br>';
    echo $str;
    $lenn = strlen($str);
    echo '<br>';
    echo 'the length of the string is a '. str_word_count($str);
    echo '<br> reversed string is ' . strrev($str);
    echo '<br> the position of string is ' . strpos($str, 'is');
    echo '<br> the replacement of string is ' . str_replace('is', 'was', $str);
    ?>
</body>
</html>