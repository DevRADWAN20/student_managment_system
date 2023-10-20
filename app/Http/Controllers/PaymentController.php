<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\enrollment;
use Illuminate\Http\Request;
use App\Models\payment;

class PaymentController extends Controller
{

    public function index()
    {
        $payments = payment::all();
        return view ('payments.index')->with('payments', $payments);
    }


    public function create()
    {
        $enrollments= enrollment::pluck('enroll_no','id');
        return view('payments.create',compact('enrollments'));
    }


    public function store(Request $request)
    {
        $input = $request->all();
        payment::create($input);
        return redirect('payments')->with('flash_message', 'Payment Addedd!');
    }


    public function show(string $id)
    {
        $payments = payment::find($id);
        return view('payments.show')->with('payments', $payments);
    }


    public function edit(string $id)
    {

        $payments = payment::find($id);
        $enrollments= enrollment::pluck('enroll_no','id');
        return view('payments.edit',compact('payments','enrollments'));    }


    public function update(Request $request, string $id)
    {
        $payments= payment::find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message', 'Payment Updated!');
    }


    public function destroy(string $id)
    {
        payment::destroy($id);
        return redirect('payments')->with('flash_message', 'Payment deleted!');
    }
}
