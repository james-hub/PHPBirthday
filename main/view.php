
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
		   <hr>';


$ID=$_GET['ID'];
require('config.php');

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM phpbirthday WHERE ID=$ID";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

echo "<br>";

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





echo "Name: <b><font size=4> $Name </font></b><br>
Address: <b><font size=4> $Address </font></b><br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><font size=4> $City </font></b>
<b><font size=4> $State </font></b>
<b><font size=4> $Postal </font></b>
<b><font size=4> $Country </font></b><br><br>

Birthday: <b><font size=4> $B_Date </font></b><br>
Phone Number: <b><font size=4> $H_Phone </font></b><br>
Mobile Number: <b><font size=4> $M_Phone </font></b><br>

E-mail Address: <b><font size=4> $Email </font></b><br>
Web Address: <b><font size=4> $Website </font></b><br>

<p align=center><a href=delete.php?ID=$ID onClick=\"return confirm('Delete item?');\"><font color=#000000>Delete Record</font></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       <a href=edit.php?ID=$ID><font color=#000000>Edit Record</a></font></p>


   <hr>  
   <table border=0 width=97% id=table6>
			<tr>
		
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
		</font></td>
	</tr>
</table>";

    
    
    
    
    
    
    
    }
    else{
    echo($incorrect_error_message);
    }
}
else{
echo($not_logged_in_message_error_message);
}
?>

