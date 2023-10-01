<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\WasteIntake;
use App\Http\Controllers\Controller;

class WasteIntakeController extends Controller
{
    public function index()
    {
        $wasteIntakes = WasteIntake::orderBy('date', 'desc')->get();
        return view('waste_intakes.index', compact('wasteIntakes'));
    }

    public function create()
    {
        return view('waste_intakes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'msw' => 'numeric',
            'cow_dung' => 'numeric',
            'egg_shell' => 'numeric',
            'green_waste' => 'numeric',
            'date' => 'date',
        ]);
        $msw = $request->msw;
        $cow_dung = $request->cow_dung;
        $egg_shell = $request->egg_shell;
        $green_waste = $request->green_waste;
        $total = $msw + $cow_dung + $egg_shell + $green_waste;
        if(WasteIntake::create([
            'msw' => $msw,
            'cow_dung' => $cow_dung,
            'egg_shell' => $egg_shell,
            'green_waste' => $green_waste,
            'date' => $request->date,
            'total' => $total

        ]))
        {
        return redirect()->route('waste_intakes.index')->with('success', 'Waste Intake created successfully');
        }
    }
    public function show($id)
    {
        $wasteIntake = WasteIntake::findOrFail($id);
        if($wasteIntake)
        {
            return view('waste_intakes.show', compact('wasteIntake'));
        }

    }

    public function edit($id)
    {
        $wasteIntake = WasteIntake::findOrFail($id);
        return view('waste_intakes.edit', compact('wasteIntake'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'msw' => 'required|numeric',
            'cow_dung' => 'required|numeric',
            'egg_shell' => 'required|numeric',
            'green_waste' => 'required|numeric',
            'date' =>'required|date',
        ]);

        $wasteIntake = WasteIntake::findOrFail($id);
        if($wasteIntake)
        {
            $wasteIntake->update($validatedData);
            return redirect()->route('waste_intakes.index')->with('success', 'Waste Intake updated successfully');
        }

    }

    public function destroy($id)
    {
        $wasteIntake = WasteIntake::findOrFail($id);
        if($wasteIntake)
        {
        $wasteIntake->delete();
        return redirect()->route('waste_intakes.index')->with('success', 'Waste Intake deleted successfully');
        }
    }
}
