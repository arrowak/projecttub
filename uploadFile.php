<?php
    $name = $_POST['name'];
    $tmp = $_FILES['projectfile']['tmp_name'];
    if(mkdir("projects/".$name, 0777)){
        $path = "projects/".$name."/".$name.".zip";
        if(move_uploaded_file($tmp,$path)){
              $zip = new ZipArchive;
              $res = $zip->open($path);
             if ($res == TRUE) {
                 mkdir("projects/".$name."/demo", 0777);
                 $zip->extractTo('projects/'.$name.'/demo');
                 $zip->close();
                echo "<strong>Congratulations! </strong>  Your project is uploaded successfully.  <a href='http://localhost/projecttub/projects/$name/demo'> Demo </a>    <a href='http://localhost/projecttub/projects/$name/$name.zip'> Download </a>";
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

?>