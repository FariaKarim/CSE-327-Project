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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/search.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css')}}">
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
<!-- sidebar start -->
 {{--   <div class="sidenav" style="height:73%;">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div> --}}
<!-- sidebar end -->
<!-- table start -->
<div style="margin-top: 120px;margin-left:580px;color:#FF4B4B;font-size: 50px; "> <p>Doctor List</p></div>
<br>
<br>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<a href="{{route('formDoctor')}}"><button type="button" class="btn btn-danger" style="margin-left:150px;border-color: red;height: 40px;width: 200px;font-size: 20px">ADD</button></a>
<br>
<br>
<table id="myTable" style="margin-left:150px;">
  {{-- margin left:80px; --}}
  <tr class="header">
    {{-- <th style="width:20%;">SL no.</th> --}}
    <th>Doctor Name</th>
    <th>Doctor Email</th>
    <th>Chamber Address</th>
    <th>Hospital Address</th>
    <th>Contact</th>
    <th>Specialized</th>
    <th>Qualification</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Blood Group</th>
    {{-- <th>Want to delete?</th> --}}
  </tr>
   @foreach($doctors as $key => $doctor) 
  <tr>
    {{-- <td>{{$key}}</td> --}}
    <td>{{$doctor->doctorName}}</td>
    <td>{{$doctor->doctorEmail}}</td>
    <td>{{$doctor->chamAdd}}</td>
    <td>{{$doctor->hospAdd}}</td>
    <td>{{$doctor->contact}}</td>
    <td>{{$doctor->specialized}}</td>
    <td>{{$doctor->qualification}}</td>
    <td>{{$doctor->gender}}</td>
    <td>{{$doctor->age}}</td>
    <td>{{$doctor->bloodGroup}}</td>
    
    {{-- <td><button type="button" class="btn btn-danger" style="height: 40px;width: 100px;font-size: 20px">Yes</button></td> --}}
  </tr>
  @endforeach
  
  
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