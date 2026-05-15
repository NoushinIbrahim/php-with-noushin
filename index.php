<?php
if (isset($_POST['name'])) {
    
    $server = 'localhost';
    $username = 'root';
    $password = '';

    $con = mysqli_connect($server, $username, $password);

    if ( !$con ) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['other'];

  $sql = "INSERT INTO `trim_form` . `trip`
(`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
VALUES
('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";


if ($con ->query($sql) == true) {
    // echo "Successfully inserted";
}
else {
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcom to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>welcom to iit karachi us trip form</h3>
        <p>enter your details to conform your participation in the trip</p>
        
      

        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="email">
            <input type="phone" name="phone" id="phone" placeholder="phone">
            <textarea name="desc" id="desc">send your message</textarea>
            <button class="btn">submit</button>
            <button class="btn">reset</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
