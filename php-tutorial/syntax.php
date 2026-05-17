<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
</body>
</html>
<?php

//this statment woll print some text on the screen
echo 'this is single line comment';
echo '<br> br add line break';
/*  multiline commnet*/ 


//veriables in php
/* veribale start with $ sign like $count

veriable name must start with letter or undescore
veriable name cannot start with number or special character
veriable name are case-sensitive captain or CAPTIAN both are different veriables
*/

$count = 0;
$student_name= 'noushin';

echo $student_name, $count; //in echo we can print multiple veriables
print $count; //in print we can only print one value

echo '<br> student name: '.$student_name;


//data types in php

/*
string = 'hello'
integer= 100, -100
float = 10.5, -10.2
boolean = true or false
array = array('volvo', 'bmw', )
object = 
null =  null
resource = 
*/

$string = 'hello world';
var_dump($string); //show the data type

$interger = 10;
var_dump($interger);

$float = 10.2;
var_dump($float);

$boolean = true;
var_dump($boolean);

$array = array("briyani", "juice", "icecream");
var_dump($array);

//object
class Car{
    function car(){
        echo 'this is obj';
    }
}

$object = new car();

$str = NULL;
var_dump($str);

?>
