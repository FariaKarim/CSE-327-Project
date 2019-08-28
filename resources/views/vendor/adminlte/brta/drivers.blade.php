@extends('adminlte::layouts.app')

@section('htmlheader_title')
  BRTA - Drivers
@endsection

@section('htmlheader')
@parent
<style>

</style>
@endsection

@section('main-content')



     

<!-- {{-- table --}} -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">List of Unregistered Drivers</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="vehiclelist" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>SL. No</th>
          <th>Driver ID</th>
          <th>Driver Name</th>
          <th>Action</th>
        
        </tr>
      </thead>
      <tbody>
         <?php  
          $i=0;
        ?>
        @foreach($unreg_drivers as $key => $unreg_driver)
        <tr>
          <?php 
               $i=$i+1;
           ?>
          <td>{{$i}}</td>
          <td>{{$unreg_driver->id}}</td>
          <td>{{$unreg_driver->information->first_name}} {{$unreg_driver->information->last_name}}</td>
          <td><a href="{{route('unreg.driver.info',['driver_id' => $unreg_driver->id])}}" class="btn btn-success" role="button">view</a>&nbsp &nbsp<a href="{{route('regFormDrivers')}}" class="btn btn-info" role="button">register</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
          
@endsection

<!-- @section('scripts')
@parent
<script type="text/javascript">
$(document).ready(function(){
  $('#vehiclelist').DataTable();
});
</script>
@endsection -->