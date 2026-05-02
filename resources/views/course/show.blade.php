@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">courses Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
            <h5 class="card-title">Name : {{ $course->name }}</h5>
            <p class="card-text">Email : {{ $course->code }}</p>
        <p class="card-text">Address : {{ $course->duration }}</p>
  </div>
       
    </hr>
  
  </div>
</div>