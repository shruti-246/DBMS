<?php

namespace App\Http\Controllers;

use App\Models\Own;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class OwnController extends Controller
{
    public function index(): View
    {
        $owns = Own::all();
        return view('owns.index', compact('owns'));
    }

    public function create(): View
    {
        return view('owns.create');
    }

    // OwnController.php
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'PetID' => 'required|integer|exists:pets,PetID',
            'Year' => 'required|integer',
            'OID' => 'required|integer|exists:owners,OID',
            'PetAgeatOwnership' => 'required|integer',
            'PricePaid' => 'required|numeric',
        ]);

        Own::create($request->except('_token'));

        return redirect()->route('owns.index')->with('success', 'Ownership record created successfully.');
    }


    public function show(Own $own): View
    {
        return view('owns.show', compact('own'));
    }

    public function edit(Own $own): View
    {
        return view('owns.edit', compact('own'));
    }

    public function update(Request $request, Own $own): RedirectResponse
    {
        $request->validate([
            'PetID' => 'required|integer',
            'Year' => 'required|integer',
            'OID' => 'required|integer',
            'PetAgeatOwnership' => 'required|integer',
            'PricePaid' => 'required|numeric',
        ]);

        $own->update($request->all());
        return redirect()->route('owns.index')->with('success', 'Ownership record updated successfully.');
    }

    public function destroy(Own $own): RedirectResponse
    {
        $own->delete();
        return redirect()->route('owns.index')->with('success', 'Ownership record deleted successfully.');
    }
}
