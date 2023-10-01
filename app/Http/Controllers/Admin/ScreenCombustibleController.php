<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ScreenedConbustibleMaterial;

class ScreenCombustibleController extends Controller
{
    public function index()
    {
        $scms = ScreenedConbustibleMaterial::orderBy('date', 'desc')->get();
        return view('screened_combustible.index', compact('scms'));
    }

    public function create()
    {
        return view('screened_combustible.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'total_scm_received' => 'required|integer',
            'bail_created' => 'required|integer',
            'operation_hrs' => 'numeric'
        ]);

        ScreenedConbustibleMaterial::create($validatedData);

        return redirect()->route('screen_combustible.index')->with('success', 'Screened Combustible Material created successfully.');
    }

    public function show($id)
    {
        $material = ScreenedConbustibleMaterial::findOrFail($id);
        if($material){
        return view('screened_combustible.show', compact('material'));
        }
    }

    public function edit($id)
    {
        $material = ScreenedConbustibleMaterial::findOrFail($id);
        return view('screened_combustible.edit', compact('material'));
    }

    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'date' => 'required|date',
        'total_scm_received' => 'required|integer',
        'bail_created' => 'required|integer',
    ]);
    $material = ScreenedConbustibleMaterial::findOrFail($id);

    $material->update($validatedData);

    return redirect()->route('screen_combustible.index')->with('success', 'Screened Combustible Material updated successfully.');
}


    public function destroy($id)
    {
        $material = ScreenedConbustibleMaterial::findOrFail($id);

        if($material)
        {
            $material->delete();
            return redirect()->route('screen_combustible.index')->with('success', 'Screened Combustible Material deleted successfully.');
        }



    }
}
