<?php
$server = "localhost:3306";
$username = "root";
$pass = "admin";
$database = "projecttub";

try {
    $con = mysql_connect($server, $username, $pass);
    mysql_select_db($database); 
}
 catch (Exception $ex){
     echo 'Cannot connect to database. Error :'.$ex;
 }

?>
