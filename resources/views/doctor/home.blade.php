<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compitable" content="IE-edge">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Oswald:400">


  <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/wave.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/search.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/item.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css')}}">
    
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
          <li><a href="#"style="color:#FF4B4B;">Health Calculations</a></li>
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


 
  <section>
    <div class="wave"></div>
</section>
  <div class="container">
    <b><h1 style="color:#FF4B4B;padding-top: 450px; text-align: center; font-size:60px">WELCOME TO</h1></b>
    <!-- goodLife logo -->
  <img src="goodLife.jpg" style="padding-top: 5px;padding-left:280px">
  <!--end of goodLife logo -->
  <!-- horizontal line-->
  <hr width="50%" style="border:1px solid;">
  <!--end of horizontal line-->
  <!-- search bar-->
  <form id="search-form" class="form-inline" role="form" method="post" action="//www.google.com/search" target="_blank"style="padding-left: 900px;">
    <div class="input-group">
        <input type="text" class="form-control search-form input-lg">
         <span class="input-group-btn"><button type="submit" class="btn btn-primary search-btn btn-lg" data-target="#search-form" name="q">Search
                                    </button></span>


    </div>
</form>
<!-- end of search bar-->
<!-- vertical line and writing beside parallelogram one-->
<div class="verticalLineOne"></div>
<div class="boxParagraphOne"><h2>Here you can calculate your BMI, body fat, blood pressure, blood volume…</h2></div>
<!-- end of vertical line and writing beside parallelogram one-->
<div class="verticalLineTwo"></div>
<div class="boxParagraphTwo"><h2>Here you can get the detail information of doctors, ambulance,  medicines…</h2></div>
<div class="verticalLineThree"></div>
<div class="boxParagraphThree"><h2>Here you can get the detail information about the nutrients of food……</h2></div>
<!-- Draw parallelogram 1-->
<svg height="980" width="1200" class="image"> 
  <!-- area of the drawing -->
   <defs>
      <pattern  id="imgpattern1" width="1" height="1">
        <image x="-100" y="-200" height="700" 
               xlink:href="parallelogram1.jpg"/> <!-- x,y, position of the image inside the parallelogram -->
               <!-- height of the image inside the parallelogram -->
               <!-- xlink:href=link of the image-->
      </pattern>
  </defs>
  <a href="https://www.google.com/"><path  fill="url(#imgpattern1)" d="M80 50
  L05 250 
  L815 250
  L890 50  " style="stroke:#C0C0C0;
           stroke-width: 3; 
           
           "/></a> <!-- a href=link of the goto page when the parallelogram is clicked -->
           <!-- d=path to draw the parallelogram (top,down,right,up)-->
           <!-- Draw parallelogram 2-->

           <defs>
      <pattern  id="imgpattern2" width="1" height="1">
        <image x="-100" y="-200" height="700" 
               xlink:href="parallelogram2.jpg"/> <!-- x,y, position of the image inside the parallelogram -->
               <!-- height of the image inside the parallelogram -->
               <!-- xlink:href=link of the image-->
      </pattern>
  </defs>
  <a href="https://www.google.com/"><path  fill="url(#imgpattern2)" d="M340 350
  L265 550 
  L1075 550
  L1150 350  " style="stroke:#C0C0C0;
           stroke-width: 3; 
           
           "/></a> 
           <!-- Draw parallelogram 3-->

           <defs>
      <pattern  id="imgpattern3" width="1" height="1">
        <image x="-100" y="-200" height="700" 
               xlink:href="parallelogram3.jpg"/> <!-- x,y, position of the image inside the parallelogram -->
               <!-- height of the image inside the parallelogram -->
               <!-- xlink:href=link of the image-->
      </pattern>
  </defs>
  <a href="https://www.google.com/"><path  fill="url(#imgpattern3)" d="M80 650
  L05 850 
  L815 850
  L890 650  " style="stroke:#C0C0C0;
           stroke-width: 3; 
           
           "/></a> 
</svg>


<!-- Draw parallelogram 2-->


</div>
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
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
<p>© 2018 Copyright: goodLife.com</p>

 </footer>
<!-- footer end -->
</body>
</html>