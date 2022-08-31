@extends('layouts.master')
@section('content')
@section('title','welcome')
        <h1 style="text-align:center;"><b>USERS</b></h1>
        
        @if(session()->has('message'))
        <p>{{session()->get('message')}}</p>
        @endif
<h4>Welcome {{auth()->user()->name}}</h4>
<a href = "{{route('logout')}}" class = "btn btn-danger">Logout</a>
        <!-- <h2>{{session()->get('date')}}</h2> -->
    <div style="text-align:right">

	    <a href = "{{route('create.user')}}"class = "btn btn-primary"> New </a>
    </div>
        <table class="table">
      <thead>
        <tr>
          <th scope ="col">id</th>
          <th scope ="col">Name</th>
          <th scope ="col">Email</th>
          <th scope ="col">Phone</th>
          <th scope ="col">DOB</th>
          <th scope ="col">Actions</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope ="row">{{$users->firstItem()+$loop->index}}</th>
            <td> {{$user->name}} </td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->dob}}</td>
          
            <td>
                <a href = "{{route('edit.user',encrypt ($user->user_id)) }}" class = "btn btn-primary">Edit</a>
                <a href = "{{route('delete.user',encrypt ($user->user_id)) }}" class = "btn btn-danger">Delete</a>
                <a href = "{{route('view.user',encrypt ($user->user_id)) }}" class = "btn btn-warning">View</a>

              </td>

        </tr>
        @endforeach
        
      </tbody>
    </table>
<div>
{{$users->links()}}

</div>
@endsection
