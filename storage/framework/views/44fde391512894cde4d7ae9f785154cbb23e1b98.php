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
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/sidebar.css')); ?>">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/search.css')); ?>"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/table.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/footer.css')); ?>">
  

    
</head>

</head>
<body>
<script src="<?php echo e(asset('js/search.js')); ?>"></script>
   <div id="main_menu">
    <div class="logo_area">
      <a href="<?php echo e(route('aHome')); ?>"><img height="120px" width="140px" src="logo.png"></a>
    </div>
    <div class="inner_main_menu" >
    <ul>
      <li style="background-color: #07C9D5;height: 100%;"><a href="<?php echo e(route('aHome')); ?>" style="color:red">ADMIN PANEL</a></li>
      <!-- dropdown menu-->
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">List<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo e(route('aHome')); ?>"style="color:#FF4B4B;">Food List</a></li>
          <li><a href="<?php echo e(route('aDoctor')); ?>"style="color:#FF4B4B;">Doctor List</a></li>
          <li><a href="<?php echo e(route('aMedicine')); ?>"style="color:#FF4B4B;">Medicine List</a></li>
          <li><a href="<?php echo e(route('aAmbulance')); ?>"style="color:#FF4B4B;">Ambulance List</a></li>
        </ul>
      </li>
      
      
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <!-- notification icon -->
     
      <!-- end of notification icon -->
      <li><a href="#">SIGN UP</a></li>
    </ul>
  </div>
</div>

<!-- main body start-->
<!-- sidebar start -->
 
<!-- sidebar end -->
<!-- table start -->
<div style="margin-top: 120px;margin-left:600px;color:#FF4B4B;font-size: 50px; "> <p>Food List</p></div>
<br>
<br>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<a href="<?php echo e(route('formFood')); ?>"><button type="button" class="btn btn-danger" style="margin-left:150px;border-color: red;height: 40px;width: 200px;font-size: 20px">ADD</button></a>
<br>
<br>
<table id="myTable" style="margin-left:150px;">
  <tr class="header">
    
    <th style="width:20%;">Food Name</th>
    <th style="width:20%;">Calorie</th>
    <th style="width:20%;">Fat</th>
    <th style="width:20%;">Protein</th>
    <th style="width:20%;">Carbohydrate</th>
    
  </tr>
   <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <tr>
    
    <td><?php echo e($food->foodName); ?></td>
    <td><?php echo e($food->calorie); ?></td>
    <td><?php echo e($food->fat); ?></td>
    <td><?php echo e($food->protein); ?></td>
    <td><?php echo e($food->carbohydrate); ?></td>
    
    
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
</table>
<!-- table end -->
<br>
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