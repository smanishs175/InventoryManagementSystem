@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'AssetsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name','Asset Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Asset Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('cost', 'Price')}}
            {{Form::text('cost', '', ['class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>
        <div class="form-group">
        <select class="form control" label="Group" name="Group" id="group">
                <option value="0">All Groups</option>
        </select>
        <div><a href="/group/create">Add Group</a></div>
              
</div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection