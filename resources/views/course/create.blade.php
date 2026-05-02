@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('course') }}" method="post">
        @csrf
        <input type="hidden" name="id" id="id"  id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Course_code</label></br>
        <input type="Email" name="code" id="email"  class="form-control"></br>
        <label>Duartion</label></br>
        <input type="text" name="duration" id="address"  class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop