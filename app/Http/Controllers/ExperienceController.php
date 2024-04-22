<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company' => 'required|max:255',
            'durations' => 'required|max:255',
            'field' => 'required',
            'order' => 'required|unique:experiences',
        ]);

        Experience::create($validatedData);

        return redirect('/dashboard')->with('success', 'New ecperience has been added!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
