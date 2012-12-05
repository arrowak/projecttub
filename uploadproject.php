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
      <div id="uploadProjectLeft" class="span4">
     <label><span style="color:red;"><sup>* </sup></span>Name</label>
     <input type="text" id="name" placeholder="project name">
     <br><br>
     <label>Category</label>
     <select id="projectcategory">
        <option value="standalone" class="selected">Standalone Application</option>
        <option value="web">Web Application</option>
     </select>
     <br><br>
        <label><span style="color:red;"><sup>* </sup></span>Project File (.zip)</label>
        <input type="file" accept="application/zip" id="projectfile" value="Choose a zip file" placeholder="Choose a zip file">
     </div> <!-- End UploadProjectLeft div -->
     <div id="uploadProjectCenter" class="span2">
          <br><br>  <br><br> <br><br>
          <button class="btn btn-primary" id="uploadproject">Upload</button><br>
          <img src='img/uploading1.gif'style="display:none;margin-top:5px;margin-left: -8px;" id="loader"/>
     </div><!-- End UploadProjectCenter div -->
     <div id="uploadProjectRight" class="span4" >
     <label><span style="color:red;"><sup>* </sup></span>Snapshots</label>
     <br>
     <input type="file" accept="image/*" id="snapshot1" placeholder="Choose a file">
     <br><br>
        <input type="file" accept="image/*" id="snapshot2" placeholder="Choose a file">
     <br><br>
        <input type="file" accept="image/*" id="snapshot3" placeholder="Choose a file">   
     </div> <!-- End UploadProjectRight div -->  
       <div id="alertproject" class="" style="display:none;margin-top: 300px;">
          </div>
    </div> <!-- End newusercontent div -->
   </fieldset>
</form>
</div> 
</div> <!-- End Container div -->
</body>
<footer> &COPY; Copyright 2012-2013, www.projecttub.com , All rights reserved. </footer>
</html>