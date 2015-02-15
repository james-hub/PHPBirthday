<?php
include("../config.php");
$cookuser = $_COOKIE["cookuser"];
$cookpass = $_COOKIE["cookpass"];
$adminpass = md5($adminpass);
if($cookuser && $cookpass) {
    if(($cookuser == $adminuser) && ($cookpass == $adminpass)){
    //Any protected stuff you want goes in here!


$ID=$_GET['ID'];
require('config.php');

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM settings WHERE ID=0";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();


$i=0;
while ($i < $num) {

$Path=mysql_result($result,$i,"Path");
$To_Email=mysql_result($result,$i,"To_Email");
$From_Email=mysql_result($result,$i,"From_Email");
$Subject=mysql_result($result,$i,"Subject");
$Monthly_Email=mysql_result($result,$i,"Monthly_Email");
$Email_Reminders=mysql_result($result,$i,"Email_Reminders");
$ID=mysql_result($result,$i,"ID");


$i++;
}











echo "<hr><table border=0 width=100% id=table1>
	<tr>
		<td width=363>
		<form method=POST action=save-settings.php>
			<p align=right>To Email:
			<input type=text name=To_Email size=30 value=\"$To_Email\"><br>
			From Email: <input type=text name=From_Email size=30 value=\"$From_Email\"><br>
			Subject Line: <input type=text name=Subject size=30 value=\"$Subject\"><br>
			Website Path: <input type=text name=Path size=30 value=\"$Path\"><br>";

	
			
echo "<br>Send Monthly Birthday list: <select size=1 name=Monthly_Email><br>";

if($Monthly_Email=='1'){
echo "<option value=1>ON</option> <option value=0>OFF</option><br>";}

if($Monthly_Email=='0'){
echo " <option value=0>OFF</option> <option value=1>ON</option><br>";}
	
echo "</select>";	
	
	


echo "<br>Send Email Reminders: <select size=1 name=Email_Reminders><br>";

if($Email_Reminders=='1'){
echo "<option value=1>ON</option> <option value=0>OFF</option><br>";}

if($Email_Reminders=='0'){
echo " <option value=0>OFF</option> <option value=1>ON</option><br>";}
	
	
	
echo "</select><br></p>";





			



echo "<p align=right>

<br>
			<input type=submit value=\"Save Settings\" name=B1><input type=reset value=Reset name=B2></p>
		</form>
		<p>&nbsp;</td>
		<td width=140>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table><hr>";



		
		
		
		
		
		
		
		
    
    }
    else{
    echo($incorrect_error_message);
    }
}
else{
echo($not_logged_in_message_error_message);
}
?>





































