@extends('layouts.app')

@section('content')
<div class="modal-body">
       {{-- {!! Form::open(['action'=>['MembersController@updatepass',$member->id],'method'=>'POST']) !!}--}}
       {!! Form::open(['action'=>['MembersController@update',$member_id],'method'=>'POST']) !!}
       <div class="form-group">
            {{Form::label('password','Password')}}
            {{Form::password('password')}}
        </div>
        
            {{Form::hidden('_method','PUT')}}

            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
</div>
@endsection