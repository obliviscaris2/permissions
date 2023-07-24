<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Transaction;
use App\Models\Tran_purpose;
use App\Models\Applicant;
use App\Models\Offender;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::with('applicant','offender','transaction')->latest()->get();
        
        
        $page_title = 'Registration';

        return view('admin.registration.index', compact('registrations', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $registration = Registration::find(session('selectedRegistration'));
        $page_title = 'Registration Details';
        return view('admin.registration.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'reg_no' => 'required|unique:registrations,reg_no|string|max:255',
            'reg_date' => 'required|date',
        ]);

        try{
            $registration = new Registration();

            $registration->reg_no = $validatedData['reg_no'];
            $registration->reg_date = $validatedData['reg_date'];

            $registration->save();

            session(['selectedRegistration' => $registration->id]);

             // Return a success response with the view and message
        $message = 'Record created successfully';
        $success = true;
        $request->session()->flash('success', $message);
        }catch (\Exception $e) {
            $message = 'An error occurred';
            $success = false;
            $request->session()->flash('error', 'Error!: ' . $e->getMessage());
        }
         // Return a success response with the view and message
         if ($success) {
            return redirect()->route('admin.applicant.create');
        } else {
            return redirect()->route('admin.registration.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
