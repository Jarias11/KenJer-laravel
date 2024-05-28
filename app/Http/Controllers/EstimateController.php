<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estimate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;

class EstimateController extends Controller
{
    //
    public function create()
    {
        return view('estimates.create');
    }

    public function index()
    {
        $estimates = estimate::all();
        return view('invoices.index', compact('invoices'));
    }

    public function store(Request $request)
    {
        Log::info('Store method called');

        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_address' => 'required|string|max:255',
            'estimate_date' => 'required|date',
            'description.*' => 'required|string',
            'amount.*' => 'required|numeric',
            'notes.*' => 'required|string',
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

        $estimate = new estimate([
            'estimate_number' => $this->generateEstimateNumber(),
            'client_name' => $request->get('client_name'),
            'client_address' => $request->get('client_address'),
            'estimate_date' => $request->get('estimate_date'),
            'tax_rate' => $request->get('tax_rate', 0),
            'total' => array_sum($amounts),
            'notes.*' => 'required|string',
            'items' => $items,
        ]);

        $estimate->save();

        Log::info('Estimate saved', ['estimate_id' => $estimate->id]);

        return redirect()->route('estimates.show', ['estimate' => $estimate->id])->with('success', 'Estimate created successfully.');
    }

    public function show(estimate $estimate)
    {
        $pdf = Pdf::loadView('estimates.show', compact('estimate'));
        return $pdf->stream('estimate.pdf');
    }

    private function generateEstimateNumber()
    {
        return 'EST-' . str_pad(estimate::max('id') + 1, 6, '0', STR_PAD_LEFT);
    }
}
