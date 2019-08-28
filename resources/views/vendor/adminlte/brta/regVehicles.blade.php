@extends('adminlte::layouts.app')

@section('htmlheader_title')
  BRTA - regVehicles
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
    <h3 class="box-title">List of Registered Vehicles</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="vehiclelist" class="table table-bordered table-striped">
      <thead>
             <tr>
          <th>SL. No</th>
          <th>Registration No.</th>
          <th>Fit</th>
          <th>Action</th>
        
        </tr>
      </thead>
      <tbody>
        @foreach($reg_vehicles as $key => $reg_vehicle)
        
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$reg_vehicle->vehicle_registration_no}}</td>
          <td>
            @if($reg_vehicle->vehicleInformation->fit==1)
              Yes
            @else
              No
            @endif
          </td>
          <td><a href="{{route('vehicle.info',['vehicle_no' => $reg_vehicle->vehicle_registration_no])}}" class="btn btn-success" target="_blank" role="button">view</a>&nbsp &nbsp<a href="#" class="btn btn-info" role="button" onclick="return alert('are you sure?')">fit</a></td>
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