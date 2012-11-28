<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

if(isset ($_SESSION['username']))
{
    echo 'Set'.$_SESSION['username'];
    
    }
 else {
    $_SESSION['username'] = "arunkolhapur";
}

?>
