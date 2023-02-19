<?php
include("dbconnection.php");
include("header.php");
include("lock.php");
$sql = "select * from contact";
$result = $conn->query($sql);
echo "<table border='3'>";
echo "<tr>";
echo "<th>"."ID"."</th>";
echo "<th>"."Name"."</th>";
echo "<th>"."Email"."</th>";
echo "<th>"."Subject"."</th>";

echo "<th>"."Message"."</th>";
echo "<th>"."Action"."</th>";
echo "<tr>";
while($c = $result->fetch_assoc())
{
echo "<tr>";
echo "<th>".$c["id"]."</th>";
echo "<th>".$c["name"]."</th>";
echo "<th>".$c["email"]."</th>";

echo "<th>".$c["subject"]."</th>";
echo "<th>".$c["message"]."</th>";
echo "<td>";
echo '<a href="delete_contact.php?id='.$c['id'].'"> Delete </a>';
echo '<a href="view_contact.php?id='.$c['id'].'"> View </a>'; 
echo '<a href="update_contact.php?id='.$c['id'].'"> Update </a>';

echo "</td>";

echo "<tr>";
}
echo "</table>";
?>