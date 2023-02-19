<?php
include("lock.php");
include("dbconnection.php");
include("header.php");
echo "<br>";
echo "<br>";
echo "<br>";
$p=$_REQUEST['n1'];
$q=$_REQUEST['n2'];
$r=$_REQUEST['n3'];
$s=$_REQUEST['n4'];
$v=$_REQUEST['n5'];

$b="select * from contact where id='$p' , name='$q', email='$r', subject='$s',  message='$v'";
$b1= $conn->real_escape_string($b);
$c="update contact set  name='$q', email='$r',subject='$s',message='$v' where id='$p'";
if($conn->query($c) === TRUE) {
  echo "Updated successfully";
}
 else
	 {
  echo "record not Updated" . $conn->error;
  echo "<a href='selectforcontactusform.php'> ". "Go Back" ."</a>";
}
?>
