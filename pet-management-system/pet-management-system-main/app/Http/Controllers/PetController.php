<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PetController extends Controller
{
    public function index(): View
    {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }

    public function create(): View
    {
        return view('pets.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Age' => 'required|integer',
            'Street' => 'required|string|max:255',
            'City' => 'required|string|max:255',
            'ZipCode' => 'required|string|max:10',
            'State' => 'required|string|max:255',
            'TypeofPet' => 'required|string|max:255',
        ]);

        Pet::create($request->all());
        return redirect()->route('pets.index')->with('success', 'Pet created successfully.');
    }

    public function show(Pet $pet): View
    {
        return view('pets.show', compact('pet'));
    }

    public function edit(Pet $pet): View
    {
        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet): RedirectResponse
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Age' => 'required|integer',
            'Street' => 'required|string|max:255',
            'City' => 'required|string|max:255',
            'ZipCode' => 'required|string|max:10',
            'State' => 'required|string|max:255',
            'TypeofPet' => 'required|string|max:255',
        ]);

        $pet->update($request->all());
        return redirect()->route('pets.index')->with('success', 'Pet updated successfully.');
    }

    public function destroy(Pet $pet): RedirectResponse
    {
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully.');
    }
}
