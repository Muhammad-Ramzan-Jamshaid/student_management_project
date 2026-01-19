@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">teachers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
            <h5 class="card-title">Name : {{ $teacher->name }}</h5>
            <p class="card-text">Email : {{ $studnet->email }}</p>
        <p class="card-text">Address : {{ $teacher->address }}</p>
        <p class="card-text">Phone : {{ $teacher->phone }}</p>
        <p class="card-text">Age : {{ $teacher->age}}</p>show
        <p class="card-text">Experience : {{ $teacher->experience}}</p>
  </div>
       
    </hr>
  
  </div>
</div>