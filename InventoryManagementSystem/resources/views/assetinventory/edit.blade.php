@extends('layouts.app')
@include('inc.navbaritems')

@section('content')
    {!! Form::open(['action'=>['AssetInventorysController@update',$assetinventory->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('name','Asset Stock Name')}}
        {{Form::text('name',$assetinventory->name,['class'=>'form-control','placeholder'=>'Asset Inventory Name'])}}
    </div>
    <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $assetinventory->body, ['class' => 'form-control', 'placeholder' => 'Description'])}}
    </div>
    <div class="form-group">
        {{Form::label('cost', 'Price')}}
        {{Form::text('cost', $assetinventory->cost, ['class' => 'form-control', 'placeholder' => 'Price'])}}
    </div>
    <div class="form-group">
    {{Form::label('quant', 'Quantity')}}
    {{Form::text('quant', $assetinventory->quant, ['class' => 'form-control', 'placeholder' => 'Quantity'])}}
     </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection