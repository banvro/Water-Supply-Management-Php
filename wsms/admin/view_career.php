<?php
include("lock.php");
include("header.php");
echo "<br>";
echo "<br>";
echo "<br>";
include("dbconnection.php");
$a= $_REQUEST['id'];
$sql = "select * from career where id='$a'";
$result = $conn->query($sql);
echo "<table border='3'>";

echo "<tr>";

echo "<td>";
echo "ID";
echo "</td>";

echo "<td>";
echo " Full Name";
echo "</td>";

echo "<td>";
echo "Email";
echo "</td>";

echo "<td>";
echo "Address";
echo "</td>";


echo "<td>";
echo "City";
echo "</td>";

echo "<td>";
echo "Contact Number";
echo "</td>";

echo "<td>";
echo "Choices Experience Year";
echo "</td>";

echo "<td>";
echo "Choices Destination";
echo "</td>";

/*echo "<td>";
echo "Upload Your CV";
echo "</td>";

*/
echo "</tr>";
//while($a3=mysqli_fetch_array($a2))
	while($a3 = $result->fetch_assoc())
{
echo "<tr>";

echo "<td>";
echo $a3['id'];
echo "</td>";

echo "<td>";
echo $a3['fullname'];
echo "</td>";

echo "<td>";
echo $a3['email'];
echo "</td>";

echo "<td>";
echo $a3['address'];
echo "</td>";



echo "<td>";
echo $a3['city'];
echo "</td>";

echo "<td>";
echo $a3['contactnumber'];
echo "</td>";

echo "<td>";
echo $a3['choicesexperienceyear'];
echo "</td>";

echo "<td>";
echo $a3['choicesdestination'];
echo "</td>";

/* echo "<td>";
echo $a3['uploadyourcv'];
echo "</td>";
*/


echo "</tr>";
}
echo "</table>";
echo "<a href='selectforcareerform.php'>"." GO Back "."</a>";
?>
