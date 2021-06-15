@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'GroupsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name','Group Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Group Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection