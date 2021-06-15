
@extends('layouts.app')
@section('content')
@include('inc.navbaritems')

    @if(count($groups)>0)
    <table class="table table-striped" style="width:75%;">
        <tr>
            <td style="color:navy; background-color:lightblue"> Id</td>
            <td style="color:navy; background-color:lightblue">Group name</td>
            <td style="color:navy; background-color:lightblue">Asset</td>
            <td style="color:navy; background-color:lightblue">Asset stock</td>
            <td style="color:navy; background-color:lightblue">Quantity</td>
        </tr>
        <a href="/group/create" class="btn btn-primary" style="float:right;">Add Group</a>
        @foreach($groups as $group)
        <tr>
            <td>{{$group->id}}</td>
            <td><a href="/group/{{$group->id}}">{{$group->name}}</a></td>
            <td>{{$c_assets}}</td>  
            <td>{{$c_assetstock}}</td> 
            <td>{{$c_asseti}}</td> 
        </tr>
        @endforeach
    </table>
    @else
        <small>No groups</small>
        
        <a href="/group/create" class="btn btn-primary">Add Group</a>
    @endif
@endsection