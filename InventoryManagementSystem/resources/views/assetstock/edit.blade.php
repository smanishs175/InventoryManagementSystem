@extends('layouts.app')
@include('inc.navbaritems')

@section('content')
    {!! Form::open(['action'=>['AssetStocksController@update',$assetstock->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('name','Asset Stock Name')}}
        {{Form::text('name',$assetstock->name,['class'=>'form-control','placeholder'=>'Asset Stock Name'])}}
    </div>
    <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $assetstock->body, ['class' => 'form-control', 'placeholder' => 'Description'])}}
    </div>
    <div class="form-group">
        {{Form::label('cost', 'Price')}}
        {{Form::text('cost', $assetstock->cost, ['class' => 'form-control', 'placeholder' => 'Price'])}}
    </div>
    <div class="form-group">
    {{Form::label('quant', 'Quantity')}}
    {{Form::text('quant', $assetstock->quant, ['class' => 'form-control', 'placeholder' => 'Quantity'])}}
     </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection