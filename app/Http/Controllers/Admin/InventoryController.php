<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\BulkInventory;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = BulkInventory::orderBy('date', 'desc')->get();
        return view('inventories.index', compact('inventories'));
    }

    public function create()
    {
        return view('inventories.create');
    }

    public function store(Request $request)
    {
        $opening_stock = $request->opening_stock ?? null;
        $dispatch = $request->dispatch;
        $recycle = $request->recycle ?? 0;
        $production = $request->production ?? null;
        $balance = ($opening_stock + $production) - ($dispatch + $recycle);
        BulkInventory::create([
        'opening_stock' => $opening_stock,
        'production' => $production,
        'dispatch' => $dispatch,
        'recycle' =>$recycle,
        'balance' =>$balance,
        'date' => $request->date
        ]);
        return redirect()->route('inventories.index');
    }

    public function show($id)
    {
        $inventory = BulkInventory::findOrFail($id);
        return view('inventories.show', compact('inventory'));
    }

    public function edit($id)
    {
        $inventory = BulkInventory::findOrFail($id);
        return view('inventories.edit', compact('inventory'));
    }

    public function update(Request $request,  $id)
    {
        $opening_stock = $request->opening_stock ?? null;
        $dispatch = $request->dispatch;
        $recycle = $request->recycle ?? 0;
        $production = $request->production ?? null;
        $balance = ($opening_stock + $production) - ($dispatch + $recycle);
        $inventory = BulkInventory::findOrFail($id);
        $inventory->update([
        'opening_stock' => $opening_stock,
        'production' => $production,
        'dispatch' => $dispatch,
        'recycle' =>$recycle,
        'balance' =>$balance,
        'date' => $request->date
        ]);

        return redirect()->route('inventories.index');
    }

    public function destroy($id)
    {
        $inventory = BulkInventory::findOrFail($id);
        $inventory->delete();
        return redirect()->route('inventories.index');
    }
}
