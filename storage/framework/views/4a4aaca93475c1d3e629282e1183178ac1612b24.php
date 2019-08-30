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
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/list.css')); ?>">
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

<br>
<br>
<br>
<br>

 

<script src="<?php echo e(asset('js/search.js')); ?>"></script>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<br>
<a href="<?php echo e(route('barcode')); ?>" class="btn btn-success" role="button" style="margin-left: 350px">Barcode</a>
<br>
<br>

<table id="myTable">
 <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <tr>
    <td><img src="drug.png" style="width: 16%;border: 3px solid  #FF4B4B;border-radius: 25px;"> &nbsp; &nbsp; &nbsp;<?php echo e($medicine->medicineName); ?> &nbsp; &nbsp; &nbsp; For the Disease: <?php echo e($medicine->disease); ?> <p style="margin-top: -30px;margin-left: 128px;">Side Effect:<?php echo e($medicine->sideEffect); ?> &nbsp; &nbsp; &nbsp; Hospital Address<?php echo e($medicine->group); ?> </p> <p style="margin-left:128px;">Element:<?php echo e($medicine->element); ?> &nbsp; &nbsp; &nbsp; Barcode:<?php echo e($medicine->barcode); ?> </p></td>
    

  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
   
</div>
<br>
<br>
<br>
<br>


 <!-- end of main body-->
  
<!-- footer start -->
<footer>
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