<?php

$count = 10;

if ($count==20 ) {
    echo 'allow';
}else {echo ' <br> not ALLOW';};

if (($count==20) && ($count ==10) ) {
    echo 'allow';
}else {echo '<br> not ALLOW';};


if (($count==20) || ($count ==10) ) {
    echo ' <br> allow';
}else {echo '<br> not ALLOW';};

if ($count!=20  ) {
    echo ' <br> allow <br>';
}else {echo '<br> not ALLOW <br>';};

$email = 'someone@gmail.com';
$color = 'red';

if ($color == 'blue') {
    echo 'the color is blue';
}elseif ($color == 'red') {
    echo 'the color is red <br>';
}elseif ($color == 'black') {
   echo 'the color is black';
}else{
    echo 'not available';
}

switch ($color) {
    case 'black':
        echo 'color is black';
        break;
    
    case 'red':
        echo 'color is red';
        break;
    
    default:
        echo ' not available ';
        break;
}


?>

