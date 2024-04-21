<?php
include("connection.php");
$fname=$_GET['f'];
$lname=$_GET['l'];
$email=$_GET['e'];
$pwd=$_GET['p'];
$mob=$_GET['m'];
$occ=$_GET['o'];
$query=mysqli_query($conn,"SELECT * FROM tenant where email='$email'");
if(mysqli_num_rows($query)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
if($_GET['submit'])
{
	if($fname!="" && $lname!="" && $email!="" && $pwd!="" && $mob!="")
	{
		$query="insert into tenant(fname,lname,email,pwd,mobile_no,occupation)  values('$fname','$lname','$email','$pwd','$mob','$occ')";
		$data=mysqli_query($conn,$query);
		if($data)

			echo 1;
		else
			echo 2;
	}
}

?>
<?php
session_start();
include("connection.php");
$fname=$_GET['f'];
$lname=$_GET['l'];
$email=$_GET['e'];
$pwd=$_GET['p'];
$mob=$_GET['m'];
$occ=$_GET['o'];

if($_GET['submit'])
{
	if($fname!="" && $lname!="" && $email!="" && $pwd!="" && $mob!="")
	{
		$query="insert into tenant(fname,lname,email,pwd,mobile_no,occupation) values('$fname','$lname','$email','$pwd','$mob','$occ')";
		$data=mysqli_query($conn,$query);
		header ("Location: signinhtml.php?status=success");
		
		if($data)

			{
				$_SESSION['uname']=$fname;
				header('location:signinhtml.php');
			}
        else
			{
				echo "Error.Please try again"; 
	         
	        }
	}
	
}
?>
 