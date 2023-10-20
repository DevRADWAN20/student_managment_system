<?php

namespace App\Http\Controllers;


use App\Models\batch;
use App\Models\students;
use Illuminate\Http\Request;
use App\Models\enrollment;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;


class EnrollmentController extends Controller
{

    public function index():View
    {
        $enrollments = enrollment::all();
        return view ('enrollments.index')->with('enrollments', $enrollments);
    }


    public function create():View
    {
        $batches =batch::pluck('name','id');
        $students =students::pluck('name','id');
        return view('enrollments.create', compact('batches','students'));

    }


    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment Addedd!');
    }


    public function show(string $id):View
    {
        $enrollments = enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollments);
    }


    public function edit(string $id):View
    {
        $enrollments = enrollment::find($id);
        return view('enrollments.edit')->with('enrollments', $enrollments);
    }


    public function update(Request $request, string $id):RedirectResponse
    {
        $enrollments = enrollment::find($id);
        $input = $request->all();
        $enrollments->update($input);
        return redirect('enrollment')->with('flash_message', 'Enrollment Updated!');
    }


    public function destroy(string $id):RedirectResponse
    {
        enrollment::destroy($id);
        return redirect('enrollment')->with('flash_message', 'Enrollment Deleted!');
    }
}
