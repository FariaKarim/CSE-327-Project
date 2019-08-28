@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Settings - Deactivate User
@endsection

@section('htmlheader')
@parent
<style>
th, td{
    text-align: center;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
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
          <h3 class="box-title"><b>Deactivate User</b></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="get" action="">
        <div class="input-group margin">
          <input type="text" class="form-control" name="name" placeholder="search by user's name or email">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-info btn-flat">Search</button>
              </span>
        </div>
        </form>
        <div class="box-body no-padding">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>BRTA</th>
              <th>User</th>
              <th>Driver</th>
              <th>Vehicle Owner</th>
              <th>Activate</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr id="{{ $user->name }}">
              <td>
              {{-- <form action="" method="POST">
              {!! csrf_field() !!} --}}
              {{-- <a href="{{route('user.profile', ['id' => $user->id])}}">{{ $user->name }} </a> <input type="hidden" name="name" value="{{ $user->name }}">--}}
              {{ $user->name }}
              </td>
              <td>{{ $user->email }}</td>
              <td><input type="checkbox" {{ $user->hasRole('brta') ? 'checked' : '' }} disabled></td>
              <td><input type="checkbox" {{ $user->hasRole('user') ? 'checked' : '' }} disabled></td>
              <td><input type="checkbox" {{ $user->hasRole('driver') ? 'checked' : '' }} disabled></td>
              <td><input type="checkbox" {{ $user->hasRole('malik') ? 'checked' : '' }} disabled></td>
              <td><input type="checkbox" {{ $user->activated ? 'checked' : '' }} disabled></td>
              {{-- <td><button class="btn btn-primary btn-xs" type="submit">Assign Roles</button>
              </form>
              </td> --}}
              
              <td>              
              <form method="POST" action="" class="delete">
              {{-- {{method_field('DELETE')}} --}}
              {!! csrf_field() !!}
              @if($user->activated)
              <button type="submit" class="btn btn-danger btn-xs delete">Deactivate</button>
              <input type="hidden" name="activated" value="0">
              @else
              <button type="submit" class="btn btn-success btn-xs delete">Activate</button>
              <input type="hidden" name="activated" value="1">
              @endif
              <input type="hidden" name="name" value="{{ $user->name }}">
              </form>
              </td>
            </tr>  

            @endforeach
            </tbody>
          </table> 
        </div>
      </div>          
    </div>
    </div>
    <center>
    {{ $users->links() }}
    </center>
@endsection

@section('scripts')
@parent
<script type="text/javascript">
$(document).ready(function(){
    var token = "{{Session::token()}}";
    var activated = $("input[name='activated']").val();
    $(".delete").on('submit', function(event){
      //console.log(12);
      var x = confirm("Are you sure you want to perform this action?");
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
