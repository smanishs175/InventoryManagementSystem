@extends('layouts.app')
@section('content')
@include('inc.navbaritems')
    @if(count($assetinventory)>0)
    <table class="table table-bordered" style="width:80%">
            <td style="color:navy; background-color:lightblue">Asset ID</td>
            <td style="color:navy; background-color:lightblue">NAME</td>
            <td style="color:navy; background-color:lightblue">Quantity</td>
            <td style="color:navy; background-color:lightblue">Cost</td>
            <td style="color:navy; background-color:lightblue">Created on</td>
            <td style="color:navy; background-color:lightblue">Updated on</td>
            <a href="/assetinventory/create" class="btn btn-primary float-right" >Add Inventory</a>
            
        </tr>
        
        @foreach($assetinventory as $asset_inventory)
            <tr>
                <td>{{$asset_inventory->id}}</td>
                <td><a href="/assetinventory/{{$asset_inventory->id}}">{{$asset_inventory->name}}</a></td>
                <td>{{$asset_inventory->quant}}</td>
                <td>{{$asset_inventory->cost}}</td>
                <td>{{$asset_inventory->created_at}}</td>
                <td>{{$asset_inventory->updated_at}}</td>
            </tr>
        @endforeach
    </table>
    @else
        <small>You haven't added any assets</small>
        <a href="/assetinventory/create" class="btn btn-primary">Add Asset Invenotry</a>
    @endif
@endsection