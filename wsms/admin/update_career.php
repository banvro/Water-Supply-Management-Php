<?php

include("dbconnection.php");
include("header.php");
include("lock.php");
$a=$_REQUEST['id'];
$sql ="select * from career where id='$a'";
$result = $conn->query($sql);
while($a3 = $result->fetch_assoc())
{
echo "<form action='update2_career.php' method='post'>";
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
echo "Full Name";
echo "</td>";
$q=$a3['fullname'];
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
echo "Address";
echo "</td>";
$s=$a3['address'];
echo "<td>";
echo "<input type='text' name='n4' value='$s' />";
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>";
echo "City";
echo "</td>";
$v=$a3['city'];
echo "<td>";
echo "<input type='text' name='n5' value='$v' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Contact Number";
echo "</td>";
$t=$a3['contactnumber'];
echo "<td>";
echo "<input type='text' name='n6' value='$t' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Choices Experience Year";
echo "</td>";
$x=$a3['choicesexperienceyear'];
echo "<td>";
echo "<select name='n7' id='experiance' class='form-control' >
<option value=''></option>
<option value='0-1'>0-1 year</option>
<option value='1-2'>1-2 year</option>
<option value='2-4'>2-4 year</option>
<option value='4-6'>4-6 year</option>
<option value='6-10'>4-6 year</option>
<option value='10+'>10+ years </option>
</select>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Choices Destination";
echo "</td>";
$i=$a3['choicesdestination'];
echo "<td>";
echo "<select name='n8' id='experiance' class='form-control' >
<option value=''></option>
<option value='senior sales manager'>senior sales manager</option>
<option value='join sale manager '>join sale manager</option>
<option value='digital marketing'>digital marketing</option>
<option value='field boy'></option>

</select>";
echo "</td>";
echo "</tr>";
/*

echo "<tr>";
echo "<td>";
echo "Upload Your Cv";
echo "</td>";
$u=$a3['uploadyourcv'];
echo "<td>";
echo "<input type='file' name='n9' value='$u' />";
echo "</td>";
echo "</tr>";

*/
echo "<tr>";
echo "<td>";
echo "<input type='submit' value='Submit'/>";
echo "</td>";
echo "</table>";
echo "</form>";
}
?>
