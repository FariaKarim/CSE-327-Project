<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 	
    <div class="row">
    <div class="col-xs-12">
            <div class="form-group">
              <label for="ticket_no"><h3><b>Ticket No : </b>{{$case1->ticket_no}}</h3></label>
            </div>
            <div class="form-group">
              <label for="student_id"><b>Student ID : </b>{{$case1->student_id}}</label>
            </div>
            <div class="form-group">
              <label for="student_name"><b>Student Name : </b>{{$case1->student_name}}</label>
            </div>
            <div class="form-group">
              <label for="case_type"><b>Case Type : </b>{{$case_type}}</label>
            </div>
            @if($case1->dc_approved)
            <div class="form-group">
              <label for="case_type"><b>DC Approved : </b> Yes</label>
            </div>
            @endif
            <div class="form-group">
              <label for="opened_by"><b>Ticket Opened By : </b>{{Auth::user()->userName($case1->opened_by)}}</label>
            </div>
            <div class="form-group">
              <label for="assigned_to"><b>Ticket Assigned To : </b>
              @foreach($case1->users as $assigned_to)
                {{Auth::user()->userName($assigned_to->id)}},
              @endforeach
              </label>
            </div>
            <div class="form-group">
              <label for="issue"><b>Issue : </b>{{ $case1->issue }}</label>
            </div>
            <div class="form-group">
              <label for="current_status"><b>Status : </b>{{$case1->current_status}}</label>
            </div>
            <div class="form-group">
              <label for="comments"><b>Comments/Discussions : </b></label>
              <table class="table table-bordered">
                <thead>
                <tr>
                  <th style="width:80%;">Comment/Discussion</th>
                  <th style="width:20%;">Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($case_comments as $case_comment)
                <tr>
                  <td>{{$case_comment->comment}}</td>
                  <td>{{$case_comment->date}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <div class="form-group">
              <label for="final_comment"><b>Final Comment/Discussion : </b></label>
              <table class="table table-bordered">
                <thead>
                <tr>
                  <th style="width:80%;">Comment/Discussion</th>
                  <th style="width:20%;">Date</th>
                </tr>
                </thead>
                <tbody>
                  <td>{{$case1->final_comment}}</td>
                  <td>{{$case1->final_date}}</td>
                </tr>
                </tbody>
              </table>
            </div>       
    </div>
    </div>

</html>