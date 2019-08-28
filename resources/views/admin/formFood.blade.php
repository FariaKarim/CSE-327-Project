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
  <link rel="stylesheet" type="text/css" href="{{ asset('css/adminCard.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/adminForm.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css')}}">
  
  

    
</head>

</head>
<body>
<script src="{{asset('js/search.js')}}"></script>
   <div id="main_menu">
    <div class="logo_area">
      <a href="{{route('aHome')}}"><img height="120px" width="140px" src="logo.png"></a>
    </div>
    <div class="inner_main_menu" >
    <ul>
      <li style="background-color: #07C9D5;height: 100%;"><a href="{{route('aHome')}}" style="color:red">ADMIN PANEL</a></li>
      <!-- dropdown menu-->
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">List<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('aHome')}}"style="color:#FF4B4B;">Food List</a></li>
          <li><a href="{{route('aDoctor')}}"style="color:#FF4B4B;">Doctor List</a></li>
          <li><a href="{{route('aMedicine')}}"style="color:#FF4B4B;">Medicine List</a></li>
          <li><a href="{{route('aAmbulance')}}"style="color:#FF4B4B;">Ambulance List</a></li>
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
    <a href="#" class="active">ADD FOOD</a>
</div>


<div class="container">
  <form action="" method="post">
    {!! csrf_field() !!}
  <div class="row">
  
    <div class="col-25">
      <label for="foodName" style="font-size:20px;color:#FF4B4B">Food Name</label>
    </div>
    <div class="col-25">
      <input type="text" id="foodName" name="foodName" placeholder="Food name..">
    </div>
  </div>
  
   <div class="row">
  
    <div class="col-25">
      <label for="calorie" style="font-size:20px;color:#FF4B4B">Calorie</label>
    </div>
    <div class="col-25">
      <input type="text" id="calorie" name="calorie" placeholder="Calorie..">
    </div>
  </div>
   <div class="row">
  
    <div class="col-25">
      <label for="fat" style="font-size:20px;color:#FF4B4B">Fat</label>
    </div>
    <div class="col-25">
      <input type="text" id="fat" name="fat" placeholder="Fat..">
    </div>
  </div>
   <div class="row">
  
    <div class="col-25">
      <label for="protein" style="font-size:20px;color:#FF4B4B">Protein</label>
    </div>
    <div class="col-25">
      <input type="text" id="protein" name="protein" placeholder="Protein..">
    </div>
  </div>
   <div class="row">
  
    <div class="col-25">
      <label for="carbohydrate" style="font-size:20px;color:#FF4B4B">Carbohydrate</label>
    </div>
    <div class="col-25">
      <input type="text" id="carbohydrate" name="carbohydrate" placeholder="Carbohydrate..">
    </div>
  </div>
  <br>
  <div class="row">
     <button type="submit" class="btn btn-danger btn-lg" style="background-color: #FF4B4B; margin-left: 650px">Insert</button>
  </div>

  @if(count($errors) > 0)
  <br>
  <br>
<div class="row">
<div class="col-xs-12">
    <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    </div>
</div>    
</div>
@endif

{{-- success show --}}
@if(Session::has('success'))
<br>
  <br>
<div class="row" ">
<div class="col-xs-12">
    <div class="alert alert-success">
        <p> {!! Session::get('success') !!} </p>
    </div>
</div>
</div>
@endif
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