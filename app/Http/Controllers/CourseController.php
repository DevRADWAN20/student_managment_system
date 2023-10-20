<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\students;
use Illuminate\Http\Request;
use App\Models\courses;
use Illuminate\View\View;
class CourseController extends Controller
{

    public function index():View
    {
        $courses = courses::all();
        return view ('courses.index')->with('courses', $courses);
    }


    public function create():View
    {
        return view('courses.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        courses::create($input);
        return redirect('courses')->with('flash_message', 'Course Addedd!');
    }

    public function show(string $id)
    {
        $courses = courses::find($id);
        return view('courses.show')->with('courses', $courses);
    }


    public function edit(string $id)
    {
        $courses = courses::find($id);
        return view('courses.edit')->with('courses', $courses);
    }


    public function update(Request $request, string $id)
    {
        $courses= courses::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message', 'Course Updated!');
    }


    public function destroy(string $id)
    {
        courses::destroy($id);
        return redirect('courses')->with('flash_message', 'Course deleted!');
    }
}
