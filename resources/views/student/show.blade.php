@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
            <h5 class="card-title">Name : {{ $student->name }}</h5>
            <p class="card-text">Email : {{ $studnet->email }}</p>
        <p class="card-text">Address : {{ $student->address }}</p>
        <p class="card-text">Phone : {{ $student->phone }}</p>
        <p class="card-text">Age : {{ $student->age}}</p>
  </div>
       
    </hr>
  
  </div>
</div>