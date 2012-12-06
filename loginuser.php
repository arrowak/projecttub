<?php
session_start();
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$email = $_POST["txtemailid"];
$password = $_POST["txtpassword"];

try {
include 'connectDB.php';
$statement = "SELECT * FROM users WHERE emailid = '$email' AND password = '$password'";

$result = mysql_query($statement);

if(mysql_fetch_object($result)){
    $_SESSION['username'] = $email;
    
    echo '1';       
}
else
{
    echo '0';
}
}
 catch (Exception $ex){
     echo 'Cannot connect to database. Error :'.$ex;
 }

?>
