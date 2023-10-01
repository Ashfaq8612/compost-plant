<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\HumanResource;
class HumanResourceController extends Controller
{
    public function index()
    {
        $humanResources = HumanResource::orderBy('date', 'desc')->get();
        return view('human_resource.index', compact('humanResources'));
    }

    public function create()
    {
        return view('human_resource.create');
    }

    public function store(Request $request)
    {
        $humanResource = HumanResource::create($request->all());
        return redirect()->route('human_resource.index')->with('success', 'Human Resource created successfully');
    }

    public function show(HumanResource $humanResource)
    {
        return view('human_resource.show', compact('humanResource'));
    }

    public function edit(HumanResource $humanResource)
    {
        return view('human_resource.edit', compact('humanResource'));
    }

    public function update(Request $request, HumanResource $humanResource)
    {
        $humanResource->update($request->all());
        return redirect()->route('human_resource.index')->with('success', 'Human Resource updated successfully');
    }

    public function destroy(HumanResource $humanResource)
    {
        $humanResource->delete();
        return redirect()->route('human_resource.index')->with('success', 'Human Resource deleted successfully');
    }
}
