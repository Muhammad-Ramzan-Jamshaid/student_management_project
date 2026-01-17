<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Teacher;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.   
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index')->with('teachers',$teachers);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('teacher')->with('flash_message', 'teacher Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers = Teacher::find($id);
        return view('teacher.show')->with('teachers',$teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers = Teacher::find($id);
        return view('teacher.edit')->with('teachers',$teachers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teachers = Teacher::find($id);
        $input = $request->all();
        $teachers->update($input);
        return redirect('teacher')->with('flash_message', 'teacher Addedd!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        Teacher::destroy($id);
        return redirect('teacher')->with('flash_message', 'teacher deleted!');  
    }
}
