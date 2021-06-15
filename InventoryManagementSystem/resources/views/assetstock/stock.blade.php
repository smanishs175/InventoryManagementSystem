@extends('layouts.app')
@section('content')
@include('inc.navbaritems')
    @if(count($assetstock)>0)
    <table class="table lightblue">
            <td style="color:navy; background-color:lightblue">ID</td>
            <td style="color:navy; background-color:lightblue">NAME</td>
            <td style="color:navy; background-color:lightblue">Quantity</td>
            <td style="color:navy; background-color:lightblue">Cost</td>
            <td style="color:navy; background-color:lightblue">Created on</td>
            <td style="color:navy; background-color:lightblue">Updated on</td>
            <td><a href="/assetstock/create" class="btn btn-primary" style="float:right;">Add AssetStock</a></td>
        </tr>
        
        @foreach($assetstock as $asset_stock)
            <tr>
                <td>{{$asset_stock->id}}</td>
                <td><a href="/assetstock/{{$asset_stock->id}}">{{$asset_stock->name}}</a></td>
                <td>{{$asset_stock->quant}}</td>
                <td>{{$asset_stock->cost}}</td>
                <td>{{$asset_stock->created_at}}</td>
                <td>{{$asset_stock->updated_at}}</td>
            </tr>
        @endforeach
    </table>
    @else
        <small>You haven't added any assets</small>
        <a href="/assetstock/create" class="btn btn-primary">Add Asset Stock</a>
    @endif
@endsection