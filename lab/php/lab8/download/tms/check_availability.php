<?php 
require_once("includes/config.php");
// Check Availabilty for user mobile number
if(!empty($_POST["mobnumber"])) {
	$mnumber= $_POST["mobnumber"];

		$result =mysqli_query($con,"select id from tblpatients where MobileNumber='$mnumber'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Mobile already exists. Please try with another mobile number or click on this <a href='registered-user-testing.php'>Registered Users</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Mobile available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


// Check Availabilty for Phlebotomist employee id
if(!empty($_POST["employeeid"])) {
	$empid= $_POST["employeeid"];

		$result =mysqli_query($con,"select id from tblphlebotomist where EmpID='$empid'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Employee id already exists. Please try with another employee id.</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Employee id  available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
