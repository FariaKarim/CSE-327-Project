@extends('adminlte::layouts.landing')

@section('htmlheader_title')
  Home
@endsection

@section('htmlheader')
@parent
<style>

</style>
@endsection

@section('content')

<div clss="row centered" style="margin-top: 30px;">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header text-center">
                <h1 class="box-title">Daily Vehicles</h1>
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