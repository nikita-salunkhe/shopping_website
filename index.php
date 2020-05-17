<?php
session_start();
if(isset($_POST['search']))/* $_POST to fetch in php*/
{

  $p_name=  $_POST['pname'];
	$s_price= $_POST['sprice'];
  $e_price= $_POST['eprice'];
  $_SESSION['pname']=$p_name;
  $_SESSION['sprice']=$s_price;
  $_SESSION['eprice']=$e_price;
  if(empty($p_name))
  {
    echo '<script>alert("Enter product name ")</script>';
  }
  else
	  header('location:product.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fastdeal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<link rel="stylesheet" href="index.css">
<body>
<!--navigation bar-->
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="logo.png" width="70" height="70" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
          <a class="nav-link" href="#" data-target="#mymodel" data-toggle="modal">Login</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
<main>
  <!--  search bar-->

  <center>
</br>
<br>
<div class="row">
<div class="col-sm-3 col-md-3 col-xs-3 col-lg-3 "></div>
<div  class="col-sm-6 col-md-6 col-xs-6 col-lg-6 ">
<div class="modal-content">
  <div class="modal-content">
    <div class="modal-body">
  <div>
    <h2>Fastdeal</h2>
  <p class "text-center" style="color:green;">INdia's FAStest ONLine SHOPing SiTe Is HeRe</p>
</div>
    <form action="#" method="post" name="login" style="width: 500px; margin: auto">
 <div class="form-group">
   <input type="text" class="form-control" name="pname" placeholder="product name">
 </div>
<div class="form-row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Start price" name="sprice">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="End Price" name="eprice">
  </div>
</div>
<div class="aa">
 <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
 <button type="submit" name="search" value="search" class="btn btn-primary">Search</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-sm-3 col-md-3 col-xs-3 col-lg-3 "></div>
</div>
</center>
<!-- connect -->
<hr class="my-4">
<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-12">
      <h2>Connect</h2>
    </div>
    <div class="col-12 social padding">
    <a href="#"><l class="fab fa-facebook"></l></a>
    <a href="#"><l class="fab fa-twitter"></l></a>
    <a href="#"><l class="fab fa-instagram"></l></a>
    <a href="#"><l class="fab fa-youtube"></l></a>
    </div>
  </div>
</div>

</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
  </html>
