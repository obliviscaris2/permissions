<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Tran_purpose;
use App\Models\Tran_nature;
use App\Models\Tran_proof;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::with('registration')->latest()->get();
        $page_title = 'Transactions';
        return view ('admin.transaction.index', compact('transactions', 'page_title'));
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
        $tranpurposes = Tran_purpose::all();
        $tranproofs = Tran_proof::all();
        $trannatures = Tran_nature::all();
        $page_title = 'Transaction Details';

        if (!$registration) {
            // Handle the case when the registration is not found
            abort(404);
        }
        return view('admin.transaction.create', compact('page_title', 'registrations', 'registration', 'tranpurposes', 'trannatures', 'tranproofs'));
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
        'tran_date' => 'required|date|max:255',
        'tran_purpose_id' => 'required|array',
        'tran_nature_id' => 'required|array',
        'tran_proof_id' => 'required|array',
        'tran_amount' => 'required|string|max:255',
        'registration_id' => 'required|exists:registrations,id',
    ]);


    
    try {

        $registration = Registration::find($validatedData['registration_id']);


        $transaction = new Transaction();

        // Set the model attributes with the validated data
        $transaction->tran_date = $validatedData['tran_date'];
        $transaction->tran_amount = $validatedData['tran_amount'];

        $transaction->user_id = Auth::user()->id;
       

        // $transaction->tran_nature_id = $validatedData['tran_nature_id'];
        // $transaction->tran_proof_id = $validatedData['tran_proof_id'];

        // $transaction->tran_purpose_id = $validatedData['tran_purpose_id'];


        $registration->transaction()->save($transaction);

        // if (isset($validatedData['tran_purpose_id'])) {
        //     foreach ($validatedData['tran_purpose_id'] as $tranPurposeId) {
        //         // Attach each tran_purpose_id to the transaction
        //         $tranPurpose = Tran_purpose::find($tranPurposeId);
        //         $transaction->tranPurpose()->attach($tranPurpose);
        //     }
        // }

        $transaction->tranPurpose()->attach($validatedData['tran_purpose_id']);
        $transaction->tranNature()->attach($validatedData['tran_nature_id']);
        $transaction->tranProof()->attach($validatedData['tran_proof_id']);


        
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
        return redirect()->route('admin.registration.index');
    } else {
        return redirect()->route('admin.transaction.create');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
