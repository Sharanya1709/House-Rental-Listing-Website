<!DOCTYPE html>
<html lang="en">
<head>
  <title>R.State</title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">R.State</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdow-toggle" data-toggle="dropdown" href="#">Houses <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="houses.php">Houses</a></li>
            <li><a href="rating.php">Rating</a></li>
          </ul>
        </li>

        <li><a href="owner.php">Landlords</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tenants<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tenant.php">Tenants</a></li>
            <li><a href="members.php">Members</a></li>
          </ul></li>
        <li><a href="booking.php">Booking</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

         <li><a href="#"><span class="glyphicon glyphicon-user"></span>Hi <?php session_start();  echo $_SESSION['uname'];?></a>
         </li>
        <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>


 
 <?php
if($_SESSION['ltype']=="owner")

 

?>


  <br>
  
      

 <?php
include('connection.php');

$id=$_GET['id'];
  $sql="SELECT * from house where id='$id'";
$query=mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0)
{
  while($rows=mysqli_fetch_assoc($query)){         



  
  
?>
      
 

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
  <center><h2><ul>Detail about house</ul></h2></center>
  <br>
  <div >
 <center><?php echo '<img src="data:img/jpeg;base64,'.base64_encode( $rows['pics'] ).'"/ width="40%" height="80%">' ;?></center>
  </div>
  <br>
<section>
  
  
          <table>
            <tr>
             <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;House ID:</b></h3></td>
              <td><h4><?php echo $rows['id']; ?></h4></td>
            </tr>
            <tr>
              <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Owner ID:</b></h3></td>
              <td><h4><?php echo $rows['owner_id']; ?></h4></td>
            </tr>
            <tr>
              <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of rooms:</b></h3></td>
              <td><h4><?php echo $rows['no_of_rooms']; ?></h4></td>
            </tr>
            <tr>
              <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:</b></h3></td>
              <td><h4><?php echo $rows['address']; ?></h4></td>
            </tr>
            <tr>
              <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Owner Name:</b></h3></td>
              <td><h4><?php echo $rows['ownername']; ?></h4></td>
            </tr>
            <tr>
              <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Number:</b></h3></td>
              <td><h4><?php echo $rows['contactnumber']; ?></h4></td>
             </tr>
            <tr>
              <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rate:</b></h3></td>
              <td><h4><?php echo $rows['rate']; ?></h4></td>
            </tr>
            
          </table>
        </div>
      </div>

</section>
<br>
<section>
<center><h4><b>Property Location</b></h4></center>
<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1501&amp;height=400&amp;hl=en&amp;q=mysore map&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Pirate bay proxy</a></div><style>.mapouter{position:relative;text-align:right;width:1501px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:1501px;height:400px;}.gmap_iframe {width:1501px!important;height:400px!important;}</style></div>
</section>
<br>
<br>
<div class="container">
<section>
<center><h4><b>Description</b></h4></center>
<center><?php echo $rows['description']; ?></center>
</section>
</div>
<br>
<br>
<section>
<center><h4><b>Overview</b></h4></center>
<table>
            <tr>
             <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bxs-grid'>&nbsp;&nbsp;Furnishing Status:</i></b></h3></td>
              <td><h4><?php echo $rows['status']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></td>
            </tr>
            <tr>
             <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bx-water'>&nbsp;&nbsp;Water Supply:</i></b></h3></td>
              <td><h4><?php echo $rows['water'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></td>
            </tr>
            <tr>
             <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bxs-bath'>&nbsp;&nbsp;Bathroom:</i></b></h3></td>
              <td><h4><?php echo $rows['bathroom']; ?></h4></td>
            </tr>
            <tr>
             <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bxs-castle'>&nbsp;&nbsp;Gated Security:</i></b></h3></td>
              <td><h4><?php echo $rows['security']; ?></h4></td>
            </tr>
            <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bxs-square'>&nbsp;&nbsp;Square Feet:</i></b></h3></td>
              <td><h4><?php echo $rows['squarefeet']; ?></h4></td>
            </tr>
            <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bxs-car-garage'>&nbsp;&nbsp;Car Parking:</i></b></h3></td>
              <td><h4><?php echo $rows['carparking']; ?></h4></td>
            </tr>
            <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bxs-car-garage'>&nbsp;&nbsp;Age of Construction:</i></b></h3></td>
              <td><h4><?php echo $rows['ageofconst']; ?></h4></td>
            </tr>
            <td><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bxs-car-garage'>&nbsp;&nbsp;Facing:</i></b></h3></td>
              <td><h4><?php echo $rows['facing']; ?></h4></td>
            </tr>
</table>
</section>


 <?php
}
}
?>
 </div>
</body>
</html>


























 

