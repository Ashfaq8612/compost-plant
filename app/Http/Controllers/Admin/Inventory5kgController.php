<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Inventory5kg;
use App\Http\Controllers\Controller;

class Inventory5kgController extends Controller
{
    public function index()
    {
        $inventories = Inventory5kg::orderBy('date', 'desc')->get();
        return view('inventories5kg.index', compact('inventories'));
    }

    public function create()
    {
        return view('inventories5kg.create');
    }

    public function store(Request $request)
     {
        $opening_stock = $request->opening_stock;
        $dispatch = $request->dispatch;
        $production = $request->production;
        $balance = ($opening_stock + $production) - $dispatch;
        $opening_bags = floor($opening_stock / 5);
        $dispatch_bags = floor($dispatch / 5);
        $balance_bags = floor($balance/ 5);

        Inventory5kg::create([
            'opening_stock' => $opening_stock,
            'opening_bags' => $opening_bags,
            'production' => $production,
            'dispatch' => $dispatch,
            'dispatch_bags' => $dispatch_bags,
            'balance' => $balance,
            'balance_bags' => $balance_bags,
            'date' => $request->date,

        ]);
        return redirect()->route('inventories5kg.index');
    }

    public function show($id)
    {
        $inventory = Inventory5kg::findOrFail($id);
        return view('inventories5kg.show', compact('inventory'));
    }

    public function edit($id)
    {
        $inventory = Inventory5kg::findOrFail($id);
        return view('inventories5kg.edit', compact('inventory'));
    }

    public function update(Request $request,  $id)
    {
       $opening_stock = $request->opening_stock;
        $dispatch = $request->dispatch;
        $production = $request->production;
        $balance = ($opening_stock + $production) - $dispatch;
        $opening_bags = floor($opening_stock / 5);
        $dispatch_bags = floor($dispatch / 5);
        $balance_bags = floor($balance/ 5);
        $inventory = Inventory5kg::findOrFail($id);
        if(!empty($inventory)){
        $inventory->update([
            'opening_stock' => $opening_stock,
            'opening_bags' => $opening_bags,
            'production' => $production,
            'dispatch' => $dispatch,
            'dispatch_bags' => $dispatch_bags,
            'balance' => $balance,
            'balance_bags' => $balance_bags,
            'date' => $request->date,

        ]);
        return redirect()->route('inventories5kg.index');
    }
    }

    public function destroy($id)
    {
        $inventory = Inventory5kg::findOrFail($id);
        $inventory->delete();
        return redirect()->route('inventories5kg.index');
    }
}
