<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Sales5kg;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Sales5kgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales5kg = Sales5kg::orderBy('date', 'desc')->get();
        return view('sales.5kg_sales.index', compact('sales5kg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales.5kg_sales.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice_num = $request->invoice_num;
        $quantity_sold = $request->quantity_sold;
        $date = $request->date;
        $price_per_kg = 80;
        $total_price = $quantity_sold * $price_per_kg;
        $invoice = $request->invoice;
        if($request->hasFile('invoice'))
        {
            $filename = 'invoice-' . $invoice_num . '-' . now()->format('YmdHis') . '.' . $invoice->getClientOriginalExtension();
            $invoicePath = $invoice->storeAs('invoices', $filename, 'public');
        }
        if(Sales5kg::create([
            'invoice_num' => $invoice_num,
            'quantity_sold' => $quantity_sold,
            'price_per_kg' => $price_per_kg,
            'total_price' => $total_price,
            'date' => $date,
            'invoice' => $invoicePath ?? null,
        ]))
        {
            return redirect()->route('sales_5kg.index')->with('success', 'Record created successfully.');
        };

    return redirect()->route('sales_5kg.index')->with('error', 'File upload failed.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sales5kg::find($id);
        return view('sales.5kg_sales.view-invoice', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = Sales5kg::findOrFail($id);
        if($sale)
        {
            return view('sales.5kg_sales.edit', compact('sale'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sale = Sales5kg::find($id);
        if (!$sale) {
            return redirect()->route('sales_5kg.index')->with('error', 'Record not found.');
        }

        $invoice_num = $request->invoice_num;
        $quantity_sold = $request->quantity_sold;
        $date = $request->date;
        $price_per_kg = 80;
        $total_price = $quantity_sold * $price_per_kg;

        if ($request->hasFile('invoice')) {
            if ($sale->invoice) {
                Storage::disk('public')->delete($sale->invoice);
            }

            $filename = 'invoice-' . $invoice_num . '-' . now()->format('YmdHis') . '.' . $request->file('invoice')->getClientOriginalExtension();
            $invoicePath = $request->file('invoice')->storeAs('invoices', $filename, 'public');

            $sale->update([
                'invoice_num' => $invoice_num,
                'quantity_sold' => $quantity_sold,
                'price_per_kg' => $price_per_kg,
                'total_price' => $total_price,
                'date' => $date,
                'invoice' => $invoicePath,
            ]);
        } else {
            // If no new file is uploaded, update the record without changing the existing file.
            $sale->update([
                'invoice_num' => $invoice_num,
                'quantity_sold' => $quantity_sold,
                'price_per_kg' => $price_per_kg,
                'total_price' => $total_price,
                'date' => $date,
            ]);
        }

        return redirect()->route('sales_5kg.index')->with('success', 'Record updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = Sales5kg::find($id);
        if ($sale->invoice) {
            Storage::disk('public')->delete($sale->invoice);
        }
        $sale->delete();
        return redirect()->route('sales_5kg.index')->with('success', 'Record deleted successfully');
    }

}
