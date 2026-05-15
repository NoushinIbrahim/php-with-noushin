<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Website</h1>
        <p>This is a simple paragraph.</p>
        <?php echo 'this is a php code'; 
        define ('pi', 3);
        //secret algorithm
        $veriable1 = `this is a string`;
        $veriable2 = 12345;

        echo $veriable2;

        //operators in php
        //arithmetic operators
        echo "<br>";
        echo "the value of veriable1 + veriable2";
        echo "<br>";
        //assignment operators
        $veriable3 = 5;
        $newVar = $veriable3;
        echo 'newVar';
        echo "<br>";

        //comparison operators
        echo "the value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "the value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "the value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "the value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        //increment/decrenment operators
        //logical operator
        //and (&&)
        //or (||)
        // xor
        // not (!)
        // $myVar =  (true and true) //both true
        $myVar =  (true xor true); //falss

        // echo var_dump($myVar);


        echo"<br>";
        echo $veriable1 + $veriable2;
        
        ?>
        <?php
        //data types in php
        //string
        //integer
        //float
        //boolean
        //array
        //object
        echo 'data types <br>';
        $var = 'this is a string';
        echo var_dump($var);
        echo "<br>";

        $var = 89;
        echo var_dump($var);
        echo "<br>";

        $var = 89.9;
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";

        echo pi;
        ?>

    </div>
</body>
</html>