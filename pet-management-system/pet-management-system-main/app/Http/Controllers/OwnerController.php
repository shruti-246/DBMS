<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class OwnerController extends Controller
{
    public function index(): View
    {
        $owners = Owner::all();
        return view('owners.index', compact('owners'));
    }

    public function create(): View
    {
        return view('owners.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'LastName' => 'required|string|max:50',
        'Street' => 'required|string|max:100',
        'City' => 'required|string|max:50',
        'ZipCode' => 'required|string|max:10',
        'State' => 'required|string|max:20',
        'Age' => 'required|integer',
        'AnnualIncome' => 'required|numeric',
    ]);

    Owner::create($validatedData);
    return redirect()->route('owners.index')->with('success', 'Owner created successfully.');
}


    public function show(Owner $owner): View
    {
        return view('owners.show', compact('owner'));
    }

    public function edit(Owner $owner): View
    {
        return view('owners.edit', compact('owner'));
    }

    public function update(Request $request, Owner $owner): RedirectResponse
    {
        $request->validate([
            'LastName' => 'required|string|max:50',
            'Street' => 'required|string|max:100',
            'City' => 'required|string|max:50',
            'ZipCode' => 'required|string|max:10',
            'State' => 'required|string|max:20',
            'Age' => 'required|integer',
            'AnnualIncome' => 'required|numeric',
        ]);

        $owner->update($request->all());
        return redirect()->route('owners.index')->with('success', 'Owner updated successfully.');
    }

    public function destroy(Owner $owner): RedirectResponse
    {
        $owner->delete();
        return redirect()->route('owners.index')->with('success', 'Owner deleted successfully.');
    }
}
