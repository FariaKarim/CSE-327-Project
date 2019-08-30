<!DOCTYPE html>
<html lang="en">
<head>
  <title>GoodLife</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compitable" content="IE-edge">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
  
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Oswald:400">

   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/navbar.css')); ?>">
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/zoom.css')); ?>">
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/footer.css')); ?>">

    
</head>

</head>
<body>

   <div id="main_menu">
    <div class="logo_area">
      <a href=""><img height="120px" width="140px" src="logo.png"></a>
    </div>
    <div class="inner_main_menu" >
    <ul>
      <li><a href="#">HOME</a></li>
      <!-- dropdown menu-->
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">FORUM<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"style="color:#FF4B4B;">Discussion Forum</a></li>
          <li><a href="#"style="color:#FF4B4B;">Live Video</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">RESOURCES<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo e(route('dCalculation')); ?>"style="color:#FF4B4B;">Health Calculations</a></li>
          <li><a href="#"style="color:#FF4B4B;">List of Informations</a></li>
          <li><a href="#"style="color:#FF4B4B;">Food Nutrients</a></li>
        </ul>
      </li>
      <li><a href="#">BLOOD DONATION</a></li>
      <!-- notification icon -->
      <li><a href="#"><img src="notification.png" style="height: 35px; width: 35px"></a></li>
      <!-- end of notification icon -->
      <li><a href="#">SIGN UP</a></li>
    </ul>
  </div>
</div>

<!-- main body start-->
<div class="container">
 
  <!--box design -->
<a href="<?php echo e(route('dBmi')); ?>"><div class="box1"><img src="bmi.png" style="height:125px;width:125px;margin-top:-30px;margin-left:40px"><p style="padding-top:20px;color:white;text-align: center;font-size: 30px;">Body Mass Index</p></div></a>
<!--end of box design -->
 <a href="<?php echo e(route('dPressure')); ?>"><div class="box2"><img src="pressure.png" style="height:125px;width:125px;margin-top:22px;margin-left:85px"><p style="padding-top:15px;color:white;text-align: center;font-size: 30px;">Blood Pressure</p></div></a>

<a href="<?php echo e(route('dVolume')); ?>"><div class="box3"><img src="volume.png" style="height:100px;width:100px;margin-top:-30px;margin-left:15px"><p style="padding-top:15px;color:white;text-align: center;font-size: 23px;">Blood Volume</p></div></a>

  <a href="<?php echo e(route('dWater')); ?>"><div class="box4"><img src="water.png" style="height:100px;width:120px;margin-top:-30px;margin-left:-10px"><p style="padding-top:15px;color:white;text-align: center;font-size: 23px">Body<br>Water</p></div></a>

<a href="<?php echo e(route('dFat')); ?>"><div class="box5"><img src="fat.png" style="height:100px;width:100px;margin-top:-30px;margin-left:10px"><p style="padding-top:15px;color:white;text-align: center;font-size: 23px">Body<br>Fat</p></div></a>
 
</div>





 <!-- end of main body-->
  
<!-- footer start -->
<footer style="margin-top: 700px">
  <div style="background-color:#ffe6e6">
  <img src="logo.png" style="height: 150px">
  <div class="word">
  <p style="color: black; font-size: 20px; top: 5px">Our mission is to provide maximum health related benefit to our users</p>
</div>
  <a href=""><button type="button" class="btn btn-danger btn-lg">Our Team</button></a>
  <br>
  <br>
  <br>

  </div>
<a href="#" class="fab fa-facebook-f"></a>
<a href="#" class="fab fa-twitter"></a>
<a href="#" class="fab fa-google"></a>
<a href="#" class="fab fa-instagram"></a>
<p>© 2018 Copyright: goodLife.com</p>

 </footer>
<!-- footer end -->
</body>
</html>