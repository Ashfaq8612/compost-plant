<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\PlantOperation;

class PlantOperationController extends Controller
{
    public function index()
    {
        $plantOperations = PlantOperation::orderBy('date', 'desc')->get();
        return view('plant_operations.index', compact('plantOperations'));
    }

    public function create()
    {
        return view('plant_operations.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'operation_time_hr' => 'required|integer',
            'waste_processing' => 'required|integer',
            'total_msw_recieved' => 'required|integer',
            'yesterday_left_over' => 'required|integer',
            'consume' => 'required|integer',
            'rejection' => 'required|integer',
            'balance' => 'required|integer',
            'bio' => 'required|integer',
            'rejection_mt' => 'required|integer',
            'scm_mt' => 'required|integer',
            'previous_scm' => 'required|integer',
            'scm_received' => 'required|integer',
            'scm_total' => 'required|integer',
        ]);

        PlantOperation::create($validatedData);
        return redirect()->route('plant_operations.index')->with('success', 'Plant Operation created successfully!');
    }

    public function show($id)
    {
        $plantOperation = PlantOperation::findOrFail($id);
        return view('plant_operations.show', compact('plantOperation'));
    }

    public function edit($id)
    {
        $plantOperation = PlantOperation::findOrFail($id);
        return view('plant_operations.edit', compact('plantOperation'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'operation_time_hr' => 'required|integer',
            'waste_processing' => 'required|integer',
            'total_msw_recieved' => 'required|integer',
            'yesterday_left_over' => 'required|integer',
            'consume' => 'required|integer',
            'rejection' => 'required|integer',
            'balance' => 'required|integer',
            'bio' => 'required|integer',
            'rejection_mt' => 'required|integer',
            'scm_mt' => 'required|integer',
            'previous_scm' => 'required|integer',
            'scm_received' => 'required|integer',
            'scm_total' => 'required|integer',
        ]);
        $plantOperation = PlantOperation::findOrFail($id);
        if($plantOperation)
        {
            $plantOperation->update($validatedData);
            return redirect()->route('plant_operations.index')->with('success', 'Plant Operation updated successfully!');
        }
    }

    public function destroy($id)
    {
        $plantOperation = PlantOperation::findOrFail($id);
        if($plantOperation)
        {
            $plantOperation->delete();
            return redirect()->route('plant_operations.index')->with('success', 'Plant Operation deleted successfully!');
        }

    }
}
