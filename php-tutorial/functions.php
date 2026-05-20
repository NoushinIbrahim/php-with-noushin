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

$products = array(
    array(1,'galaxy s10', 10, 799),
    array(2,'<br> iphone 11', 20, 799),
    array(3, 'nokia 6.2', 10, 499),

);

echo $products[1][0]. 's price is $'.$products[1][2];

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
    <table>
        <thead>
            <tr>name</tr>
            <tr>phone</tr>
        </thead>
        <tbody>
            <?php
            foreach ($person as $x => $y) {
                echo '<tr><td>'.$x . "</td><td>" .$y . '</td><tr>';
            }
            ?>
        </tbody>
    </table>
    <h2><br>prodcuts array <br></h2>
    <table>
        <thead>
            <tr>

                <th>id</th>
                <th>prodcut name</tr>
                <th>stock</tr>
                <th>price</tr>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $row) {
                echo '<tr>';
                    foreach($row as $col){
                        echo '<td>' .$col. '</td';
                    }
                echo '</tr>'
            }
            ?>
        </tbody>
    </table>
</body>
</html>


