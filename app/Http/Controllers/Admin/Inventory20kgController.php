<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Inventory20kg;
use App\Http\Controllers\Controller;

class Inventory20kgController extends Controller
{
    public function index()
    {
        $inventories = Inventory20kg::orderBy('date', 'desc')->get();
        return view('inventories20kg.index', compact('inventories'));
    }

    public function create()
    {
        return view('inventories20kg.create');
    }

    public function store(Request $request)
    {
        $opening_stock = $request->opening_stock;
        $dispatch = $request->dispatch;
        $production = $request->production;
        $balance = ($opening_stock + $production) - $dispatch;
        $opening_bags = floor($opening_stock / 20);
        $dispatch_bags = floor($dispatch / 20);
        $balance_bags = floor($balance/ 20);

        Inventory20kg::create([
            'opening_stock' => $opening_stock,
            'opening_bags' => $opening_bags,
            'production' => $production,
            'dispatch' => $dispatch,
            'dispatch_bags' => $dispatch_bags,
            'balance' => $balance,
            'balance_bags' => $balance_bags,
            'date' => $request->date,

        ]);
        return redirect()->route('inventories20kg.index');
    }

    public function show($id)
    {
        $inventory = Inventory20kg::findOrFail($id);
        return view('inventories20kg.show', compact('inventory'));
    }

    public function edit($id)
    {
        $inventory = Inventory20kg::findOrFail($id);
        return view('inventories20kg.edit', compact('inventory'));
    }

    public function update(Request $request,  $id)
    {
        $opening_stock = $request->opening_stock;
        $dispatch = $request->dispatch;
        $production = $request->production;
        $balance = ($opening_stock + $production) - $dispatch;
        $opening_bags = floor($opening_stock / 20);
        $dispatch_bags = floor($dispatch / 20);
        $balance_bags = floor($balance/ 20);
        $inventory = Inventory20kg::findOrFail($id);
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
        return redirect()->route('inventories20kg.index');
        }
    }

    public function destroy($id)
    {
        $inventory = Inventory20kg::findOrFail($id);
        $inventory->delete();
        return redirect()->route('inventories20kg.index');
    }
}
