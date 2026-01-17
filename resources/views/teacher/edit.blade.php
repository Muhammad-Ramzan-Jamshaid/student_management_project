@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">edit  Page</div>
  <div class="card-body">
      
      <form action="{{ url('teacher/' .$teachers->id) }}" method="post">
      @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="Email" name="email" id="email" value="{{$teachers->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$teachers->address}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$teachers->phone}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$teachers->age}}" class="form-control"></br>
        <label>Experience</label></br>
        <input type="text" name="experience" id="age" value="{{$teachers->experience}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop