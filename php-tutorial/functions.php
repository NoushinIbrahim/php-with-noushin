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
    site_title()
?>
    
</body>
</html>


