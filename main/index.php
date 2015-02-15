

<?php
include("../config.php");
$cookuser = $_COOKIE["cookuser"];
$cookpass = $_COOKIE["cookpass"];
$adminpass = md5($adminpass);
if($cookuser && $cookpass) {
    if(($cookuser == $adminuser) && ($cookpass == $adminpass)){
    //Any protected stuff you want goes in here!
    
    
    
echo '<body>

<table id="table4" borderColor="#666666" width="525" align="left" bgColor="#FFFFFF" border="0">
	<tr>
		<td height="51"><font color="#000000">
		<font size="3">
<hr></font>
		<table id="table5" borderColor="#666666" height="262" width="510" align="left" bgColor="#FFFFFF" border="0">
			<tr>
				<td width="255" height="258"><font color="#000000">
				<form onsubmit method="post" action="adduser.php">
					<p align="right">Name: <input size="18" name="Name"><br>
					Birth Date: <input size="18" name="B_Date"><font size="2"><br>
					(yyyy-mm-dd)</font></p>
					<p align="right">Phone Number:
					<input size="18" name="H_Phone"><br>
					Mobile Number: <input size="18" name="M_Phone"><br>
					E-mail Address: <input size="18" name="Email"><br>
					Web Address: <input size="18" name="Website"><br>
					&nbsp;</p>
					<p align="right">
					<input type="submit" value="Add" name="B1" User>
					<input type="reset" value="Reset" name="B2"> </p>
				</form>
				</font></td>
				<td width="10" height="258">&nbsp;</td>
				<td height="258"><u><font color="#000000">Birthday List For ';
echo date("F");
echo'</font></u><br>
				 <IFRAME ID=frm NAME=intro WIDTH="247" src="current.php" height="225" border="0" frameborder="0"> </IFRAME>

</td>
			</tr>
		</table>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;
&nbsp;</p>
		<table border="0" width="98%" id="table6">
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
		<hr>
		</font></td>
	</tr>
</table>
</body>';
    
    
    
    
    
    
    
    }
    else{
    echo($incorrect_error_message);
    }
}
else{
echo($not_logged_in_message_error_message);
}
?>



