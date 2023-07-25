<?php

namespace App\Http\Controllers;

use App\Models\Tran_proof;
use Illuminate\Http\Request;

class TranProofController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tranproofs = Tran_proof::latest()->get();
        $page_title = 'Transaction Proof';
        return view ('admin.tranproof.index', compact('tranproofs', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title='Create Transaction Proof';

        return view('admin.tranproof.create', compact('page_title'));
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
            $tranproof = new Tran_proof();

            $tranproof->title = $validatedData['title'];

            $tranproof->save();

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
            return redirect()->route('admin.tranproof.index');
        } else {
            return redirect()->route('admin.tranproof.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tran_proof  $tran_proof
     * @return \Illuminate\Http\Response
     */
    public function show(Tran_proof $tran_proof)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tran_proof  $tran_proof
     * @return \Illuminate\Http\Response
     */
    public function edit(Tran_proof $tran_proof)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tran_proof  $tran_proof
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tran_proof $tran_proof)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tran_proof  $tran_proof
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tran_proof $tran_proof)
    {
        //
    }
}
