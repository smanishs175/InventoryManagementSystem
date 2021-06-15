@extends('layouts.app')
@section('content')
@include('inc.navmem')
<h1>{{$member->name}}</h1>
<p><br><b>Role:</b>{{$member->role}}
<br><b>Created On:</b>{{$member->created_at}}
<br><b>Last Updated On:</b>{{$member->updated_at}}
<br><b>Email:</b>{{$member->email}}
<br><b>Phone Number:</b>
</p> 
<br><br><a href="#" class="btn btn-info"  data-toggle="modal" data-target="#myModal">Edit</a>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            {!! Form::open(['action'=>['MembersController@update',$member->id],'method'=>'PUT']) !!}
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name',$member->name,['class'=>'form-control','placeholder'=>'Name'])}}
            </div>
            <div class="form-group">
                    {{Form::label('email', 'Email')}}
                    {{Form::textarea('email', $member->email, ['class' => 'form-control', 'placeholder' => 'Your Email ID'])}}
            </div>
           <div class="form-group">
                    {{--{{Form::label('role', 'Role')}}
                    {{Form::textarea('role', $member->role, ['class' => 'form-control', 'placeholder' => 'Your Role'])}}--}}
                       
                          <select class="form control" name="role" id="role">
                          <option value="0">Owner</option>
                          <option value="1">Admin</option>
                          <option value="2">Staff-User</option>
                        </select>
            {{--<div class="form-group">
                    {{Form::label('user_id', 'User ID')}}
                    {{Form::textarea('user_id', $member->user_id, ['class' => 'form-control', 'placeholder' => 'Your USER ID'])}}
            </div>--}}
            
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
        {{--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>--}}
      </div>
      
    </div>
  </div>
@endsection