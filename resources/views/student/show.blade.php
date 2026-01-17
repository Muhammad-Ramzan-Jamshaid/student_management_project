@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Student Details</div>
  <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $students->name }}</h5>
            <p class="card-text">Email : {{ $students->email }}</p>
            <p class="card-text">Address : {{ $students->address }}</p>
            <p class="card-text">Phone : {{ $students->phone }}</p>
            <p class="card-text">Age : {{ $students->age }}</p>
        </div>
        
        <hr>
        <a href="{{ url('/student') }}" class="btn btn-primary btn-sm">Back to List</a>
  </div>
</div>

@endsection