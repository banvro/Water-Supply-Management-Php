<?php
include("dbconnection.php");
$a2=$_REQUEST["n2"];
$a3=$_REQUEST["n3"];
$a4=$_REQUEST["n4"];
$a5=$_REQUEST["n5"];
$a6="insert into contact (name,email,subject,message) values('$a2','$a3','$a4','$a5')";
if($conn->query($a6)==true)
{
echo "Data successfull inserted";
}
else{
	echo "try agin".$conn->error;
}
$conn->close();
?>

