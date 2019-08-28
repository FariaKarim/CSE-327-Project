@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Owner - Register Daily Vehicle
@endsection

@section('htmlheader')
@parent
<style type="text/css">
  
</style>
@endsection

@section('main-content')
{{-- error show --}}
@if(count($errors) > 0)
<div class="row">
<div class="col-xs-12">
    <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    </div>
</div>    
</div>
@endif

{{-- success show --}}
@if(Session::has('success'))
<div class="row">
<div class="col-xs-12">
    <div class="alert alert-success">
        <p> {!! Session::get('success') !!} </p>
    </div>
</div>
</div>
@endif

<div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Register Your Vehicle Today</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="" method="post">
        {!! csrf_field() !!}
          <div class="box-body">
            <div class="form-group">
              <label for="vehicle"><b>Your Vehicle : </b></label>
              <select class="form-control" name="vehicle" >
              	<option value="">Select Your Vehicle</option>
              @foreach($vehicle_list as $vehicle)
                <option value="{{$vehicle->id}}">{{$vehicle->vehicle_registration_no}}</option>
              @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="driver"><b>Driver : </b></label>
              <select class="form-control" name="driver" >
              	<option value="">Select Your Vehicle's Driver</option>
              @foreach($driver_list as $driver)
                <option value="{{$driver->id}}">{{$driver->driverInformation->information->first_name}} {{$driver->driverInformation->information->last_name}} ({{$driver->driving_licence_no}})</option>
              @endforeach
              </select>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary assign">Submit</button>
          </div>
        </form>
      </div>         
    </div>
</div>


@endsection

@section('scripts')
@parent
<script type="text/javascript">
  
</script>
@endsection