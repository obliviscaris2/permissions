<?php

namespace App\Http\Controllers;

use App\Models\Tran_purpose;
use Illuminate\Http\Request;

class TranPurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tranpurposes = Tran_purpose::latest()->get();
        $page_title = 'Transaction Purpose';
        return view ('admin.tranpurpose.index', compact('tranpurpose', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title='Create Transaction Purpose';

        return view('admin.tranpurpose.create', compact('page_title'));
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
            $tranpurpose = new Tran_purpose();

            $tranpurpose->title = $validatedData['title'];

            $tranpurpose->save();

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
            return redirect()->route('admin.tranpurpose.index');
        } else {
            return redirect()->route('admin.tranpurpose.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tran_purpose  $tran_purpose
     * @return \Illuminate\Http\Response
     */
    public function show(Tran_purpose $tran_purpose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tran_purpose  $tran_purpose
     * @return \Illuminate\Http\Response
     */
    public function edit(Tran_purpose $tran_purpose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tran_purpose  $tran_purpose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tran_purpose $tran_purpose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tran_purpose  $tran_purpose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tran_purpose $tran_purpose)
    {
        //
    }
}
