@extends('adminlte::layouts.landing')

@section('htmlheader_title')
  Driving Licence Form
@endsection

@section('htmlheader')
@parent
<style>

</style>
@endsection

@section('content')
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
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h2 class="box-title text-center">Driving Licence Form</h2>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="" method="post">
        {!! csrf_field() !!}
          <div class="box-body">
          	<div class="col-md-6">
	            <div class="form-group">
	              <label for="first_name"><b>First Name : </b></label>
	              <input type="text" class="form-control" name="first_name" required>
	            </div>
	            <div class="form-group">
	              <label for="last_name"><b>Last Name : </b></label>
	              <input type="text" class="form-control" name="last_name" required>
	            </div>
	            <div class="form-group">
	              <label for="father_name"><b>Father Name : </b></label>
	              <input type="text" class="form-control" name="father_name" required>
	            </div>
	            <div class="form-group">
	              <label for="mother_name"><b>Mother Name : </b></label>
	              <input type="text" class="form-control" name="mother_name" required>
	            </div>
	            <div class="form-group">
	              <label for="spouse_name"><b>Spouse Name : </b><i>(if any)</i></label>
	              <input type="text" class="form-control" name="spouse_name">
	            </div>
	            <div class="form-group">
	              <label for="gender"><b>Gender : </b></label>
	              <select class="form-control" name="gender" required>
	                <option value="male">Male</option>
	                <option value="female">Female</option>
	              </select>
	            </div>
	            <div class="form-group">
	              <label for="birth_date"><b>Date of Birth : </b></label>
	              <input type="date" class="form-control" name="birth_date" required>
	            </div>
	            <div class="form-group">
	              <label for="nid"><b>NID : </b></label>
	              <input type="text" class="form-control" name="nid" required>
	            </div>
	            <div class="form-group">
	              <label for="passport"><b>Passport : </b></label>
	              <input type="text" class="form-control" name="passport">
	            </div>
	            <div class="form-group">
	              <label for="present_address"><b>Present Address : </b></label>
	              <input type="text" class="form-control" name="present_address" required>
	            </div>
	            <div class="form-group">
	              <label for="permanent_address"><b>Permanent Address : </b></label>
	              <input type="text" class="form-control" name="permanent_address" required>
	            </div>
	            <div class="form-group">
	              <label for="email"><b>Email : </b></label>
	              <input type="email" class="form-control" name="email" required>
	            </div>
	            <div class="form-group">
	              <label for="phone_number"><b>Phone Number : </b></label>
	              <input type="text" class="form-control" name="phone_number" required>
	            </div>
	            <div class="form-group">
	              <label for="citizen"><b>Citizen : </b></label>
	              <input type="text" class="form-control" name="citizen" required>
	            </div>
        	</div>

        	<div class="col-md-6">
	            <div class="form-group">
	              <label for="vehicle_class"><b>Vehicle Class : </b></label>
	              <input type="text" class="form-control" name="vehicle_class" required>
	            </div>
	            <div class="form-group">
	              <label for="application_type"><b>Application Type : </b></label>
	              <input type="text" class="form-control" name="application_type" required>
	            </div>
	            <div class="form-group">
	              <label for="licence_type"><b>Licence Type : </b></label>
	              <input type="text" class="form-control" name="licence_type" required>
	            </div>
	            <div class="form-group">
	              <label for="bank_transaction_no"><b>Bank Transaction No : </b></label>
	              <input type="text" class="form-control" name="bank_transaction_no" required>
	            </div>
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

@endsection