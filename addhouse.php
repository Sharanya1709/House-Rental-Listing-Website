<?php
session_start();
include("connection.php");
$id='';
$ownerid=$_GET["o"];
$nrooms=$_GET['n'];
$rate=$_GET['ra'];
$pics=$_GET['u'];
$ownername=$_GET['c'];
$contactnumber=$_GET['s'];
$add=$_GET['a'];
$desc=$_GET['de'];
$squarefeet=$_GET['sq'];
$ageofconst=$_GET['ag'];
$facing=$_GET['fa'];
$status=$_GET['st'];
$water=$_GET['ws'];
$security=$_GET['gs'];
$bathroom=$_GET['ba'];
$carparking=$_GET['cp'];
/*$folder="house/";
$_FILES["p"];
$pics= "images/".basename($_FILES['p']['name']);*/

if($_GET['submit'])
{
	if($ownerid!="" && $nrooms!="" && $desc!="")
	{
     // $pics = addslashes(file_get_contents($_FILES["p"]["tmp_name"]));
     /*
//you keep your column name setting for insertion. I keep image type Blob.
$query = "INSERT INTO products (id,image) VALUES('','$image')";  
$qry = mysqli_query($conn, $query);*/

//$image = addslashes(file_GET_contents($_FILES['$pics']));



$squarefeet=$_GET['sq'];
$query="insert into house(owner_id,no_of_rooms,rate,pics,ownername,contactnumber,address,description,squarefeet,ageofconst,facing,status,water,security,bathroom,carparking) values('$ownerid','$nrooms','$rate','{$pics}','$ownername','$contactnumber','$add','$desc','$squarefeet','$ageofconst','$facing','$status','$water','$security','$bathroom','$carparking')";
		$data=mysqli_query($conn,$query);
		
		if($data)

			{
				echo "<script type='text/javascript'>alert('Added successfully')
        window.location.href='houses.php';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Unsuccessfull')
        window.location.href='houses.php';
        </script>";
			}
	}
}
?>

