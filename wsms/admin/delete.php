<?php
$con=mysqli_connect("localhost","root","","class_data");
if(!$con)
{
	die("Error while connecting with database".mysqli_connect_error());
	
}
$id=$_GET['s_id'];
$query="delete from student where s_id=$id";
$res=mysqli_query($con,$query);
if($res)
{
	header("location:query_string.php");
	
}
?>

