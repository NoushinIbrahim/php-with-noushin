<?php

//while loop

$i = 1;

while ($i <=5){ //if condiotion is true then code will be execued
    echo 'this number is  '.$i. '<br>';
    $i++;
}

do {
    echo 'this is do while'.$i.'<br>';
    $i++;
} while ($i <= 5);

for ($i=1; $i <=10 ; $i+=2) { 
    echo '<br>this is for loop'.$i;
}


//only for array foreach loop

$colors =  array ('red', 'green', 'pink', 'black');

foreach($colors as $value){
    echo '<br> for each loop this is color'.$value;
}



?>




