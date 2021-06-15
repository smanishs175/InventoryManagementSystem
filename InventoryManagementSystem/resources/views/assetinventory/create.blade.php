@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'AssetInventorysController@store','method'=>'POST']) !!}
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
        {{Form::label('quant', 'Quantity')}}
        {{Form::text('quant', '', ['class' => 'form-control', 'placeholder' => 'Quantity'])}}
         </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection