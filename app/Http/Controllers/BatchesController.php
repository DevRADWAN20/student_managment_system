<?php

namespace App\Http\Controllers;

use App\Models\batch;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\courses;
use Illuminate\View\View;
class BatchesController extends Controller
{

    public function index():View
    {
        $batches = batch::all();
        return view ('batches.index')->with('batches', $batches);
    }


    public function create():View
    {
        $courses= courses::pluck('name','id');
        return view('batches.create',compact('courses'));

    }


    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        batch::create($input);
        return redirect('batches')->with('flash_message', 'Batch Addedd!');
    }


    public function show(string $id):View
    {
        $batches = batch::find($id);
        return view('batches.show')->with('batches', $batches);
    }


    public function edit(string $id):View
    {
        $batches = batch::find($id);
        return view('batches.edit')->with('batches', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $batches= batch::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batches')->with('flash_message', 'Batch Updated!');
    }


    public function destroy(string $id):RedirectResponse
    {
        batch::destroy($id);
        return redirect('batches')->with('flash_message', 'Batch deleted!');
    }
}
