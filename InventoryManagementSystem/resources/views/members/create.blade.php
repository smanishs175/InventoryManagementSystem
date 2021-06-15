@extends('layouts.app')
@section('content')
<h1> Add New Member</h1>
{!! Form::open(['action' => 'MembersController@store','method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name','',['class'=>'form control','placeholder'=>'Name'])}}
</div>
<div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::text('email','',['class'=>'form control','placeholder'=>'Email Id'])}}
</div>
<div class="form-group">
    {{Form::label('password','Password')}}
    {{Form::password('password')}}
</div>

<div class="form-group">
        <select class="form control" name="role" id="role">
                <option value="1">Admin</option>
                <option value="2">Staff-User</option>
              </select>
</div>
{{--<div class="form-group">
    {{Form::label('user_id','Id')}}
    {{Form::text('user_id','',['class'=>'form control','placeholder'=>'User Id'])}}
</div>--}}

   {{Form::submit('submit',['class'=>'btn btn-primary'])}}
        
{!! Form::close() !!}
    
@endsection

