<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 	
    <table class="table table-striped">
        <thead>
        <tr>
          <th>Ticket No</th>
          <th>Student ID</th>
          <th>Opened By</th>
          <th>Assigned To</th>
          <th>Created At</th>
          <th>Status</th>
          <th>Case Type</th>
          <th>Final Discussion</th>
          <th>Discussions</th>
        </tr>
        </thead>
        <tbody>
        @if(!is_null($cases)) 
        @foreach($cases as $case1)
        @foreach($case1->users as $users)
        @if(!is_null($case1) && !is_null($users))  
        <tr id="{{ $case1->id }}">
          <td>{{$case1->ticket_no}}</td>
          <td>{{$case1->student_id}}</td>
          <td>{{Auth::user()->userName($case1->opened_by)}}</td>
          <td>
          @foreach($case1->users as $assigned_to)
            {{Auth::user()->userName($assigned_to->id)}},                
          @endforeach
          </td>
          <td>{{$case1->created_at}}</td>
          @if($case1->current_status == 'open')
          <td style="color:green;"><b>{{$case1->current_status}}</b></td>
          @else
          <td style="color:red;"><b>{{$case1->current_status}}</b></td>
          @endif
          <td>{{$case1->caseType->name}}</td>
          <td>@if(!empty($case1->final_date))<p>Date: {{$case1->final_date}}</p> <p>Comment: {{$case1->final_comment}}</p>@endif</td>
          @foreach($case1->caseComments as $comment)
          <td>@if(!empty($comment->date)) <p>Date: {{$comment->date}}</p> <p>Comment: {{$comment->comment}}</p> <p>Commented By: {{Auth::user()->userName($comment->commented_by)}}</p> @endif</td>
          @endforeach  
        </tr> 
        @endif
        @break            
        @endforeach
        @endforeach
        @endif
        </tbody>
    </table> 

</html>