@extends('adminlte::layouts.landing')

@section('htmlheader_title')
  Driver Information
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
@if($driver!=null)
<div class="row">
  <div class="col-md-6">
    <img src="{{$driver->driverInformation->information->image}}" class="img-responsive image">
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
        <b>Name:</b> {{$driver->driverInformation->information->first_name}} {{$driver->driverInformation->information->last_name}}
      </div><!-- /.box-body -->
       
      <!-- /.box-footer-->
      <div class="box-footer">
        <b>Father's name:</b> {{$driver->driverInformation->information->father_name}}
      </div>
       <div class="box-footer">
        <b>Mother's name:</b> {{$driver->driverInformation->information->mother_name}}
      </div>
       <div class="box-footer">
        <b>Spouse name:</b> {{$driver->driverInformation->information->spouse_name}}
      </div>
       <div class="box-footer">
        <b>Date of birth:</b> {{$driver->driverInformation->information->birth_date}}
      </div>
       <div class="box-footer">
        <b>Email:</b> {{$driver->driverInformation->information->email}}
      </div>
       <div class="box-footer">
        <b>Permanent address:</b> {{$driver->driverInformation->information->permanent_address}}
      </div>
       <div class="box-footer">
        <b>Present address:</b> {{$driver->driverInformation->information->present_address}}
      </div>
       <div class="box-footer">
        <b>Phone number:</b> {{$driver->driverInformation->information->phone_number}}
      </div>
       <div class="box-footer">
        <b>Citizenship:</b> {{$driver->driverInformation->information->citizen}}
      </div>
       <div class="box-footer">
        <b>National ID number:</b> {{$driver->driverInformation->information->nid}}
      </div>
       <div class="box-footer">
        <b>Passport:</b> {{$driver->driverInformation->information->passport}}
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Physical Fitness Information</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <b>Headache:</b> {{$driver->driverInformation->driverFitness->headache ? 'OK' : 'Not OK'}}
      </div><!-- /.box-body -->
      <div class="box-footer">
        <b>Visual condition:</b> {{$driver->driverInformation->driverFitness->visual_condition ? 'OK' : 'Not OK'}}
      </div>
       <div class="box-footer">
        <b>Traffic sign:</b> {{$driver->driverInformation->driverFitness->traffic_sign ? 'OK' : 'Not OK'}}
      </div>
       <div class="box-footer">
        <b>Hearing:</b> {{$driver->driverInformation->driverFitness->hearing ? 'OK' : 'Not OK'}}
      </div><!-- /.box-footer-->
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
        <b>Application type:</b> {{$driver->driverInformation->application_type}}
      </div>
       <div class="box-footer">
        <b>Vehicle class:</b> {{$driver->driverInformation->vehicle_class}}
      </div>
       <div class="box-footer">
        <b>License type:</b> {{$driver->driverInformation->licence_type}}
      </div>
       <div class="box-footer">
        <b>Bank transaction number:</b> {{$driver->driverInformation->bank_transaction_no}}
      </div>
       <div class="box-footer">
        <b>Police verified:</b> {{$driver->driverInformation->police_verified ? 'OK' : 'Not OK'}}
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
        <b>Driver Licence No:</b> {{$driver->driving_licence_no}}
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <b>Issued date:</b> {{$driver->issued_date}}
      </div>
      <div class="box-footer">
        <b>Expired date:</b> {{$driver->expired_date}}
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
        <h3 class="box-title ">There is no such driver</h3>
      </div>
    </div>
  </div>
</div>
@endif
@endsection