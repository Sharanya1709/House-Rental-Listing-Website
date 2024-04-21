<?php
session_start();
include("connection.php");
$cardtype=$_GET['t'];
$holdername=$_GET['h'];
$cardnumber=$_GET['n'];
$tenantid=$_GET['ti'];
$houseid=$_GET['hi'];
$paymentdate=$_GET['d'];
$price=$_GET['p'];

if($_GET['submit'])
{
	if($cardtype!="" && $holdername!="" && $cardnumber!="" && $tenantid!="" && $houseid!="" && $paymentdate!="" && $price!="")
	{
		$query="insert into payment(cardtype,holdername,cardnumber,tenantid,houseid,paymentdate,price) values('$cardtype','$holdername','$cardnumber','$tenantid','$houseid','$paymentdate','$price')";
		$data=mysqli_query($conn,$query);
		if($data)

			{
				echo "<script type='text/javascript'>alert('Payment done successfully')
        window.location.href='payment.php';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Your payment failed')
        window.location.href='payment.php';
        </script>";
			}
	}
}
?>