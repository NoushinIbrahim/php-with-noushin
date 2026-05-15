<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            background-color: black;
            color: white;
            padding: 20px;
            height: 100vh;
            margin: 0px;
           

            
        }
    </style>
    
    <div class="container">
        <h1>lets learn php</h1>
        <?php
        $age = 7;

        if ($age > 18 ) {
            echo 'you can go to party';
        }
        else if($age ==7){
            echo 'you can eat briyani at home';
        }
        else{
           echo 'stay at home';
            
        };
        echo '<br>';

//arrays in php
        $languages = array("java", "javascript", "html");
        // echo count ($languages); //ho many items we have
        echo  $languages[0]; //ho many items we have

        //loops in php
        $a = 0;
        // while ($a <= 10) {
        //     echo 'value of a os';
        //     echo $a;
           
        // }

        ?>
    </div>

</body>
</html>