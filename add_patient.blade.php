@extends('layouts.new_layout')

@section('content')
<div class="container" style="padding-top: 150px;padding-bottom: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patient Register</div>

                <div class="card-body">
                   <form action="save_package_info" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label>Name</label>
                        <select class="form-control" name="name">
                          <option>Select</option>
                          @foreach($datas as $d)
                             <option value="{{$d->id}}">{{$d->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label >Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email">
                      </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password"  placeholder="Password">
                        
                      </div>
                        <div class="form-group">
                        <label>Address/label>
                        <input type="text" class="form-control" name="address"  placeholder="Address">
                        
                      </div>
                       <div class="form-group">
                        <label>Birth-Date</label>
                        <input type="text" class="form-control" name="birth_date"  placeholder="Enter Birth-Date">
                        
                      </div>
                        <div class="form-group">
                        <label>Blood Group</label>
                        <input type="text" class="form-control" name="blood_group"  placeholder="Enter blood-group">
                        
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
