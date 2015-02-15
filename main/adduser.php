<?php
include("../config.php");
$cookuser = $_COOKIE["cookuser"];
$cookpass = $_COOKIE["cookpass"];
$adminpass = md5($adminpass);
if($cookuser && $cookpass) {
    if(($cookuser == $adminuser) && ($cookpass == $adminpass)){

    //Any protected stuff you want goes in here!

require('config.php');
$IP_Address = getenv('REMOTE_ADDR');
$M_Date = date("y.m.d");

$Name = $_POST["Name"];


$B_Date = $_POST["B_Date"];
$H_Phone=$_POST['H_Phone'];
$M_Phone=$_POST['M_Phone'];
$Email=$_POST['Email'];
$Website=$_POST['Website'];

mysql_connect(localhost,$username,$password);

@mysql_select_db($database) or die( "Unable to select database");

mysql_query ("INSERT INTO phpbirthday VALUES ('$Name', '$Address', '$City', '$State', '$Postal', '$Country', '$B_Date', '$IP_Address', 'ID', '$H_Phone', '$M_Phone', '$Email', '$Website')")
or die(include("messageerror.php"));

mysql_close();


# Sends Email When User Is Added.
$Email_Message = "$Name has been added with a Birthdate of $B_Date\n";
mail("$To_Email", "PHPBirthday.org - New User added", $Email_Message, "From: $From_Email");


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


