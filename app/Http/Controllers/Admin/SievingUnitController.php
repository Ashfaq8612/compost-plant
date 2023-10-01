<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\SievingUnitModel;
use App\Models\Admin\WindrowsInstallation;

class SievingUnitController extends Controller
{
    public function index()
    {
        $sievingUnits = SievingUnitModel::with('windrowsInstallation')
                    ->select('sieving_unit_models.*', 'windrows_installations.windrow_code')
                    ->join('windrows_installations', 'sieving_unit_models.windrows_code', '=', 'windrows_installations.id')->get();
        return view('sieving-units.index', compact('sievingUnits'));
    }

    public function create()
    {
        $windrow_code = WindrowsInstallation::select('id', 'windrow_code')->get();
        return view('sieving-units.create', compact('windrow_code'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        SievingUnitModel::create($request->all());
        return redirect()->route('sieving-units.index')->with('success', 'Sieving unit created successfully');
    }

    public function show($id)
    {
        $sievingUnit = SievingUnitModel::findOrFail($id);
        return view('sieving-units.show', compact('sievingUnit'));
    }

    public function edit($id)
    {
        $sievingUnit = SievingUnitModel::findOrFail($id);
        $windrow_code = WindrowsInstallation::select('id', 'windrow_code')->get(); // You need to adjust the model name and field based on your actual setup
        return view('sieving-units.edit', compact('sievingUnit', 'windrow_code'));
    }

    public function update(Request $request, $id)
    {
        $sievingUnit = SievingUnitModel::findOrFail($id);
        $sievingUnit->update($request->all());
        return redirect()->route('sieving-units.index')->with('success', 'Sieving unit updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        $sievingUnit = SievingUnitModel::findOrFail($id);
        $sievingUnit->delete();
        return redirect()->route('sieving-units.index')->with('success', 'Sieving unit deleted successfully');
    }
}

