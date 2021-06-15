
@extends('layouts.app')
@section('content')
@include('inc.navmem')

@if(count($members) > 1)
    <table class="table">
        <tr>
            <td>NAME</td>
            <td>Checked Out</td>
            <td>OverDue</td>
            <td>Audits Pending</td>
        </tr>
        @foreach($members as $member)
            <tr>
                <td>{{$member->name}}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
    </table>
@endif
@endsection