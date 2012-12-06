<?php
    $name = $_POST['name'];
    $tmp = $_FILES['projectfile']['tmp_name'];
    if(mkdir("projects/".$name, 0777)){
        $path = "projects/".$name."/".$name.".zip";
        if(move_uploaded_file($tmp,$path)){
             echo "<strong>Congratulations! </strong>  Your project is uploaded successfully.";
        }

        else{
            echo "<strong>Oops! </strong>  We're sorry, but something went wrong. Please try again.";
        }
    }
    else{
            echo "<strong>Oops! </strong>  We're sorry, but something went wrong. Please try again.";
        }

?>