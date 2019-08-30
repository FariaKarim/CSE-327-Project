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


   <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/card.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css')}}">

    
</head>

</head>
<body>

  <script type="text/javascript">
    function calcPressure()
    {
      var systolic=parseFloat(document.getElementById("systolic").value)
      var diastolic=parseFloat(document.getElementById("diastolic").value)
      
      if((systolic>=60&&systolic<120)&&(diastolic>=60&&diastolic<80))
      {
          document.getElementById("pressure").value="Normal";
      }
      else if((systolic>=120&&systolic<=129)&&diastolic<80)
      {
          document.getElementById("pressure").value="Elevated";
      }
      else if((systolic>=130&&systolic<=139)||(diastolic>=80&&diastolic<=89))
      {
          document.getElementById("pressure").value="Hypertension-1";
      }
      else if((systolic>=140&&systolic<=180)||(diastolic>=90&&diastolic<=120))
      {
          document.getElementById("pressure").value="Hypertension-2";
      }
      else if((systolic>180&&diastolic>120)||(systolic>180||diastolic>120))
      {
        document.getElementById("pressure").value="Hypertensive Crisis";
      }
      else
      {
        document.getElementById("pressure").value="Range is not correct";
      }


    }

  </script>

     <div id="main_menu">
    <div class="logo_area">
      <a href="{{route('dHome')}}"><img height="120px" width="140px" src="logo.png"></a>
    </div>
    <div class="inner_main_menu" >
    <ul>
      <li><a href="">HOME</a></li>
      <!-- dropdown menu-->
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">FORUM<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"style="color:#FF4B4B;">Discussion Forum</a></li>
          <li><a href="#"style="color:#FF4B4B;">Live Video</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">RESOURCES<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('dCalculation')}}"style="color:#FF4B4B;">Health Calculations</a></li>
          <li><a href="{{route('dDoctor')}}"style="color:#FF4B4B;">List of Informations</a></li>
          <li><a href="dFood"style="color:#FF4B4B;">Food Nutrients</a></li>
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
  
  
<div class="vertical-menu2">
    <a href="" class="active">Blood Pressure</a>
</div>


<div class="container">
  <form action="/action_page.php">
  <div class="row">
  
    <div class="col-25">
      <label for="systolic" style="font-size:20px;color:#FF4B4B">Systolic Blood Pressure</label>
    </div>
    <div class="col-25">
      <input type="text" id="systolic" name="systolic">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="diastolic" style="font-size:20px;color:#FF4B4B">Diastolic Blood Pressure</label>
    </div>
    <div class="col-25">
      <input type="text" id="diastolic" name="diastolic">

    </div>

  </div>
  <br>
  <div class="row">
     <button type="button" class="btn btn-danger btn-lg" style="background-color: #FF4B4B; margin-left: 650px" onclick="calcPressure()">Calculate</button>
  </div>
  <label for="Gender" style="font-size:20px;color:#FF4B4B">Blood pressure:</label><input type="text" id="pressure">
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