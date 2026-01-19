<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('course.index')->with('$courses',$courses);
    }

    
    public function create()
    {
        return view('curse.create');
    }

 
    public function store(Request $request)
    {
        $input = $request::all();
        $courses::create($input);
        return redirect('course')->with('flash_message','course_Added!');
    }

  
    public function show(string $id)
    {
        $courses = Course::find($id);
        return view("course.show")->with('courses',$courses);
    }

    
    public function edit(string $id)
    {
        $courses = Course::find($id);
        return view("course.edit")->with('courses',$courses);
    }

  
    public function update(Request $request, string $id)
    {
        $courses = Course::find($id);
        $input = $request::all();
        $courses->save($input);
        return redirect('course')->with('flash_message','course_Added!');
    }

    
    public function destroy(string $id)
    {
        
    }
}
