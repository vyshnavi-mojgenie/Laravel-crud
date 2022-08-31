@extends('layouts.master')
@section('title','new user')
@section('content')
<div class="container">
    <form action = "{{route('update.user',$user->user_id)}}" method = "post">
        @csrf
        @method('PUT')
    <div class="mb-3">
            <label>Name</label>
            <input type="text" name = "name" value = "{{$user->name}}" class="form-control" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name = "email" value = "{{$user->email}}" class="form-control" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="phone" name="phone" value = "{{$user->phone}}" class="form-control" placeholder="Enter Phone">
        </div>
        <div class="mb-3">
            <label>DOB</label>
            <input type="text" name = "dob"  value = "{{$user->dob}}"class="form-control" placeholder="date of birth">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select   class="form-control" name="status">
                <option value = "1"  @if($user->status == 1 ) selected = "selected" @endif>Active</option>
                <option value = "0" @if($user->status == 0 ) selected = "selected" @endif>Inactive</option>
            </select>
        </div>
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
      
    </form>


</div>




@endsection