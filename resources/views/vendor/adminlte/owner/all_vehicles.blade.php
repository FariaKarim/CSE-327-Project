@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Owner - All Vehicles
@endsection

@section('htmlheader')
@parent
<style type="text/css">
  
</style>
@endsection

@section('main-content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">List of Your Vehicles</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="vehiclelist" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>SL. No</th>
          <th>Vehicle Licence No</th>
          <th>Fit</th>
          <th>Issued Date</th>
          <th>Expired Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach($all_vehicles as $key => $vehicle)
        <tr>
          <td>{{$key+1}}</td>
          <td><a href="{{route('vehicle.info', ['vehicle_no' => $vehicle->vehicle_registration_no])}}" target="_blank">{{$vehicle->vehicle_registration_no}}</a></td>
          <td>{{$vehicle->vehicleInformation->fit ? 'OK' : 'Not OK'}}</td>
          <td>{{$vehicle->issued_date}}</td>
          <td>{{$vehicle->expired_date}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
          
@endsection

@section('scripts')
@parent
<script type="text/javascript">
$(document).ready(function(){
  $('#vehiclelist').DataTable();
});
</script>
@endsection