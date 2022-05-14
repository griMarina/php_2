<?php 
define('DB_DRIVER','mysql');
define('DB_HOST','localhost');
define('DB_PORT', '8889');
define('DB_NAME','test');
define('DB_USER','marina');
define('DB_PASS','1111');
 
$connect_str = DB_DRIVER . ':host='. DB_HOST .';dbname=' . DB_NAME;
$db = new PDO($connect_str,DB_USER,DB_PASS);
 
$error_array = $db->errorInfo();
 
if($db->errorCode() != 0000) {
    echo "SQL ошибка: " . $error_array[2] . '<br />';
}