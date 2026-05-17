<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    $string = 'this is a string that contains some information <br>';

    echo strlen($string); //string length
    //count wordds
    echo str_word_count($string);

    //reverse a string
    echo strrev($string);

    //search for a text
    echo strpos($string, 'some <br>');

    echo str_replace('some', 'data', $string);


    /*numeric functions */
    echo '<br>';

    $num = 034;
    $float = 102.2;
    $string_number = '232';

    //is integer
    // var_dump(is_int($float));

    //is float
    // var_dump(is_float($float));

    //is number
    var_dump(is_numeric($string_number));


    //casting string and floats to integer
    $int_cast = (int)$float;
    var_dump($int_cast);

?>
</body>
</html>