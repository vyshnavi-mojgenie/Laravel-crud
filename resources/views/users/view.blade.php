@extends('layouts.master')
@section('title','new user')
@section('content')
<div class="container">
   <ul>
        <li>Name :{{$user->name}} </li>
        <li>Email :{{$user->email}}</li>
        <li>Phone :{{$user->phone}}</li>
        <li>DOB :{{$user->DOB}}</li>
        <li>Status :{{$user->status}}</li>

    </ul>
    <hr>
        <ul>
            <li>User : {{$address->user->name}}</li>

        </ul>
</div>
@endsection