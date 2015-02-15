
<?php
include("../config.php");
$cookuser = $_COOKIE["cookuser"];
$cookpass = $_COOKIE["cookpass"];
$adminpass = md5($adminpass);
if($cookuser && $cookpass) {
    if(($cookuser == $adminuser) && ($cookpass == $adminpass)){
    //Any protected stuff you want goes in here!
    
    
$search1 = $_POST['search1'];

require('config.php');

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");


$curdate=date(m);
$query="SELECT * FROM phpbirthday WHERE MONTH(B_Date) = '$curdate'";



$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();




$i=0;
while ($i < $num) {

$Date=mysql_result($result,$i,"Name");

$Date2 = substr($Date,0,10);

$Name=mysql_result($result,$i,"Name");
$B_Date=mysql_result($result,$i,"B_Date");

$H_Phone=mysql_result($result,$i,"H_Phone");
$M_Phone=mysql_result($result,$i,"M_Phone");
$B_Date=mysql_result($result,$i,"B_Date");
$Email=mysql_result($result,$i,"Email");
$Website=mysql_result($result,$i,"Website");
$IP_Address=mysql_result($result,$i,"IP_Address");
$ID=mysql_result($result,$i,"ID");


$curyear = date(Y);
$age = $curyear - $B_Date;



echo "Name: <b>$Name</b> 
 <br>Birth Date: <b>$B_Date</b>&nbsp;&nbsp; Age: <b>$age</b>
 <hr>";

$i++;
}




    
    
    
    
    
    
    
    }
    else{
    echo($incorrect_error_message);
    }
}
else{
echo($not_logged_in_message_error_message);
}
?>





