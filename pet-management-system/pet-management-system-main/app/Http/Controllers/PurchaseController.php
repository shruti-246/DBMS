<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PurchaseController extends Controller
{
    public function index(): View
    {
        $purchases = Purchase::all();
        return view('purchases.index', compact('purchases'));
    }

    public function create(): View
    {
        return view('purchases.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'OID' => 'required|integer',
            'FoodID' => 'required|integer',
            'PetID' => 'required|integer',
            'Month' => 'required|string|max:20',
            'Year' => 'required|integer',
            'Quantity' => 'required|integer',
        ]);

        Purchase::create($request->all());
        return redirect()->route('purchases.index')->with('success', 'Purchase record created successfully.');
    }

    public function show(Purchase $purchase): View
    {
        return view('purchases.show', compact('purchase'));
    }

    public function edit(Purchase $purchase): View
    {
        return view('purchases.edit', compact('purchase'));
    }

    public function update(Request $request, Purchase $purchase): RedirectResponse
    {
        $validatedData = $request->validate([
            'OID' => 'required|integer',
            'FoodID' => 'required|integer',
            'PetID' => 'required|integer',
            'Month' => 'required|string|max:20',
            'Year' => 'required|integer',
            'Quantity' => 'required|integer',
        ]);

        $purchase->update($validatedData);
        return redirect()->route('purchases.index')->with('success', 'Purchase record updated successfully.');
    }

    public function destroy(Purchase $purchase): RedirectResponse
    {
        $purchase->delete();
        return redirect()->route('purchases.index')->with('success', 'Purchase record deleted successfully.');
    }
}
