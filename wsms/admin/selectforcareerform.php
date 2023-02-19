<?php
include("dbconnection.php");
include("header.php");
include("lock.php");
$sql = "select *  from career";
$result = $conn->query($sql);
echo "<table border='3'>";
echo "<tr>";
echo "<th>"."ID"."</th>";
echo "<th>"."Full Name"."</th>";
echo "<th>"."Email Address"."</th>";
echo "<th>"."Address"."</th>";

echo "<th>"."City"."</th>";
echo "<th>"."Contact Number"."</th>";
echo "<th>"."Choices experiance"."</th>";
echo "<th>"."Choices Destination"."</th>";
echo "<th>"."Upload Your CV"."</th>";
echo "<th>"."Action"."</th>";
echo "<tr>";
while($c = $result->fetch_assoc())
{
echo "<tr>";
echo "<th>".$c["id"]."</th>";
echo "<th>".$c["fullname"]."</th>";
echo "<th>".$c["email"]."</th>";
echo "<th>".$c["address"]."</th>";
echo "<th>".$c["city"]."</th>";
echo "<th>".$c["contactnumber"]."</th>";
echo "<th>".$c["choicesexperienceyear"]."</th>";
echo "<th>".$c["choicesdestination"]."</th>";
echo "<th>".$c["uploadyourcv"]."</th>";
echo "<td>";

echo '<a href="view_career.php?id='.$c['id'].'"> View </a>'; 
echo '<a href="update_career.php?id='.$c['id'].'"> Update </a>';

echo "</td>";

echo "<tr>";
}
echo "</table>";
?>
