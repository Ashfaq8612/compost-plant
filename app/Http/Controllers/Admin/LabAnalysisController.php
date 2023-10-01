<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\LabAnalysisModel;
use App\Models\Admin\WindrowsInstallation;

class LabAnalysisController extends Controller
{
    public function index()
    {
        $labAnalysis = LabAnalysisModel::with('windrowsInstallation')
                        ->select('lab_analysis.*', 'windrows_installations.windrow_code')
                        ->join('windrows_installations', 'lab_analysis.windrows_code', '=', 'windrows_installations.id')->get();

        return view('lab_analysis.index', compact('labAnalysis'));
    }

    public function show($id)
    {
        $labAnalysis = LabAnalysisModel::findOrFail($id);
        return view('lab_analysis.show', compact('labAnalysis'));
    }


    public function create(){
        $windrow_code = WindrowsInstallation::select('id', 'windrow_code')->get();
        return view('lab_analysis.create', compact('windrow_code'));
    }

    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'windrows_code' => 'required',
        //     'analysis_date' => 'required|date',
        //     'analysis_complete_date' => 'required|date',
        //     'compositions' => 'required',
        //     'no_of_days' => 'required|integer',
        //     'avg_temp' => 'required|numeric',
        //     'moisture' => 'required|numeric',
        //     'organic_matter' => 'required|numeric',
        //     'ph_value' => 'required|numeric',
        //     'elect_conductivity' => 'required|numeric',
        //     'total_dissolve_salt' => 'required|numeric',
        //     'cec' => 'required|numeric',
        // ]);

        LabAnalysisModel::create($request->all());
        return redirect()->route('lab_analysis.index')->with('success', 'Lab analysis record created successfully.');
    }

    public function edit($id)
    {
        $labAnalysis = LabAnalysisModel::findOrFail($id);
        $windrow_code = WindrowsInstallation::select('id', 'windrow_code')->get();
        return view('lab_analysis.edit', compact('labAnalysis', 'windrow_code'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'windrows_code' => 'required',
            'analysis_date' => 'required|date',
            'analysis_complete_date' => 'required|date',
            'compositions' => 'required',
            'avg_temp' => 'required|numeric',
            'moisture' => 'required|numeric',
            'organic_matter' => 'required|numeric',
            'ph_value' => 'required|numeric',
            'elect_conductivity' => 'required|numeric',
            'total_dissolve_salt' => 'required|numeric',
            'cec' => 'required|numeric',
        ]);

        $labAnalysis = LabAnalysisModel::findOrFail($id);
        $labAnalysis->update($data);
        return redirect()->route('lab_analysis.index')->with('success', 'Lab analysis record updated successfully.');
    }

    public function destroy($id)
    {
        $labAnalysis = LabAnalysisModel::findOrFail($id);
        $labAnalysis->delete();
        return redirect()->route('lab_analysis.index')->with('success', 'Lab analysis record deleted successfully.');
    }
}

