<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\BulkSale;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BulkSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulkSales = BulkSale::orderBy('date', 'desc')->get();
        return view('sales.bulk_sales.index', compact('bulkSales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales.bulk_sales.create');

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
        $price_per_kg = 9;
        $total_price = $quantity_sold * $price_per_kg;
        $invoice = $request->invoice;
        if($request->hasFile('invoice'))
        {
            $filename = 'invoice-' . $invoice_num . '-' . now()->format('YmdHis') . '.' . $invoice->getClientOriginalExtension();
            $invoicePath = $invoice->storeAs('invoices', $filename, 'public');
        }
        if(BulkSale::create([
            'invoice_num' => $invoice_num,
            'quantity_sold' => $quantity_sold,
            'price_per_kg' => $price_per_kg,
            'total_price' => $total_price,
            'date' => $date,
            'invoice' => $invoicePath ?? null,
        ]))
        {
            return redirect()->route('bulk_sales.index')->with('success', 'Record created successfully.');
        };

    return redirect()->route('bulk_sales.index')->with('error', 'File upload failed.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bulkSale = BulkSale::find($id);
        return view('sales.bulk_sales.view-invoice', compact('bulkSale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bulkSale = BulkSale::findOrFail($id);
        if($bulkSale)
        {
            return view('sales.bulk_sales.edit', compact('bulkSale'));
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
        $bulkSale = BulkSale::find($id);
        if (!$bulkSale) {
            return redirect()->route('bulk_sales.index')->with('error', 'Record not found.');
        }

        $invoice_num = $request->invoice_num;
        $quantity_sold = $request->quantity_sold;
        $date = $request->date;
        $price_per_kg = 9;
        $total_price = $quantity_sold * $price_per_kg;

        if ($request->hasFile('invoice')) {
            if ($bulkSale->invoice) {
                Storage::disk('public')->delete($bulkSale->invoice);
            }

            $filename = 'invoice-' . $invoice_num . '-' . now()->format('YmdHis') . '.' . $request->file('invoice')->getClientOriginalExtension();
            $invoicePath = $request->file('invoice')->storeAs('invoices', $filename, 'public');

            $bulkSale->update([
                'invoice_num' => $invoice_num,
                'quantity_sold' => $quantity_sold,
                'price_per_kg' => $price_per_kg,
                'total_price' => $total_price,
                'date' => $date,
                'invoice' => $invoicePath,
            ]);
        } else {
            // If no new file is uploaded, update the record without changing the existing file.
            $bulkSale->update([
                'invoice_num' => $invoice_num,
                'quantity_sold' => $quantity_sold,
                'price_per_kg' => $price_per_kg,
                'total_price' => $total_price,
                'date' => $date,
            ]);
        }

        return redirect()->route('bulk_sales.index')->with('success', 'Record updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bulkSale = BulkSale::find($id);
        if ($bulkSale->invoice) {
            Storage::disk('public')->delete($bulkSale->invoice);
        }
        $bulkSale->delete();
        return redirect()->route('bulk_sales.index')->with('success', 'Record deleted successfully');
    }

}
