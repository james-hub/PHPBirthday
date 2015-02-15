
<?php
include("../config.php");
$cookuser = $_COOKIE["cookuser"];
$cookpass = $_COOKIE["cookpass"];
$adminpass = md5($adminpass);
if($cookuser && $cookpass) {
    if(($cookuser == $adminuser) && ($cookpass == $adminpass)){
    //Any protected stuff you want goes in here!
    
 
echo '<body bgcolor=#FFFFFF text=#000000>

<table id="table4" borderColor="#666666" width="524" align="left" bgColor="#FFFFFF" border="0">
	<tr>
		<td height="51"><font color="#000000">
		<table border="0" width="100%" id="table7">
			<tr>
				<td></td>
			</tr>
		</table><hr>';
      
     
$search1 = $_POST['search1'];

require('config.php');

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM phpbirthday WHERE MONTH(B_Date) = '$search1'";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();



$monthName = array(
	"01"=>"January",
	"02"=>"Febuary",
	"03"=>"March",
	"04"=>"April",
	"05"=>"May",
	"06"=>"June",
	"07"=>"July",
	"08"=>"August",
	"09"=>"September",
	"10"=>"October",
	"11"=>"November",
	"12"=>"December",
);

//reference to the keys of the array

$key = array_keys($monthName,0);

//print $monthName[$search1];









echo "<p align=center><font color=#000000><font size=4>
Birthday List For:<b> $monthName[$search1] </b>
</font></p><hr>";



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


echo "Name: <b>$Name</b> <br>Birth Date: <b>$B_Date</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=delete.php?ID=$ID onClick=\"return confirm('Delete item?');\"><font color=#000000>Delete Record</a></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=edit.php?ID=$ID><font color=#000000>Edit Record</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=view.php?ID=$ID><font color=#000000>View</font></a><hr>";

$i++;
}



  echo    '<table border="0" width="97%" id="table6">
			<tr>
		
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
		</font></td>
	</tr>
</table>'; 
    
    
    
    }
    else{
    echo($incorrect_error_message);
    }
}
else{
echo($not_logged_in_message_error_message);
}
?>
