@extends('adminlte::layouts.app')

@section('htmlheader_title')
  BRTA - accidents
@endsection

@section('htmlheader')
@parent
<style>

</style>
@endsection

@section('main-content')
      <div class="row">
      
        <!-- /.col -->

        <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Daily</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Weekly</a></li>
              <li><a href="#tab_3-2" data-toggle="tab">Yearly</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('vehicles')}}">Vehicles</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('dLicenses')}}">Driving Licenses</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('drivers')}}">Drivers</a></li>
                  
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('accidents')}}">Accidents</a></li>
                </ul>
              </li>
              <li class="pull-left header"><i class="fa fa-th"></i> Accidents</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
               <!-- tab table-->
               <section class="content">
      <div class="row">
        
          <div class="box">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                   <th>Driver ID</th>
                  <th>Vehicle ID</th>
                   <th>Accident Date and Time</th>
                    <th>Longitude</th>
                      <th style="width: 40px">Latitude</th>
                  
                </tr>
                <tr>
                  <td>1.</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#tab_1-1" data-toggle="tab">1</a></li>
             


              <!---  <li><a href="#">1</a></li>
                <li><a href="#">2</a></li> -->
               
              </ul>
            </div>
          </div>
  </div>
  <!-- tab table end -->
              </div>
              <!-- /.tab-pane -->
            
              <div class="tab-pane" id="tab_2-2">
               <section class="content">
      <div class="row">
        
          <div class="box">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
               
                   <th>Driver ID</th>
                  <th>Vehicle ID</th>
                   <th>Accident Date and Time</th>
                    <th>Longitude</th>
                      <th style="width: 40px">Latitude</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                
                <li><a href="#tab_2-2" data-toggle="tab">1</a></li>
                
              </ul>
            </div>
          </div>
        </div>
        <!-- tab table end-->
              </div>
              <!-- /.tab-pane -->
               
              <div class="tab-pane" id="tab_3-2">
                <section class="content">
      <div class="row">
        
          <div class="box">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Driver ID</th>
                  <th>Vehicle ID</th>
                  <th>Year</th>
                   <th>Accident Date and Time</th>
                    <th>Longitude</th>
                      <th style="width: 40px">Latitude</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#tab_3-2" data-toggle="tab">1</a></li>
              </ul>
            </div>
          </div>
  </div>
  <!-- tab table end -->
              </div>
              <!-- /.tab-pane -->
              
              <!-- end of yearly -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
     <!--- table start--->
    
    <!-- /.content -->
  </div>
@endsection