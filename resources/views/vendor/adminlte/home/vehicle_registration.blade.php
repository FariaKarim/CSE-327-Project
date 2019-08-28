@extends('adminlte::layouts.landing')

@section('htmlheader_title')
  Vehicle Registration Form
@endsection

@section('htmlheader')
@parent
<style>

</style>
@endsection

@section('content')
{{-- error show --}}
@if (count($errors) > 0)
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
          <h2 class="box-title text-center">Vehicle Registration Form</h2>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="" method="post">
        {!! csrf_field() !!}
          <div class="box-body">
          	<div class="col-md-6">
          		<div class="form-group">
	              <label for="first_name"><b>Owner Username : </b><i>(if owned a registered vehicle before)</i></label>
	              <input type="text" class="form-control" name="username" >
	            </div>
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
	            <div class="form-group">
	              <label for="fuel_used"><b>Fuel Used : </b></label>
	              <input type="text" class="form-control" name="fuel_used" required>
	            </div>
	            <div class="form-group">
	              <label for="tyre_size"><b>Tyre Size : </b></label>
	              <input type="text" class="form-control" name="tyre_size" required>
	            </div>
        	</div>
        	<div class="col-md-6">
	            <div class="form-group">
	              <label for="class"><b>Class : </b></label>
	              <input type="text" class="form-control" name="class" required>
	            </div>
	            <div class="form-group">
	              <label for="chasis_no"><b>Chasis No : </b></label>
	              <input type="text" class="form-control" name="chasis_no" required>
	            </div>
	            <div class="form-group">
	              <label for="horse_power"><b>Horse Power : </b></label>
	              <input type="text" class="form-control" name="horse_power" required>
	            </div>
	            <div class="form-group">
	              <label for="rpm"><b>RPM : </b></label>
	              <input type="text" class="form-control" name="rpm" required>
	            </div>
	            <div class="form-group">
	              <label for="seats"><b>Seats : </b></label>
	              <input type="text" class="form-control" name="seats" required>
	            </div>
	            <div class="form-group">
	              <label for="cubic_capacity"><b>Cubic Capacity : </b></label>
	              <input type="text" class="form-control" name="cubic_capacity" required>
	            </div>
	            <div class="form-group">
	              <label for="standee_no"><b>Standee No : </b></label>
	              <input type="text" class="form-control" name="standee_no" required>
	            </div>
	            <div class="form-group">
	              <label for="no_of_cylinders"><b>No of Cylinders : </b></label>
	              <input type="text" class="form-control" name="no_of_cylinders" required>
	            </div>
	            <div class="form-group">
	              <label for="weight"><b>Weight : </b></label>
	              <input type="text" class="form-control" name="weight" required>
	            </div>
	            <div class="form-group">
	              <label for="engine_no"><b>Engine No : </b></label>
	              <input type="text" class="form-control" name="engine_no" required>
	            </div>
	            <div class="form-group">
	              <label for="body_type"><b>Body Type : </b></label>
	              <input type="text" class="form-control" name="body_type" required>
	            </div>
	            <div class="form-group">
	              <label for="makers_country"><b>Country of Makers : </b></label>
	              <input type="text" class="form-control" name="makers_country" required>
	            </div>
	            <div class="form-group">
	              <label for="maker_name"><b>Name of Makers : </b></label>
	              <input type="text" class="form-control" name="maker_name" required>
	            </div>
	            <div class="form-group">
	              <label for="year_of_manufacture"><b>Year of Manufacture: </b></label>
	              <input type="text" class="form-control" name="year_of_manufacture" required>
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