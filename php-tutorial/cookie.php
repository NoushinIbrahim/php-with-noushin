<?php
$cookie_name = 'last_visit';
$cookie_value = date('D-M-Y h:i:s');


// setcookie($cookie_name, $cookie_value, time() + (86400 *30), '/');


// set cookie
if (isset($_COOKIE['last_visit'])) {
    # code...
    echo 'your last visit the webiste'.$_COOKIE['last_visit'];
}else {
 setcookie($cookie_name, $cookie_value, time() + (86400 *30), '/');

};




//inset cookie delete cookie
 setcookie($cookie_name, $cookie_value, time() + -3600);


?>