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
@if($unreg_drivers!=null)
<div class="row">
  <div class="col-md-6">
    <img src="{{$unreg_drivers->information->image}}" class="img-responsive image">
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
        <b>Name:</b> {{$unreg_drivers->information->first_name}} {{$unreg_drivers->information->last_name}}
      </div><!-- /.box-body -->
       
      <!-- /.box-footer-->
      <div class="box-footer">
        <b>Father's name:</b> {{$unreg_drivers->information->father_name}}
      </div>
       <div class="box-footer">
        <b>Mother's name:</b> {{$unreg_drivers->information->mother_name}}
      </div>
       <div class="box-footer">
        <b>Spouse name:</b> {{$unreg_drivers->information->spouse_name}}
      </div>
       <div class="box-footer">
        <b>Date of birth:</b> {{$unreg_drivers->information->birth_date}}
      </div>
       <div class="box-footer">
        <b>Email:</b> {{$unreg_drivers->information->email}}
      </div>
       <div class="box-footer">
        <b>Permanent address:</b> {{$unreg_drivers->information->permanent_address}}
      </div>
       <div class="box-footer">
        <b>Present address:</b> {{$unreg_drivers->information->present_address}}
      </div>
       <div class="box-footer">
        <b>Phone number:</b> {{$unreg_drivers->information->phone_number}}
      </div>
       <div class="box-footer">
        <b>Citizenship:</b> {{$unreg_drivers->information->citizen}}
      </div>
       <div class="box-footer">
        <b>National ID number:</b> {{$unreg_drivers->information->nid}}
      </div>
       <div class="box-footer">
        <b>Passport:</b> {{$unreg_drivers->information->passport}}
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
        <b>Headache:</b> {{$unreg_drivers->driverFitness->headache ? 'OK' : 'Not OK'}}
      </div><!-- /.box-body -->
      <div class="box-footer">
        <b>Visual condition:</b> {{$unreg_drivers->driverFitness->visual_condition ? 'OK' : 'Not OK'}}
      </div>
       <div class="box-footer">
        <b>Traffic sign:</b> {{$unreg_drivers->driverFitness->traffic_sign ? 'OK' : 'Not OK'}}
      </div>
       <div class="box-footer">
        <b>Hearing:</b> {{$unreg_drivers->driverFitness->hearing ? 'OK' : 'Not OK'}}
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
        <b>Application type:</b> {{$unreg_drivers->application_type}}
      </div>
       <div class="box-footer">
        <b>Vehicle class:</b> {{$unreg_drivers->vehicle_class}}
      </div>
       <div class="box-footer">
        <b>License type:</b> {{$unreg_drivers->licence_type}}
      </div>
       <div class="box-footer">
        <b>Bank transaction number:</b> {{$unreg_drivers->bank_transaction_no}}
      </div>
       <div class="box-footer">
        <b>Police verified:</b> {{$unreg_drivers->police_verified ? 'OK' : 'Not OK'}}
      </div><!-- /.box-footer-->
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