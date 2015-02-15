<?php
include("../config.php");
$cookuser = $_COOKIE["cookuser"];
$cookpass = $_COOKIE["cookpass"];
$adminpass = md5($adminpass);
if($cookuser && $cookpass) {
    if(($cookuser == $adminuser) && ($cookpass == $adminpass)){

    //Any protected stuff you want goes in here!




$Path=$_POST['Path'];
$To_Email=$_POST['To_Email'];
$From_Email=$_POST['From_Email'];
$Subject=$_POST['Subject'];
$Monthly_Email=$_POST['Monthly_Email'];
$Email_Reminders=$_POST['Email_Reminders'];



require('config.php');
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");


$query="UPDATE settings SET Path='$Path', To_Email='$To_Email', From_Email='$From_Email', Subject='$Subject', Monthly_Email='$Monthly_Email', Email_Reminders='$Email_Reminders' WHERE ID='0'";
mysql_query($query);
header( "Location: settings.php" ) ;
mysql_close();

    
    
    
    
    
    }
    else{
    echo($incorrect_error_message);
    }
}
else{
echo($not_logged_in_message_error_message);
}
?>


