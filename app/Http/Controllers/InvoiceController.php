<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'client_address' => 'required',
            'invoice_date' => 'required|date',
            'description' => 'required',
            'amount' => 'required|numeric',
        ]);

        $invoice = Invoice::create([
            'invoice_number' => 'INV-' . time(),
            'client_name' => $request->client_name,
            'client_address' => $request->client_address,
            'invoice_date' => $request->invoice_date,
            'description' => $request->description,
            'amount' => $request->amount,
            'tax_rate' => 7.00,
            'total' => $request->amount * 1.07,
        ]);

        return redirect()->route('invoices.show', $invoice->id)->with('success', 'Invoice created successfully.');
    }

    public function show(Invoice $invoice)
    {

        $pdf = Pdf::loadView('invoices.show', compact('invoice'));
        return $pdf->stream('invoice.pdf');

    }
}
