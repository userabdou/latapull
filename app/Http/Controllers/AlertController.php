<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'designation' => 'required|string|max:255',
            'echeance' => 'required|date',
            'kilometrage' => 'required|numeric',
        ];

        // Define custom validation messages (optional)
        $messages = [
            'designation.required' => 'The designation field is required.',
            'echeance.required' => 'The echeance field is required.',
            'kilometrage.required' => 'The kilometrage field is required.',
            'kilometrage.numeric' => 'The kilometrage must be a number.',
        ];

        // Run the validation
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator) // Pass validation errors to the view
                ->withInput(); // Retain the old input
        }

        // If validation passes, create a new alert record

        $alert = new Alert(); // Replace 'Alert' with the actual model name for your alerts
        $alert->designation = $request->input('designation');
        $alert->echeance = $request->input('echeance');
        $alert->kilometrage = $request->input('kilometrage');
        // Add any other fields you want to save

        $alert->save();
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $alert = Alert::find($id);

    if (!$alert) {
        return redirect()->back()->with('error', 'Alert not found');
    }

    $alert->delete();

    return redirect()->back();

    }
}
