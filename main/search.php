
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
		<td height="51"><font color="#ffffff">
		<hr>
     
      <form method=POST action=userdetails.php onSubmit=>
        <input TYPE=hidden NAME=VTI-GROUP VALUE=0>
		</font>
        <p>Search by name: 
          <font color="#ffffff">
          <input type=text name=search1 size=21>
					&nbsp;&nbsp;&nbsp;
         <input type=submit value=Search Database name=B1>
          <input type=reset value=Reset name=B2>
        </p>

				
				
				
      </form>
			
			
			<FORM 
     ACTION="listmonth.php" 
     METHOD=POST onSubmit="return dropdown(this.gourl)">



			
<font color="#000000">View Birthday List For a Specific Month:</font>
	<select name="search1" style="width: 104px; height: 24px">

	<option value="01">January</option>
	<option value="02">February</option>
	<option value="03">March</option>
	<option value="04">April</option>
	<option value="05">May</option>
	<option value="06">June</option>
	<option value="07">July</option>
	<option value="08">August</option>
	<option value="09">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
	</select>
	<INPUT TYPE=SUBMIT VALUE="Go">
</form>

			
			

			
			
			
			
			
			
			
			
			
			
			
			
     <hr> 
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




