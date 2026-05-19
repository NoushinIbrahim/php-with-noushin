<?php
declare(strict_types=1);

$number = rand(1, 1000);

echo $number .'<br>';

$date = date('D M Y');
echo '<br>'. $date;

function site_title($custom='') {

if ($custom == '') {
    echo 'user defined function';
}else{

    echo $custom.' <br> user defined functions <br>';
}

}

site_title();



function sum(int $value1, int $value2){
    return'<br>'. $value1 + $value2 ;
}

echo sum(6,3)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$brands = array('samsung', 'iphone', 'nokia', 'xyz'); //
// $phones[10] = 'galaxy s10';
// $phones[10] = 'galaxy s25';  index array
// $phones[10] = 'galaxy s20';

//associative array 
$person = array('zoii' => '<br>32423', 'zunair'=>'34');
echo $person['zoii'];

echo '<br>'. $brands[0];

foreach($brands as $value) {
    echo '<br>' . $value .'<br>';
}
?>
    <h2>brands</h2>

    <ul>
        <?php
        foreach($brands as $names){
            echo '<li>' . $names .'</li>';
        }
        ?>
    </ul>
</body>
</html>


