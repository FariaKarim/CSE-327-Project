@extends('adminlte::layouts.app')

@section('htmlheader_title')
  BRTA - Vehicles
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
    <h3 class="box-title">List of Unregistered Vehicles</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="vehiclelist" class="table table-bordered table-striped">
      <thead>

        <tr>
          <th>SL. No</th>
          <th>Vehicle ID</th>
          <th>Vehicle Owner Name</th>
          <th>Action</th>
      
        </tr>
      </thead>
      <tbody>
        <?php  
          $i=0;
        ?>
      @foreach($unreg_vehicles as $key => $unreg_vehicle) 
        <tr>
          <?php 
               $i=$i+1;
           ?>
          <td>{{$i}}</td>
          <td>{{$unreg_vehicle->id}}</td>
          <td>{{$unreg_vehicle->information->first_name}} {{$unreg_vehicle->information->last_name}}</td>
          <td><a href="{{route('unreg.vehicle.info',['vehicle_id' => $unreg_vehicle->id])}}" class="btn btn-success" role="button">view</a>&nbsp &nbsp<a href="{{route('regFormVehicles',['vehicle_id' => $unreg_vehicle->id])}}" class="btn btn-info" role="button">register</a></td>
        
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