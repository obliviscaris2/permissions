<?php

namespace App\Http\Controllers;

use App\Models\NoTransactionPurpose;
use Illuminate\Http\Request;

class NoTransactionPurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noTransactionPurpose = NoTransactionPurpose::latest()->get();

        $page_title = 'No Transaction Purpose';

        return view ('admin.notransactionpurpose.index', compact('noTransactionPurpose', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Create No Transaction Purpose';

        return view('admin.notransactionpurpose.create', compact('page_title'));
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
            'title' => 'required|string|max:255',
          
        ]);

        try{
            $noTransactionPurpose = new NoTransactionPurpose();

            $noTransactionPurpose->title = $validatedData['title'];

            $noTransactionPurpose->save();

            $message = 'Record created successfully';
            $success = true;
            $request->session()->flash('success', $message);
        }
        catch (\Exception $e) {
            $message = 'An error occurred';
            $success = false;
            $request->session()->flash('error', 'Error!: ' . $e->getMessage());
        }

         // Return a success response with the view and message
         if ($success) {
            return redirect()->route('admin.notransaction.index');
        } else {
            return redirect()->route('admin.notransaction.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoTransactionPurpose  $noTransactionPurpose
     * @return \Illuminate\Http\Response
     */
    public function show(NoTransactionPurpose $noTransactionPurpose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoTransactionPurpose  $noTransactionPurpose
     * @return \Illuminate\Http\Response
     */
    public function edit(NoTransactionPurpose $noTransactionPurpose, $id)
    {
        $page_title = "Update No Transaction Purpose";

        return view('admin.notransactionpurpose.update', compact('page_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoTransactionPurpose  $noTransactionPurpose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoTransactionPurpose $noTransactionPurpose)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
          
        ]);

        try{
            $noTransactionPurpose =  NoTransactionPurpose::find($request->id);

            $noTransactionPurpose->title = $validatedData['title'];

            $noTransactionPurpose->save();

            $message = 'Record updated successfully';
            $success = true;
            $request->session()->flash('success', $message);
        }
        catch (\Exception $e) {
            $message = 'An error occurred';
            $success = false;
            $request->session()->flash('error', 'Error!: ' . $e->getMessage());
        }

         // Return a success response with the view and message
         if ($success) {
            return redirect()->route('admin.notransaction.index');
        } else {
            return redirect()->route('admin.notransaction.edit/' . $request->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoTransactionPurpose  $noTransactionPurpose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            $noTransactionPurpose = NoTransactionPurpose::find($id);

            $noTransactionPurpose->delete();

            $message = 'Record deleted successfully';
            $success = true;
            $request->session()->flash('success', $message);

        } 
        catch (\Exception $e) {
            $message = 'An error occurred';
            $success = false;
            $request->session()->flash('error', 'Error!: ' . $e->getMessage());
        }

        // Return a success response with the view and message
        if ($success) {
            return redirect()->route('admin.notransaction.index');
        } else {
            return redirect()->route('admin.notransaction.index');
        }



    }
}
