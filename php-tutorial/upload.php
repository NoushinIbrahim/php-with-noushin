<?php require 'functions.php';


?>
<search id="content">
    <div class="container">
        <div class="upload-form">
            <h1>php file upload</h1>
            <form action="process.php" method='post' enctype="multipart/form-data">
                <label for="fuile">select image</label>
                <input type="file" name="myfile" id="myFile">
                <input type="submit" value="upload image" name="submit" class="submit-btn">
            </form>
        </div>
    </div>
</search>