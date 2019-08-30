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
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/card.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/form.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/footer.css')); ?>">
 

 

    
</head>

</head>
<body>

    <script type="text/javascript">
    function calc()
    {
      var weight=parseFloat(document.getElementById("weight").value)
      var height=parseFloat(document.getElementById("height").value)
      var opW=document.getElementById("opW").value
      var opH=document.getElementById("opH").value
      if(opW=="kg"&&opH=="m")
      {
          document.getElementById("bmi").value=weight/(height*height);
      }
      else if(opW=="lbs"&&opH=="inch")
      {
          document.getElementById("bmi").value=(weight*703)/(height*height);
      }
      else
      {
        document.getElementById("bmi").value="Error in selecting units";
      }

    }

  </script>

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
<!-- card start -->
   <div class="card">
  
  
<div class="vertical-menu1">
    <a href="" class="active">BMI</a>
</div>


<div class="container">
  <form action="/action_page.php">
  <div class="row">
  
    <div class="col-25">
      <label for="age" style="font-size:20px;color:#FF4B4B">Age</label>
    </div>
    <div class="col-25">
      <input type="text" id="age" name="Age" placeholder="Your Age..">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="weight" style="font-size:20px;color:#FF4B4B">Weight</label>
    </div>
    <div class="col-25">
    <select id="opW" name="Weight">
        <option value="kg">kg</option>
        <option value="lbs">lbs</option> 
    </select>
      <input type="text" id="weight" name="weight" placeholder="Your Weight..">
     
      
      </div>
      
   
      
  </div>
  <div class="row">
    <div class="col-25">
    
      <label for="Height" style="font-size:20px;color:#FF4B4B">Height</label>
      
    </div>
    <div class="col-25">
    
    <select id="opH" name="Height">
        <option value="m">Metric(m)</option>
        <option value="inch">Imperial(inch)</option> 
    </select>
    <input type="text" id="height" name="height" placeholder="Your Height..">
     
     
      
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Gender" style="font-size:20px;color:#FF4B4B">Gender</label>
    </div>
    <div class="col-25">
     <select id="Gender" name="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        
      </select>
    </div>

  </div>
  <br>
  <div class="row">
     <button type="button" class="btn btn-danger btn-lg" style="background-color: #FF4B4B; margin-left: 650px" onclick="calc();">Calculate</button>
  </div>
    <label for="Gender" style="font-size:20px;color:#FF4B4B">BMI:</label><input type="text" id="bmi">
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