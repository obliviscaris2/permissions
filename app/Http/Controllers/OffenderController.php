<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\District;
use App\Models\Offender;
use App\Models\Applicant;
use App\Models\Transaction;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Models\LocalGovernment;
use Illuminate\Support\Facades\Auth;

class OffenderController extends Controller
{
    
    public function getDistricts($state_id)
    {
        $districts = District::where('state_id', $state_id)->get();
        return response()->json($districts);
    }

    public function getLocalGovernments($district_id)
    {
        $localGovernments = LocalGovernment::where('district_id', $district_id)->get();
        return response()->json($localGovernments);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $offenders = Offender::with('registration')->latest()->get();
        $page_title = 'Offenders';
        return view ('admin.offender.index', compact('offenders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        $registrationId = session('selectedRegistration');
        $registration = Registration::find($registrationId);
        $registrations = Registration::all();
        $page_title = 'Offender Details';


        if (!$registration) {
            // Handle the case when the registration is not found
            abort(404);
        }

        // Fetch all states
        $states = State::all();

        // Eager load the districts and local governments for better performance
        $states->load('districts.localGovernments');

        return view('admin.offender.create', compact('page_title', 'registrations', 'registration', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate the incoming request data
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'last_name' => 'required|string|max:255',
        'permanent_address' => 'required|string|max:255',
        'ward_no' => 'required|string|max:255',
        'local_govn' => 'required|string|max:255',
        'district' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'contact_no' => 'required|string|max:255',
        'registration_id' => 'required|exists:registrations,id',
    ]);

    try {

        $registration = Registration::find($validatedData['registration_id']);

        // Create a new model instance
        $offender = new Offender();

        // Set the model attributes with the validated data
        $offender->first_name = $validatedData['first_name'];
        $offender->middle_name = $validatedData['middle_name'];
        $offender->last_name = $validatedData['last_name'];
        $offender->permanent_address = $validatedData['permanent_address'];
        $offender->ward_no = $validatedData['ward_no'];
        $offender->local_govn = $validatedData['local_govn'];
        $offender->district = $validatedData['district'];
        $offender->state = $validatedData['state'];
        $offender->contact_no = $validatedData['contact_no'];

        $offender->user_id = Auth::user()->id;

        // Save the model
        $registration->offender()->save($offender);

        // Return a success response with the view and message
        $message = 'Record created successfully';
        $success = true;
        $request->session()->flash('success', $message);

    } catch (\Exception $e) {
        $message = 'An error occurred';
        $success = false;
        $request->session()->flash('error', 'Error!: ' . $e->getMessage());
    }
     // Return a success response with the view and message
     if ($success) {
        return redirect()->route('admin.transaction.create');
    } else {
        return redirect()->route('admin.offender.create');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offender  $offender
     * @return \Illuminate\Http\Response
     */
    public function show(Offender $offender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offender  $offender
     * @return \Illuminate\Http\Response
     */
    public function edit(Offender $offender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offender  $offender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offender $offender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offender  $offender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offender $offender)
    {
        //
    }
}
