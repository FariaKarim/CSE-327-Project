@extends('adminlte::layouts.landing')

@section('htmlheader_title')
  Vehicle Information
@endsection

@section('htmlheader')
@parent
<style>
.image{
  margin-bottom: 20px;
}
</style>
@endsection

@section('content')
@if($vehicle!=null)
<div class="row">
  <div class="col-md-6">
    <img src="{{$vehicle->vehicleInformation->information->image}}" class="img-responsive image">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Personal Information</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <b>Name:</b> {{$vehicle->vehicleInformation->information->first_name}} {{$vehicle->vehicleInformation->information->last_name}}
      </div><!-- /.box-body -->
       
      <!-- /.box-footer-->
      <div class="box-footer">
        <b>Father's name:</b> {{$vehicle->vehicleInformation->information->father_name}}
      </div>
       <div class="box-footer">
        <b>Mother's name:</b> {{$vehicle->vehicleInformation->information->mother_name}}
      </div>
       <div class="box-footer">
        <b>Spouse name:</b> {{$vehicle->vehicleInformation->information->spouse_name}}
      </div>
       <div class="box-footer">
        <b>Date of birth:</b> {{$vehicle->vehicleInformation->information->birth_date}}
      </div>
       <div class="box-footer">
        <b>Email:</b> {{$vehicle->vehicleInformation->information->email}}
      </div>
       <div class="box-footer">
        <b>Permanent address:</b> {{$vehicle->vehicleInformation->information->permanent_address}}
      </div>
       <div class="box-footer">
        <b>Present address:</b> {{$vehicle->vehicleInformation->information->present_address}}
      </div>
       <div class="box-footer">
        <b>Phone number:</b> {{$vehicle->vehicleInformation->information->phone_number}}
      </div>
       <div class="box-footer">
        <b>Citizenship:</b> {{$vehicle->vehicleInformation->information->citizen}}
      </div>
       <div class="box-footer">
        <b>National ID number:</b> {{$vehicle->vehicleInformation->information->nid}}
      </div>
       <div class="box-footer">
        <b>Passport:</b> {{$vehicle->vehicleInformation->information->passport}}
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Application Information</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      
      <div class="box-footer">
        <b>Tyre Size:</b> {{$vehicle->vehicleInformation->tyre_size}} 
      </div>
       <div class="box-footer">
        <b>Vehicle class:</b> {{$vehicle->vehicleInformation->class}} 
      </div>
       <div class="box-footer">
        <b>Chasis No:</b> {{$vehicle->vehicleInformation->chasis_no}} 
      </div>
      <div class="box-footer">
        <b>Fuel used:</b> {{$vehicle->vehicleInformation->fuel_used}} 
      </div>
       <div class="box-footer">
        <b>Horse power:</b> {{$vehicle->vehicleInformation->horse_power}} 
      </div>
      <div class="box-footer">
        <b>RPM:</b> {{$vehicle->vehicleInformation->rpm}} 
      </div>
      <div class="box-footer">
        <b>Seats:</b> {{$vehicle->vehicleInformation->seats}} 
      </div>
      <div class="box-footer">
        <b>Cubic capacity:</b> {{$vehicle->vehicleInformation->cubic_capacity}} 
      </div>
      <div class="box-footer">
        <b>Standee no:</b> {{$vehicle->vehicleInformation->standee_no}} 
      </div>
      <div class="box-footer">
        <b>No of cylinders:</b> {{$vehicle->vehicleInformation->no_of_cylinders}} 
      </div>
      <div class="box-footer">
        <b>Weight:</b> {{$vehicle->vehicleInformation->weight}} 
      </div>
      <div class="box-footer">
        <b>Engine no:</b> {{$vehicle->vehicleInformation->engine_no}} 
      </div>
      <div class="box-footer">
        <b>Body type:</b> {{$vehicle->vehicleInformation->body_type}} 
      </div>
      <div class="box-footer">
        <b>Manufacture year:</b> {{$vehicle->vehicleInformation->year_of_manufacture}}
      </div>
      <div class="box-footer">
        <b>Made by:</b> {{$vehicle->vehicleInformation->maker_name}} ({{$vehicle->vehicleInformation->makers_country}})
      </div>
      <div class="box-footer">
        <b>Fit:</b> {{$vehicle->vehicleInformation->fit ? 'OK' : 'Not OK'}} 
      </div><!-- /.box-footer-->
    </div>
  </div>

  <div class="col-md-6">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Registration Information</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <b>Vehicle Registration No:</b> {{$vehicle->vehicle_registration_no}}
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <b>Issued date:</b> {{$vehicle->issued_date}}
      </div>
      <div class="box-footer">
        <b>Expired date:</b> {{$vehicle->expired_date}}
      </div>
      
      <!-- /.box-footer-->
    </div>
  </div>
</div>
@else
<div class="row">
  <div class="col-md-12">
    <div class="box box-solid box-danger">
      <div class="box-header with-border text-center">
        <h3 class="box-title ">There is no such vehicle</h3>
      </div>
    </div>
  </div>
</div>
@endif
@endsection