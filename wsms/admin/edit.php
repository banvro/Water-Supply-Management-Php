<?php 
$con=mysqli_connect("localhost","root","","class_data");
if(!$con)
{
	die("Error while connecting with database".mysqli_connect_error());
	
}

	$id=$_GET['s_id'];
	
	$querystd="select * from student where s_id=$id";
	$resstd=mysqli_query($con,$querystd);
	$rowstd=mysqli_fetch_array($resstd);
	
	
	if(isset($_POST['btnsubmit']))
	{
		$name=$_POST['name'];
		$roll_no=$_POST['roll'];
		$class=$_POST['class'];
		
		
		$queryins="update student set name='$name', roll_no='$roll_no', class='$class' where s_id=$id";
		
		$resins=mysqli_query($con,$queryins);
		if($resins)
		{
		header("location:query_string.php");
		}
		else
		{
		$msg="Error while updating data.Please try again".mysqli_error($con);
		}
	}
?>
                 <form method="post">
								
Name:<input type="text" value="<?php echo $rowstd['name']; ?>"  name="name">

Roll no:<input type="text" value="<?php echo $rowstd['roll_no']; ?>" name="roll">

Class:<input type="text" value="<?php echo $rowstd['class']; ?>"  name="class">
							
					
<input type="submit" name="btnsubmit" value="Update">
						</form>
