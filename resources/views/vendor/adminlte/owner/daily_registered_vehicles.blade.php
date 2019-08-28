@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Owner - Registered Vehicles
@endsection

@section('htmlheader')
@parent
<style>

</style>
@endsection

@section('main-content')
<div class="row">
  <div class="col-md-12">
    <a href="{{route('register.daily-vehicle')}}" class="btn btn-info btn-block" style="margin-bottom: 10px;" role="button">Register Your Vehicle</a>
  </div>
</div>

{{-- table --}}
<div class="box">
  <div class="box-header">
    <h3 class="box-title">List of Your Daily Vehicles</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="vehiclelist" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>SL. No</th>
          <th>Vehicle Licence No</th>
          <th>Driver Name</th>
          <th>Driver Licence</th>
          <th>Issued Date</th>
          <th>Issued Month</th>
        </tr>
      </thead>
      <tbody>
        @foreach($daily_vehicles as $key => $daily_vehicle)
        <tr>
          <td>{{$key+1}}</td>
          <td><a href="{{route('vehicle.info', ['vehicle_no' => $daily_vehicle->vehicle->vehicle_registration_no])}}" target="_blank">{{$daily_vehicle->vehicle->vehicle_registration_no}}</a></td>
          <td><a href="{{route('driver.info', ['diving_licence' => $daily_vehicle->driver->driving_licence_no])}}" target="_blank">{{$daily_vehicle->driver->driverInformation->information->first_name}} {{$daily_vehicle->driver->driverInformation->information->last_name}}</a></td>
          <td>{{$daily_vehicle->driver->driving_licence_no}}</td>
          <td>{{$daily_vehicle->issued_date}}</td>
          <td>{{Carbon\Carbon::parse($daily_vehicle->issued_date)->format('F')}}</td>
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