<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'worker1');
define('DB_PASSWORD', 'qwerty');
define('DB_NAME', 'data');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>