<?php
session_start();
include("connection.php");
if(isset($_POST['save'])){
    extract($_POST);
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $loginas=$_POST["s"];

    
    if($loginas=="tenant")
    { 
    $sql="select * from tenant where email='".$uname."' AND pwd='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        $query="select fname from tenant where email='".$uname."' AND pwd='".$password."' limit 1";
        $result=mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($result);
        $name=$data['fname'];
        $_SESSION['uname']=$name;
        $_SESSION['ltype']=$loginas;
        header("location: home.php");
    }
    else{
        echo "<script type='text/javascript'>alert('You Have Entered Incorrect Details! Login Failed')
        window.location.href='index.html';
        </script>";
    }
    }
else
{ 
    $sql="select * from owner where email='$uname' AND pwd='$password' limit 1";
    
    $result=mysqli_query($conn,$sql);
    $data=mysqli_num_rows($result);    
    if(mysqli_num_rows($result)==1){
        $query="select name from owner where email='$uname' AND pwd='$password' limit 1";
        $res=mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($res);
        $nam=$data['name'];
        $_SESSION['uname']=$nam;
        $_SESSION['ltype']=$loginas;
         header('location:home.php');
       
    }
    else{
        echo "<script type='text/javascript'>alert('You Have Entered Incorrect Details! Login Failed')
        window.location.href='index.html';
        </script>";
    }
}   }
?>