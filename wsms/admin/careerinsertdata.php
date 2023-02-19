<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
    $b2=$_REQUEST["n2"];
    $b3=$_REQUEST["n3"];
    $b4=$_REQUEST["n4"];
    $b5=$_REQUEST["n5"];
    $b6=$_REQUEST["n6"];
    $b7=$_REQUEST["n7"];
    $b8=$_REQUEST["n8"];
    $b9=move_uploaded_file($_FILES["n9"]["tmp_name"],"images/".$_FILES["n9"]["name"]);
$query=mysqli_query($con,"insert into career(fullname,email,address,city,contactnumber,choicesexperienceyear,choicesdestination,uploadyourcv) values('$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9') ");
if($query)
{
 echo "<script>alert('Your order has been added in to the cart');</script>";   
} else {
 echo "<script>alert('Something went wrong.');</script>";      
}
}
$con->close();

?>









