@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Settings - Assign Role
@endsection

@section('htmlheader')
@parent
<style>

</style>
@endsection

@section('main-content')
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
          <h3 class="box-title">Assign Role to User</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="" method="post">
        {!! csrf_field() !!}
          <div class="box-body">
            <div class="form-group">
              <label for="user"><b>User Name : </b><i>Only activated users</i></label>
              <select class="form-control" name="user" >
              @foreach($users as $user)
                <option value="{{$user->name}}">{{$user->name}}</option>
              @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="role"><b>Role : </b></label>
              <select class="form-control" name="role">
                <option value="brta">BRTA</option>
                <option value="user">User</option>
                <option value="driver">Driver</option>
                <option value="malik">Vehicle Owner</option>
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
$(document).ready(function(){
    $(".assign").on('submit', function(event){
      //console.log(12);
      var x = confirm("Are you sure you want to assign this role to this user?");
      if (x) {
          return true;
      }else {
        event.preventDefault();
        return false;
      }
    });
});  
</script>
@endsection
