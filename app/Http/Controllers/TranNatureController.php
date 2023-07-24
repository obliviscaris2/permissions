<?php

namespace App\Http\Controllers;

use App\Models\Tran_nature;
use Illuminate\Http\Request;

class TranNatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trannatures = Tran_nature::latest()->get();
        $page_title = 'Transaction Nature';
        return view ('admin.trannature.index', compact('trannatures', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title='Create Transaction Nature';

        return view('admin.trannature.create', compact('page_title'));
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
            $trannature = new Tran_nature();

            $trannature->title = $validatedData['title'];

            $trannature->save();

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
            return redirect()->route('admin.trannature.index');
        } else {
            return redirect()->route('admin.trannature.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tran_nature  $tran_nature
     * @return \Illuminate\Http\Response
     */
    public function show(Tran_nature $tran_nature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tran_nature  $tran_nature
     * @return \Illuminate\Http\Response
     */
    public function edit(Tran_nature $tran_nature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tran_nature  $tran_nature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tran_nature $tran_nature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tran_nature  $tran_nature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tran_nature $tran_nature)
    {
        //
    }
}
