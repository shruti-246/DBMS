<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class LikeController extends Controller
{
    public function index(): View
    {
        $likes = Like::all();
        return view('likes.index', compact('likes'));
    }

    public function create(): View
    {
        return view('likes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'PetID' => 'required|integer',
            'TypeofFood' => 'required|string|max:50',
        ]);

        Like::create($request->all());
        return redirect()->route('likes.index')->with('success', 'Like record created successfully.');
    }

    public function show(Like $like): View
    {
        return view('likes.show', compact('like'));
    }

    public function edit(Like $like): View
    {
        return view('likes.edit', compact('like'));
    }

    public function update(Request $request, Like $like): RedirectResponse
    {
        $request->validate([
            'PetID' => 'required|integer',
            'TypeofFood' => 'required|string|max:50',
        ]);

        $like->update($request->all());
        return redirect()->route('likes.index')->with('success', 'Like record updated successfully.');
    }

    public function destroy(Like $like): RedirectResponse
    {
        $like->delete();
        return redirect()->route('likes.index')->with('success', 'Like record deleted successfully.');
    }
}
