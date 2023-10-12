<?php

namespace App\Http\Controllers;

use App\Models\Agrement;
use Illuminate\Http\Request;

class AgrementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ags = Agrement::all();
        return view('agrement',compact('ags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AddAgrement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Agrement $agrement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $agrement = Agrement::where('AGREMENT_ID', $id)->get();
        return view('EditAgrement',compact('agrement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agrement $agrement)
    {
        //
    }
}
