<?php 
require "functions.php";
?>

<section id="content">
    <div class="container">
        <div class="upload-status">
            <h1>upload status</h1>
            <div class="status-result">
                <?php
                // $targer_dir = "uploads/";
                // $target_file = $targer_dir . basename($_FILES["myFile"]["name"]);
                // $error= 0;
                // $imagesFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                // if (isset($_POST['submit'])) {
                //     $is_image = getimagesize($_FILES["myFile"]["tmp_name"]);
                //     if ($is_image !== false) {
                //         echo 'file ia san image' . $is_image['mime'];
                //       $error = 0;
                //     }else {
                //         $error = 1;
                //     }
                // }

//                if(isset($_POST['submit'])){

//     $target_file = $target_dir . basename($_FILES["myFile"]["name"]);

//     $error = 0;

//     $imagesFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//     $is_image = getimagesize($_FILES["myFile"]["tmp_name"]);

//     if($is_image !== false){
//         echo "File is an image - " . $is_image["mime"];
//         $error = 0;
//     } else {
//         $error = 1;
//     }
// }

if(isset($_POST['submit'])){

    $target_dir = "uploads/";

    $target_file = $target_dir . basename($_FILES["myFile"]["name"]);

    $error = 0;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $is_image = getimagesize($_FILES["myFile"]["tmp_name"]);

    if($is_image !== false){
        echo "File is an image. Type: " . $is_image["mime"];
    } else {
        echo "File is not an image.";
        $error = 1;
    }

};

if (file_exists($target_file)) {
    # code...
    $error=1;
};

if ($_FILES['myFile']['size'] > 500000) {
    # code...
    echo 'file size is to large';
    $error=1;
}

if ($imageFileType = 'jpg' && $imageFileType != 'jpeg' && $imageFileType != 'pnp' && $imageFileType != 'gif') {
    # code...
    $error=1;
    echo 'only jpg,png gif allowed';
};


if ($error ==1) {
    # code...
    echo 'sorry image not upload';
}else{
    if (move_uploaded_file($_FILES['myFile']['tmp_name'], $target_file)) {
        # code...
        echo 'the file ' . basename($_FILES['myFile']['tmp_name']);
    }else {
        'sorry there was an error';
    };
    
}
                ?>
            </div>
        </div>
    </div>
</section>