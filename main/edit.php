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
$query="SELECT * FROM phpbirthday WHERE ID=$ID";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();


$i=0;
while ($i < $num) {

$Name=mysql_result($result,$i,"Name");
$Address=mysql_result($result,$i,"Address");
$City=mysql_result($result,$i,"City");
$State=mysql_result($result,$i,"State");
$Postal=mysql_result($result,$i,"Postal");
$Country=mysql_result($result,$i,"Country");
$H_Phone=mysql_result($result,$i,"H_Phone");
$M_Phone=mysql_result($result,$i,"M_Phone");
$B_Date=mysql_result($result,$i,"B_Date");
$Email=mysql_result($result,$i,"Email");
$Website=mysql_result($result,$i,"Website");
$IP_Address=mysql_result($result,$i,"IP_Address");
$ID=mysql_result($result,$i,"ID");


$i++;
}
    
		

echo "<body>

<table id=table9 borderColor=#666666 width=524 align=left bgColor=FFFFFF border=0>

		<td height=51><font color=#000000>
		<hr>
		<table id=table12 borderColor=#666666 width=498 align=right bgColor=#FFFFFF border=0>
			<tr>
				<td height=51 width=347>
				
				<form action=update.php method=post><p align=right>
<input type=hidden name=ID value=$ID>
<font color=000000>Users Name: </font><input type=text name=Name size=30 value=\"$Name\"><br>
<font color=000000>Address: </font><input type=text name=Address size=30 value=\"$Address\"><br>
<font color=000000>City: </font><input type=text name=City size=30 value=\"$City\"><br>
<font color=000000>State: </font><input type=text name=State size=30 value=\"$State\"><br>
<font color=000000>Postal: </font><input type=text name=Postal size=30 value=\"$Postal\"><br>
<font color=000000>Country: </font><input type=text name=Country size=30 value=\"$Country\"><br>
<font color=000000>Phone Number: </font><input type=text name=H_Phone size=30 value=\"$H_Phone\"><br>
<font color=000000>Mobile Number: </font><input type=text name=M_Phone size=30 value=\"$M_Phone\"><br>
<font color=000000>Birthday: </font><input type=text name=B_Date size=30 value=\"$B_Date\"><br>
<font color=000000>E-mail Address: </font><input type=text name=Email size=30 value=\"$Email\"><br>
<font color=000000>Web Address: </font><input type=text name=Website size=30 value=\"$Website\"><br><br>
<input type=Submit value=Update Record>
</form>
</font></td>
				<td height=51></td>
			</tr>
		</table>
		
&nbsp;<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p><br><br>
		<br><br><br><br><br><br><hr>
		</font></td>
	</tr>
</table>
</body>";
		
		
		
		
		
		
		
		
    
    }
    else{
    echo($incorrect_error_message);
    }
}
else{
echo($not_logged_in_message_error_message);
}
?>





































