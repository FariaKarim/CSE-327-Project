<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 	
    <table class="table table-striped">
      <thead>
      <tr>
        <th>Areas to Surveil</th>
        <th>Date</th>
        <th>Submitted By</th>
        <th>Comments</th>
        <th>Time</th>
      </tr>
      </thead>
      <tbody>
      @foreach($areas as $area)
      @if(!is_null($area))
      <tr id="{{ $area->id }}">
        <td><b>{{$area->area_name}} : </b></td>
      </tr>
      @foreach($area_surveillances as $area_surveillance) 
      @if(!is_null($area_surveillance) && $area_surveillance->area_id==$area->id)
      <tr>
        <td></td>
        <td>{{$area_surveillance->date}}</td>
        <td>{{Auth::user()->userName($area_surveillance->submitted_by)}}</td>
        <td>{{$area_surveillance->comment}}</td>
        <td>{{$area_surveillance->time}}</td>
      </tr> 
      @endif
      @endforeach  
      @endif
      @endforeach
      </tbody>
    </table> 

</html>