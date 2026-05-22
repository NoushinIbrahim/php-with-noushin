<?php

session_start();

$_SESSION['user_id']= '1';
$_SESSION['user_name']= ' zubair';

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    # code...
    echo 'welcome back' . $_SESSION['user_name'];
}



?>