<?php
include("dbconnection.php");
include("header.php");
include("lock.php");
echo "<br>";
echo "<br>";
echo "<br>";
$p=$_REQUEST['n1'];
$q=$_REQUEST['n2'];
$r=$_REQUEST['n3'];
$s=$_REQUEST['n4'];
$v=$_REQUEST['n5'];
$t=$_REQUEST['n6'];
$x=$_REQUEST['n7'];
$i=$_REQUEST['n8'];
$b="select * from career where id='$p', fullname='$q', email='$r', address='$s',  city='$v' , contactnumber='$t' , choicesexperienceyear='$x' , choicesdestination='$i'";
$b1= $conn->real_escape_string($b);
$c="update career set  fullname='$q', email='$r', address='$s', city='$v' , contactnumber='$t' , choicesexperienceyear='$x' , choicesdestination='$i'  where id='$p'";
if($conn->query($c) === TRUE) {
  echo "Updated successfully";
  echo "<a href='selectforcareerform.php'>"." GO Back "."</a>";
}
 else
	 {
  echo "record not Updated" . $conn->error;
  echo "<a href='selectforcareerform.php'> ". "Go Back" ."</a>";
}
?>
