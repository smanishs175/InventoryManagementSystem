@extends('layouts.app')

@section('content')
@include('inc.navbaritems')
    @if(count($assets)>0)
    <table class="table table-striped">
        <tr>
            <td style="color:navy; background-color:lightblue">Asset Id</td>
            <td style="color:navy; background-color:lightblue">Asset name</td>
            <td style="color:navy; background-color:lightblue">Cost</td>
            <td style="color:navy; background-color:lightblue">Created on</td>
            <td style="color:navy; background-color:lightblue">Updated on</td>
            <td> <a href="/assets/create" class="btn btn-primary" style="float:right;">Add Asset</a></td>
        </tr>
       
        @foreach($assets as $asset)
        <tr>
            <td>{{$asset->id}}</td>
            <td><a href="/assets/{{$asset->id}}">{{$asset->name}}</a></td>
            <td>{{$asset->cost}}</td>
            <td>{{$asset->created_at}}</td>
            <td>{{$asset->updated_at}}</td>   
        </tr>
        @endforeach
    </table>
    @else
        <small>You haven't added any assets</small>
        <a href="/assets/create" class="btn btn-primary">Add Asset</a>
    @endif
@endsection