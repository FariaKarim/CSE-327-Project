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
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/adminCard.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/adminForm.css')); ?>">
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
<!-- card start -->


   <div class="card">
  
  
<div class="vertical-menu1">
    <a href="#" class="active">ADD DOCTOR</a>
</div>


<div class="container">
  <form action="" method="post">
    <?php echo csrf_field(); ?>

  <div class="row">
  
    <div class="col-25">
      <label for="doctorName" style="font-size:20px;color:#FF4B4B">Doctor Name</label>
    </div>
    <div class="col-25">
      <input type="text" id="doctorName" name="doctorName" placeholder="Doctor name..">
    </div>
  </div>
  
   <div class="row">
  
    <div class="col-25">
      <label for="doctorEmail" style="font-size:20px;color:#FF4B4B">Doctor Email</label>
    </div>
    <div class="col-25">
      <input type="text" id="doctorEmail" name="doctorEmail" placeholder="Doctor Email..">
    </div>
  </div>
   <div class="row">
  
    <div class="col-25">
      <label for="chamAdd" style="font-size:20px;color:#FF4B4B">Chamber Address</label>
    </div>
    <div class="col-25">
      <textarea rows="5" id="chamAdd" name="chamAdd" placeholder="Chamber Address.."></textarea>
    </div>
  </div>
   <div class="row">
  
    <div class="col-25">
      <label for="hospAdd" style="font-size:20px;color:#FF4B4B">Hospital Address</label>
    </div>
    <div class="col-25">
      <textarea rows="5" id="hospAdd" name="hospAdd" placeholder="Hospital Address.."></textarea>
    </div>
  </div>
   <div class="row">
  
    <div class="col-25">
      <label for="contact" style="font-size:20px;color:#FF4B4B">Contact No.</label>
    </div>
    <div class="col-25">
      <input type="text" id="contact" name="contact" placeholder="Contact No...">
    </div>
  </div>
  <div class="row">
  
    <div class="col-25">
      <label for="specialized" style="font-size:20px;color:#FF4B4B">Specialized</label>
    </div>
    <div class="col-25">
      <input type="text" id="specialized" name="specialized" placeholder="Specialized..">
    </div>
  </div>
  <div class="row">
  
    <div class="col-25">
      <label for="qualification" style="font-size:20px;color:#FF4B4B">Qualification</label>
    </div>
    <div class="col-25">
      <textarea rows="5" id="qualification" name="qualification" placeholder="Qualification.."></textarea>
    </div>
  </div>
  <div class="row">
  
    <div class="col-25">
      <label for="gender" style="font-size:20px;color:#FF4B4B">Gender</label>
    </div>
    <div class="col-25">
      <input type="text" id="gender" name="gender" placeholder="Gender..">
    </div>
  </div>
  <div class="row">
  
    <div class="col-25">
      <label for="age" style="font-size:20px;color:#FF4B4B">Age</label>
    </div>
    <div class="col-25">
      <input type="text" id="age" name="age" placeholder="Age..">
    </div>
  </div>
  <div class="row">
  
    <div class="col-25">
      <label for="bloodGroup" style="font-size:20px;color:#FF4B4B">Blood Group</label>
    </div>
    <div class="col-25">
      <input type="text" id="bloodGroup" name="bloodGroup" placeholder="Blood Group..">
    </div>
  </div>
  <br>
  <div class="row">
     <button type="submit" class="btn btn-danger btn-lg" style="background-color: #FF4B4B; margin-left: 650px">Insert</button>
  </div>

  <?php if(count($errors) > 0): ?>
  <br>
  <br>
<div class="row">
<div class="col-xs-12">
    <div class="alert alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>
</div>    
</div>
<?php endif; ?>


<?php if(Session::has('success')): ?>
<br>
  <br>
<div class="row" ">
<div class="col-xs-12">
    <div class="alert alert-success">
        <p> <?php echo Session::get('success'); ?> </p>
    </div>
</div>
</div>
<?php endif; ?>
  </form>
</div>
 </div>

</div>





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