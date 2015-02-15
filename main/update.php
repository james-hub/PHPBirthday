
<?php
$ID=$_POST['ID'];
$Name=$_POST['Name'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$State=$_POST['State'];
$Postal=$_POST['Postal'];
$Country=$_POST['Country'];
$B_Date=$_POST['B_Date'];
$H_Phone=$_POST['H_Phone'];
$M_Phone=$_POST['M_Phone'];
$Email=$_POST['Email'];
$Website=$_POST['Website'];


require('config.php');
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");


$query="UPDATE phpbirthday SET Name='$Name', Address='$Address', City='$City', State='$State', Postal='$Postal', Country='$Country', B_Date='$B_Date', H_Phone='$H_Phone', M_Phone='$M_Phone', Email='$Email', Website='$Website' WHERE ID='$ID'";
mysql_query($query);
header( "Location: view.php?ID=$ID" ) ;
mysql_close();
?>
