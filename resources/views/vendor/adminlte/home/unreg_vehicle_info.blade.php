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
@if($unreg_vehicles!=null)
<div class="row">
  <div class="col-md-6">
    <img src="{{$unreg_vehicles->information->image}}" class="img-responsive image">
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
        <b>Name:</b> {{$unreg_vehicles->information->first_name}} {{$unreg_vehicles->information->last_name}}
      </div><!-- /.box-body -->
       
      <!-- /.box-footer-->
      <div class="box-footer">
        <b>Father's name:</b> {{$unreg_vehicles->information->father_name}}
      </div>
       <div class="box-footer">
        <b>Mother's name:</b> {{$unreg_vehicles->information->mother_name}}
      </div>
       <div class="box-footer">
        <b>Spouse name:</b> {{$unreg_vehicles->information->spouse_name}}
      </div>
       <div class="box-footer">
        <b>Date of birth:</b> {{$unreg_vehicles->information->birth_date}}
      </div>
       <div class="box-footer">
        <b>Email:</b> {{$unreg_vehicles->information->email}}
      </div>
       <div class="box-footer">
        <b>Permanent address:</b> {{$unreg_vehicles->information->permanent_address}}
      </div>
       <div class="box-footer">
        <b>Present address:</b> {{$unreg_vehicles->information->present_address}}
      </div>
       <div class="box-footer">
        <b>Phone number:</b> {{$unreg_vehicles->information->phone_number}}
      </div>
       <div class="box-footer">
        <b>Citizenship:</b> {{$unreg_vehicles->information->citizen}}
      </div>
       <div class="box-footer">
        <b>National ID number:</b> {{$unreg_vehicles->information->nid}}
      </div>
       <div class="box-footer">
        <b>Passport:</b> {{$unreg_vehicles->information->passport}}
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
        <b>Tyre Size:</b> {{$unreg_vehicles->tyre_size}} 
      </div>
       <div class="box-footer">
        <b>Vehicle class:</b> {{$unreg_vehicles->class}} 
      </div>
       <div class="box-footer">
        <b>Chasis No:</b> {{$unreg_vehicles->chasis_no}} 
      </div>
      <div class="box-footer">
        <b>Fuel used:</b> {{$unreg_vehicles->fuel_used}} 
      </div>
       <div class="box-footer">
        <b>Horse power:</b> {{$unreg_vehicles->horse_power}} 
      </div>
      <div class="box-footer">
        <b>RPM:</b> {{$unreg_vehicles->rpm}} 
      </div>
      <div class="box-footer">
        <b>Seats:</b> {{$unreg_vehicles->seats}} 
      </div>
      <div class="box-footer">
        <b>Cubic capacity:</b> {{$unreg_vehicles->cubic_capacity}} 
      </div>
      <div class="box-footer">
        <b>Standee no:</b> {{$unreg_vehicles->standee_no}} 
      </div>
      <div class="box-footer">
        <b>No of cylinders:</b> {{$unreg_vehicles->no_of_cylinders}} 
      </div>
      <div class="box-footer">
        <b>Weight:</b> {{$unreg_vehicles->weight}} 
      </div>
      <div class="box-footer">
        <b>Engine no:</b> {{$unreg_vehicles->engine_no}} 
      </div>
      <div class="box-footer">
        <b>Body type:</b> {{$unreg_vehicles->body_type}} 
      </div>
      <div class="box-footer">
        <b>Manufacture year:</b> {{$unreg_vehicles->year_of_manufacture}}
      </div>
      <div class="box-footer">
        <b>Made by:</b> {{$unreg_vehicles->maker_name}} ({{$unreg_vehicles->makers_country}})
      </div>
      <div class="box-footer">
        <b>Fit:</b> {{$unreg_vehicles->fit ? 'OK' : 'Not OK'}} 
      </div><!-- /.box-footer-->
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