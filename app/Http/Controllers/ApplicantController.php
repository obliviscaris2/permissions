<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\District;
use App\Models\Applicant;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Models\LocalGovernment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ApplicantController extends Controller
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
        $applicants = Applicant::with('registration')->latest()->get();
        $page_title = 'Applicants';
        return view ('admin.applicant.index', compact('applicants', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $registrationId = session('selectedRegistration');
        $registration = Registration::find($registrationId);
        $registrations = Registration::all();
        $page_title = 'Applicant Details';

        // Fetch all states
        $states = State::all();

        // Eager load the districts and local governments for better performance
        $states->load('districts.localGovernments');

        if (!$registration) {
            // Handle the case when the registration is not found
            abort(404);
        }
        return view('admin.applicant.create', compact('page_title', 'registrations', 'registration', 'states'));
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


        $applicant = new Applicant();

        // Set the model attributes with the validated data
        $applicant->first_name = $validatedData['first_name'];
        $applicant->middle_name = $validatedData['middle_name'];
        $applicant->last_name = $validatedData['last_name'];
        $applicant->permanent_address = $validatedData['permanent_address'];
        $applicant->ward_no = $validatedData['ward_no'];
        $applicant->local_govn = $validatedData['local_govn'];
        $applicant->district = $validatedData['district'];
        $applicant->state = $validatedData['state'];
        $applicant->contact_no = $validatedData['contact_no'];

        $applicant->user_id = Auth::user()->id;

        $registration->applicant()->save($applicant);


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
        return redirect()->route('admin.offender.create');
    } else {
        return redirect()->route('admin.applicant.create');
    }
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
