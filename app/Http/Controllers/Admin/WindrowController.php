<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\WindrowsInstallation;

class WindrowController extends Controller
{
    public function index()
    {
        $installations = WindrowsInstallation::orderBy('installation_date', 'desc')->get();

        return view('windrows_installation.index', compact('installations'));
    }

    public function create()
    {
        return view('windrows_installation.create');
    }

    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'windrow_code' => 'required',
        'weight' => 'required|numeric',
        'installation_date' => 'required|date',
        'compositions' => 'required|string',
        'no_of_turnings' => 'required|integer',
        'status' => 'required|string',
    ]);

    $startDate = Carbon::parse($validatedData['installation_date']);
    $currentDate = now();
    $numberOfDays = $startDate->diffInDays($currentDate);

    $validatedData['no_of_days'] = $numberOfDays; 

        if (WindrowsInstallation::create($validatedData)) {
            return redirect()->route('windrows_installation.index')
                ->with('success', 'Installation created successfully');
        } else {
            return back()->with('error', 'Failed to create installation');
        }
    }

    public function show($id)
    {
        $installation = WindrowsInstallation::findOrFail($id);
        if(!empty($installation)){
            return view('windrows_installation.show', compact('installation'));
        }
    }

    public function edit($id)
    {
        $installation = WindrowsInstallation::findOrFail($id);
        if(!empty($installation))
        {
            return view('windrows_installation.edit', compact('installation'));
        }
    }

    public function update(Request $request, $id)
    {
        $installation = WindrowsInstallation::findOrFail($id);
    
        $validatedData = $request->validate([
            'windrow_code' => 'required',
            'weight' => 'required|numeric',
            'installation_date' => 'required|date',
            'compositions' => 'required|string',
            'no_of_turnings' => 'required|integer',
            'status' => 'required|string',
        ]);
    
        $startDate = Carbon::parse($validatedData['installation_date']);
        $currentDate = now();
        $numberOfDays = $startDate->diffInDays($currentDate);
    
        $validatedData['no_of_days'] = $numberOfDays; // Add the number of days to the data
    
        if ($installation->update($validatedData)) {
            return redirect()->route('windrows_installation.index')->with('success', 'Installation updated successfully');
        } else {
            return back()->with('error', 'Failed to update installation');
        }
    }


    public function destroy($id)
    {
        $installation = WindrowsInstallation::findOrFail($id);
        if($installation->delete())
        {
            return redirect()->route('windrows_installation.index')->with('success', 'Installation deleted successfully');
        }
    }
}
