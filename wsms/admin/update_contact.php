<?php
include("dbconnection.php");
include("header.php");
include("lock.php");
$a=$_REQUEST['id'];
$sql ="select * from contact where id='$a'";
$result = $conn->query($sql);
while($a3 = $result->fetch_assoc())
{
echo "<form action='update2_contact.php' method='post'>";
echo "<table border='1'>";
echo "<tr>";
echo "<td>";
echo "Id";
echo "</td>";
$p=$a3['id'];
echo "<td>";
echo "<input type='text' name='n1' value='$p' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Name";
echo "</td>";
$q=$a3['name'];
echo "<td>";
echo "<input type='text' name='n2' value='$q' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Email";
echo "</td>";
$r=$a3['email'];
echo "<td>";
echo "<input type='text' name='n3' value='$r' />";
echo "</td>";
echo "</tr>";



echo "<tr>";
echo "<td>";
echo "Subject";
echo "</td>";
$s=$a3['subject'];
echo "<td>";
echo "<input type='text' name='n4' value='$s' />";
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>";
echo "Message";
echo "</td>";
$v=$a3['message'];
echo "<td>";
echo "<input type='text' name='n5' value='$v' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<input type='submit' value='Submit'/>";
echo "</td>";
echo "</table>";
echo "</form>";
}
?>
