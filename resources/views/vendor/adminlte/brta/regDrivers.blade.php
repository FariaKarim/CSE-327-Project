@extends('adminlte::layouts.app')

@section('htmlheader_title')
  BRTA - regDrivers
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
    <h3 class="box-title">List of Registered Drivers</h3>
  </div>

  <!-- /.box-header -->
  <div class="box-body">
    <table id="vehiclelist" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>SL. No</th>
          <th>License No.</th>
          <th>Fit</th>
          <th>Police Verified</th>
          <th>Action</th>
        
        </tr>
      </thead>
      <tbody>
       @foreach($reg_drivers as $key => $reg_driver) 
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$reg_driver->driving_licence_no}}</td>
          <td>{{$reg_driver->driverInformation->fit}} </td>
          <td>{{$reg_driver->driverInformation->police_verified}} </td>
          <td><a href="{{route('driver.info',['driving_licence' => $reg_driver->driving_licence_no])}}" class="btn btn-success" role="button">view</a></td>
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