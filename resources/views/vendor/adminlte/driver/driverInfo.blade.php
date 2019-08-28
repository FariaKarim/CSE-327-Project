@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Driver - Information
@endsection

@section('htmlheader')
@parent
<style>

</style>
@endsection

@section('main-content')
      <div class="row">
      
        <!-- /.col -->

        <div class="col-md-6">
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
          <b>Name:</b>
        </div>
        <!-- /.box-body -->
       
        <!-- /.box-footer-->
        <div class="box-footer">
          <b>Father's name:</b>
        </div>
         <div class="box-footer">
          <b>Mother's name:</b>
        </div>
         <div class="box-footer">
          <b>Spouse name:</b>
        </div>
         <div class="box-footer">
          <b>Date of birth:</b>
        </div>
         <div class="box-footer">
          <b>Email:</b>
        </div>
         <div class="box-footer">
          <b>Personal address:</b>
        </div>
         <div class="box-footer">
          <b>Present address:</b>
        </div>
         <div class="box-footer">
          <b>Phone number:</b>
        </div>
         <div class="box-footer">
          <b>Citizenship:</b>
        </div>
         <div class="box-footer">
          <b>National ID number:</b>
        </div>
         <div class="box-footer">
          <b>Passport:</b>
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
          <b>Headache:</b>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <b>Visual condition:</b>
        </div>
         <div class="box-footer">
          <b>Traffic sign:</b>
        </div>
         <div class="box-footer">
          <b>Hearing:</b>
        </div>
         
        <!-- /.box-footer-->
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
        <div class="box-body">
          <b>Application ID:</b>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <b>Application type:</b>
        </div>
         <div class="box-footer">
          <b>Vehicle class:</b>
        </div>
         <div class="box-footer">
          <b>License type:</b>
        </div>
         <div class="box-footer">
          <b>Bank transaction number:</b>
        </div>
         <div class="box-footer">
          <b>Police verified:</b>
        </div>
        
        <!-- /.box-footer-->
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
          <b>Driver ID:</b>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <b>Issued date:</b>
        </div>
         <div class="box-footer">
          <b>Expired date:</b>
        </div>
        
        <!-- /.box-footer-->
      </div>
    </div>
  </div>
      <!-- /.box -->
      

      </section>
    </div>
@endsection