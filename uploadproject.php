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
<div class="container" id="mainWrapper">
<div class="uploadProjectWrapper">
<form id="newproject">
  <fieldset>
    <legend>New Project</legend><br>
    <div id="newprojectcontent" class="well">

     <label>Name</label>
     <input type="text" id="name" placeholder="project name">
     <br><br>
     <label>Category</label>
     <select id="projectcategory">
        <option value="standalone" class="selected">Standalone Application</option>
        <option value="web">Web Application</option>
     </select>
     <br><br>
        <label>Project File (Please upload a .zip file)</label>
        <input type="file" accept="application/zip" id="projectfile" placeholder="Choose a zip file">
     <br><br>
     <label>Snapshots</label>
     <input type="file" accept="image/*" id="snapshot1" placeholder="Choose a file">
        <input type="file" accept="image/*" id="snapshot2" placeholder="Choose a file">
        <input type="file" accept="image/*" id="snapshot3" placeholder="Choose a file">    
     <br><br>
        <button class="btn btn-primary" id="uploadproject">Upload</button><br><br><br>
     <div id="alertproject" class="alert alert-danger" style="display:none;">

     </div>
    </div> <!-- End newusercontent div -->
   </fieldset>
</form>
</div> 
</div> <!-- End Container div -->
</body>
<footer> &COPY; Copyright 2012-2013, www.projecttub.com , All rights reserved. </footer>
</html>