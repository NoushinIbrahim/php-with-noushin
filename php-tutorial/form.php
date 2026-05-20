<?php
/*
form
*/



$name = $email = $website = $gender = $country = $text = '';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = clean_input($_POST['name']);
    $email = clean_input($_POST['email']);
    $website = clean_input($_POST['website']);
    $gender = clean_input($_POST['gender']);
    $country = clean_input($_POST['country']);
    $text = clean_input($_POST['text']);

    function clean_input($field){
        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;
       
    }
    if (isset($name) && $name !="" && isset($email) && $email !="" && isset($gender) && $gender !="" && isset($country) && $country !="0") {
        echo 'hello '. $name;
       
    }

    // echo 'hola' . $name;


}

// $name= $_POST['name'];



// echo 'hello '. $name;



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="wrap"> 
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="signup-form">  <!-- in get method data is visible in url and in post method data is not visible in url and when we use php_self echo must use htmlspecialchars and no need to use when u use external file !-->
            <div class="form-row">
                <input type="text" name="name *" placeholder=" full name">
            </div>
            <div class="form-row">
                <input type="text" name="email *" placeholder="email">
            </div>
            <div class="form-row">
                <input type="text" name="website" placeholder="website">
            </div>
            <div class="form-row gender-row">
                <span class="field-label">select gender</span>
                <label class="radio-option">
                    <input type="radio" name="gender" value="male">
                    male
                </label>
                <label class="radio-option">
                    <input type="radio" name="gender" value="female">
                    female
                </label>
            </div>
            <div class="form-row">
                <select name="country">
                    <option value="0">select country</option>
                    <option value="pk">pakistan</option>
                    <option value="in">india</option>
                </select>
            </div>
            <div class="form-row">
                <textarea name="text" id="" placeholder="enter your message"></textarea>
                
            </div>
            <button>submit</button>
            <button>reset</button>
        </form>
    </div>
</body>
</html>