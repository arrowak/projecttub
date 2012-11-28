<?php
    session_start();
    
    if(isset($_SESSION['username'])){
        header("http://localhost/projecttub/uploadproject.php");
    }
?>

<html>
<head>
<title> Project Tub </title>
<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
<link rel = "stylesheet" type = "text/css" href = "css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/projecttub.js"></script>
</head>
<header>
<img src="./img/banner.png" alt="Banner">
<?php include 'menubar.php'?>
</header>

<body>
<div class="row-fluid" id="mainWrapper">
  <div class="span12">
    <div class="row-fluid">
      <div class="span4" id="registerWrapper"><?php include 'newuser.php'?></div>
      <div class="span3" id="tubiconWrapper"><img src="./img/tub.png" alt="Tub Icon"></div>
      <div class="span3 alert alert-info" id="loginWrapper"><?php include 'login.php'?></div>
    </div>
  </div>
</div>
</body>
<footer> &COPY; Copyright 2012-2013, www.projecttub.com , All rights reserved. </footer>
</html>
