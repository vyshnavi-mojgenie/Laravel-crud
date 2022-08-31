@extends('layouts.master')
@section('title','new user')
@section('content')
<div class="container">
    <form action = "{{route('save.user')}}" method = "post">
        @csrf
   
    <div class="mb-3">
            <label>Name</label>
            <input type="text" name = "name" class="form-control" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name = "email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="phone" name="phone" class="form-control" placeholder="Enter Phone">
        </div>
        <div class="mb-3">
            <label>DOB</label>
            <input type="text" name = "dob" class="form-control" placeholder="date of birth">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select   class="form-control" name="status">
                <option value = "1" >Active</option>
                <option value = "0">Inactive</option>
            </select>
        </div>
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
      
    </form>


</div>




@endsection