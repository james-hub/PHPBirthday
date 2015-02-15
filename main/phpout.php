
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
		</table>';
        
        
     
require('config.php');
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM phpbirthday ORDER BY 'B_Date' DESC";
$result=mysql_query($query);

$num=mysql_num_rows($result);




echo "<meta http-equiv=refresh content=600>";



$query1 = mysql_query("SELECT `Name` FROM phpbirthday");
echo "<form action=userdetails.php method=POST>
<select onchange=submit() NAME='search1' SIZE=1>";

echo "<option value='Choose A User'>Choose A User<option>";

while ($r = mysql_fetch_array($query1))
{
$user = $r["Name"];
echo "<option value='$user'>$user</option>";
}
echo "</select> ";



$result = mysql_query( "SELECT * FROM phpbirthday" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
print "There are $num_rows records.<P>";


echo "<hr>";

$i=0;
while ($i < $num) {



$Name=mysql_result($result,$i,"Name");
$B_Date=mysql_result($result,$i,"B_Date");
$ID=mysql_result($result,$i,"ID");
#$IP_Address=mysql_result($result,$i,"IP_Address");
#$ID=mysql_result($result,$i,"ID");


echo "<font color=#000000>Name:<b> $Name </b><br>
Birth Date:<b> $B_Date </b></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<a href=delete.php?ID=$ID onClick=\"return confirm('Delete item?');\"><font color=#000000>Delete Record</a>&nbsp;  
<a href=edit.php?ID=$ID><font color=#000000>Edit Record</font></a> &nbsp;  
<a href=view.php?ID=$ID><font color=#000000>View</font></a><hr>";




$i++;
}

mysql_close();



 echo   '<table border="0" width="97%" id="table6">
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



