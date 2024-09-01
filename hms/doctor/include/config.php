<?php
define('DB_SERVER','localhost');
define('DB_USER','u642157280_clinicas');
define('DB_PASS' ,'a$Al^S:U0');
define('DB_NAME', 'u642157280_clinicas');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
