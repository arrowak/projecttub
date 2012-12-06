<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$name = $_POST["txtname"];
$email = $_POST["txtemailid"];
$password = $_POST["txtpassword"];
$college = $_POST["txtcollege"];
$course = $_POST["txtcourse"];
$year = $_POST["txtyear"];

try {
include 'connectDB.php';
$statement = "INSERT INTO users (name,emailid,password,college,course,year) VALUES ('$name','$email','$password','$college','$course','$year')";

$result = mysql_query($statement);

if($result){
    echo '<string> Congratulations! </strong>Registration succeeded. You can now login to your profile.';
}
else
{
    echo '<strong>Oops! </strong>Our database is down. Please try later.';
}
}
 catch (Exception $ex){
     echo 'Cannot connect to database. Error :'.$ex;
 }

 
?>
