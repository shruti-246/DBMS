<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class FoodController extends Controller
{
    public function index(): View
    {
        $foods = Food::all();
        return view('foods.index', compact('foods'));
    }

    public function create(): View
    {
        return view('foods.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Name' => 'required|string|max:50',
            'Brand' => 'required|string|max:50',
            'TypeofFood' => 'required|string|max:50',
            'Price' => 'required|numeric',
            'ItemWeight' => 'required|numeric',
            'ClassofFood' => 'required|string|max:50',
        ]);

        Food::create($request->all());
        return redirect()->route('foods.index')->with('success', 'Food item created successfully.');
    }

    public function show(Food $food): View
    {
        return view('foods.show', compact('food'));
    }

    public function edit(Food $food): View
    {
        return view('foods.edit', compact('food'));
    }

    public function update(Request $request, Food $food): RedirectResponse
    {
        $request->validate([
            'Name' => 'required|string|max:50',
            'Brand' => 'required|string|max:50',
            'TypeofFood' => 'required|string|max:50',
            'Price' => 'required|numeric',
            'ItemWeight' => 'required|numeric',
            'ClassofFood' => 'required|string|max:50',
        ]);

        $food->update($request->all());
        return redirect()->route('foods.index')->with('success', 'Food item updated successfully.');
    }

    public function destroy(Food $food): RedirectResponse
    {
        $food->delete();
        return redirect()->route('foods.index')->with('success', 'Food item deleted successfully.');
    }
}
