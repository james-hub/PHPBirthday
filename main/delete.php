<?php
include("../config.php");
$cookuser = $_COOKIE["cookuser"];
$cookpass = $_COOKIE["cookpass"];
$adminpass = md5($adminpass);
if($cookuser && $cookpass) {
    if(($cookuser == $adminuser) && ($cookpass == $adminpass)){
    //Any protected stuff you want goes in here!
    
require('config.php');

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

// Get values from form.
$ID=$_GET['ID']; 

// Do delete statement. 
mysql_query("delete from phpbirthday where ID='$ID'");

// Close database connection
mysql_close(); 

// Redirect
header("location:phpout.php"); 
    
    
    
    
    
    
    }
    else{
    echo($incorrect_error_message);
    }
}
else{
echo($not_logged_in_message_error_message);
}
?>



