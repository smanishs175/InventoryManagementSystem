@extends('layouts.app')
@section('content')
@include('inc.navbaritems')

<h1>{{$assetstock->name}}</h1>
<p><br><b>Body : </b>{{$assetstock->body}}
<br><br><b>Created On : </b>{{$assetstock->created_at}}
<br><br><b>Last Updated On : </b>{{$assetstock->updated_at}}
<br><br><b>Price : </b>{{$assetstock->cost}}
<br><br><b>Quantity : </b>{{$assetstock->quant}}
</p> 
{{--<a href="/assetstock/{{$assetstock->id}}/edit" class="btn btn-primary">Edit</a>--}}
<br><br><a href="#" class="btn btn-info"  data-toggle="modal" data-target="#myModal">Edit</a>
<a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#myModald">Delete</a>
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
            {!! Form::open(['action'=>['AssetStocksController@update',$assetstock->id],'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name',$assetstock->name,['class'=>'form-control','placeholder'=>'Asset Stock Name'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body', 'Description')}}
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
        </div>
        {{--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>--}}
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModald" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            <h3>Are you sure?</h3>
        </div>
        <div class="modal-footer">
          {!!Form::open(['action'=>['AssetStocksController@destroy',$assetstock->id],'method'=>'POST','class'=>'float-right:200px'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Confirm',['class'=>'btn btn-primary'])}}
                {{--<a href="/Assetstocks/confirm" class="btn btn-danger">Delete</a> --}}
                {{Form::close()}}
        </div>
      </div>
      
    </div>
  </div>
    {{--&nbsp;&nbsp;&nbsp;<a href="/assets/{{$asset->id}}/check_out" class="btn btn-info" >Check Out</a>--}}
@endsection