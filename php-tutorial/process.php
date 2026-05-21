<?php 
require "functions.php";
?>

<section id="content">
    <div class="container">
        <div class="upload-status">
            <h1>upload status</h1>
            <div class="status-result">
                <?php
                $targer_dir = "uploads/";
                $target_file = $targer_dir . basename($_FILES["myFile"]["name"]);
                $error= 0;
                $imagesFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                ?>
            </div>
        </div>
    </div>
</section>