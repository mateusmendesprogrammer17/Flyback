<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fly;

class flyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flies = Fly::paginate(10);
        return view('flies.index', compact('flies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required | text',
            'category' => 'required|',
            'status' => 'required|enum:analysis,approved,rejected',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Fly $fly)
    {
        return view('flies.show', compact('fly'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fly $fly)
    {
        return view('flies.edit', compact('fly'));
        if(!Fly::find($fly)){
            return redirect()->route('flies.index')
                ->with('error', 'Fly not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required | text',
            'category' => 'required|',
            'status' => 'required|enum:analysis,approved,rejected',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fly $fly)
    {
        $fly->delete();
        return redirect()->route('flies.index')
            ->with('success', 'Fly deleted successfully');
    }
}
