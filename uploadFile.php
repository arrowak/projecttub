<?php
session_start();
if(isset($_SESSION['username'])){
    // get the posted data
    $name = $_POST['name'];
    $type = $_POST['projectcategory'];
    $dateobj = new DateTime();
    $timestamp = $dateobj->getTimestamp();
    $snapshot1 = $_FILES['snapshot1']['name'];
    $snapshot2 = $_FILES['snapshot2']['name'];
    $snapshot3 = $_FILES['snapshot3']['name'];
    
    // get userid for loggedin user for uploadedby field
    include 'connectDB.php';
    $statement = "SELECT users_id FROM users WHERE emailid = '".$_SESSION['username']."'";
    $result = mysql_query($statement);
    
    $row = mysql_fetch_row($result);
    $uploadedby = $row[0];
    
    // hash the name with timestamp to store the project file
    $tohash = $name.$timestamp;
    $hashedname = hash('ripemd160', $tohash);
    
    // upload data to database
    $statement = "INSERT INTO projects (project_name,project_type,project_timestamp,project_snapshot_1,project_snapshot_2,project_snapshot_3,uploaded_by,project_location) VALUES('$name','$type','$timestamp','$snapshot1','$snapshot2','$snapshot3',$uploadedby,'$hashedname')";
    $result = mysql_query($statement);
    if(!$result){
         echo "<strong>Oops! </strong>  We're sorry, but something went wrong. Please try again.";
    }
    else {
        
    // create directory structure
    $tmp = $_FILES['projectfile']['tmp_name'];
    $tmpsnp1 = $_FILES['snapshot1']['tmp_name'];
    $tmpsnp2 = $_FILES['snapshot2']['tmp_name'];
    $tmpsnp3 = $_FILES['snapshot3']['tmp_name'];
    
    if(mkdir("projects/".$hashedname, 0777) && mkdir("projects/".$hashedname."/snapshots", 0777)){
        $path = "projects/".$hashedname."/".$hashedname.".zip";
        $snapshotpath = "projects/".$hashedname."/snapshots/";
        
        if(move_uploaded_file($tmp,$path)){
              $zip = new ZipArchive;
              $res = $zip->open($path);
             if ($res == TRUE) {
                 mkdir("projects/".$hashedname."/demo", 0777);
                 $zip->extractTo('projects/'.$hashedname.'/demo');
                 $zip->close();
                 
                 move_uploaded_file($tmpsnp1,$snapshotpath.$snapshot1);
                 if($snapshot2 != "")
                     move_uploaded_file($tmpsnp2,$snapshotpath.$snapshot2);
                 if($snapshot3 != "")
                    move_uploaded_file($tmpsnp3,$snapshotpath.$snapshot3);
                 
                echo "<strong>Congratulations! </strong>  Your project is uploaded successfully.  <a href='http://localhost/projecttub/projects/$hashedname/demo'> Demo </a>    <a href='http://localhost/projecttub/projects/$hashedname/$hashedname.zip'> Download </a>";
             } 
             else {
                echo "<strong>Oops! </strong>  We're sorry, but something went wrong. Please try again.";
             }
             
        }

        else{
            echo "<strong>Oops! </strong>  We're sorry, but something went wrong. Please try again.";
        }
    }
    else{
            echo "<strong>Oops! </strong>  We're sorry, but something went wrong. Please try again.";
        }
    }
    
}
 else {
     header('Location: index.php');
}
?>