<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;

class InvoiceController extends Controller
{
    public function create()
    {
        return view('invoices.create');
    }

    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function store(Request $request)
    {
        Log::info('Store method called');

        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_address' => 'required|string|max:255',
            'invoice_date' => 'required|date',
            'description.*' => 'required|string',
            'amount.*' => 'required|numeric',
        ]);

        $items = [];
        $descriptions = $request->get('description');
        $amounts = $request->get('amount');

        foreach ($descriptions as $index => $description) {
            $items[] = [
                'description' => $description,
                'amount' => $amounts[$index],
            ];
        }

        $invoice = new Invoice([
            'invoice_number' => $this->generateInvoiceNumber(),
            'client_name' => $request->get('client_name'),
            'client_address' => $request->get('client_address'),
            'invoice_date' => $request->get('invoice_date'),
            'tax_rate' => $request->get('tax_rate', 0),
            'total' => array_sum($amounts),
            'items' => $items,
        ]);

        $invoice->save();

        Log::info('Invoice saved', ['invoice_id' => $invoice->id]);

        return redirect()->route('invoices.show', ['invoice' => $invoice->id])->with('success', 'Invoice created successfully.');
    }

    public function show(Invoice $invoice)
    {
        $pdf = Pdf::loadView('invoices.show', compact('invoice'));
        return $pdf->stream('invoice.pdf');
    }

    private function generateInvoiceNumber()
    {
        return 'INV-' . str_pad(Invoice::max('id') + 1, 6, '0', STR_PAD_LEFT);

}
}
