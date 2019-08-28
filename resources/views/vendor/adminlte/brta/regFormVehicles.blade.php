@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Owner - Register Driver
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
          <h3 class="box-title">Register Vehicle</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="" method="post">
         {!! csrf_field() !!}
          <div class="box-body">
            <div class="form-group">
              <label for="vehicle"><b>Vehicle ID : </b></label>
              <select class="form-control" name="vehicle" >
                <option value="">Select Vehicle ID</option>
              @foreach($unreg_vehicles as $unreg_vehicle)
                <option value="{{$unreg_vehicle->id}}">{{$unreg_vehicle->id}}</option>
                 @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="registration"><b>Registration Number : </b></label>
              <input type="text" name="registration">

            </div>
            <!-- <div class="form-group">
              <label for="fit"><b>Fit : </b></label>
              <select class="form-control" name="fit" >
                <option value="1">Yes</option>
             
                <option value="0">No</option>
             
              </select>
            </div> -->
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