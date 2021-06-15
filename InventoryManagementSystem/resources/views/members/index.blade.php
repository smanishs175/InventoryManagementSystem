@extends('layouts.app')
@section('content')
@include('inc.navmem')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<h1> Members </h1>
    @if(count($members) >1)
    <table class="table">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Email</th>
            <th>Status</th>
            <td><a href="/members/create"class="btn btn-primary" style="float:right;">Add Member</a></td>
        </tr>
        @foreach($members as $member)
            <tr>
                <td>{{$member->id}}</td>
                <td><a href="/members/{{$member->id}}">{{$member->name}}</a></td>
                <td>{{$member->email}}</td>
                <td>
                    @if($member->status==1)
                        <a href="/state/{{$member->id}}"class="btn btn-success ">Active</a>

                     @else
                        <a href="/state/{{$member->id}}" class="btn btn-danger">InActive</a>
                    @endif
                    
                </td>
            </tr>
        @endforeach
    </table>
    @else
    <p>NO MEMBERS FOUND</p>
    @endif
@endsection