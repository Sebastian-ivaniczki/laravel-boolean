<?php

namespace App\Http\Controllers;

use App\Models\Egg;
use Illuminate\Http\Request;

class EggController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eggs = Egg::all();
        // dd($eggs);
        return view('eggs.index', compact('eggs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eggs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $egg = new Egg();

        $egg->fill($data);

        $egg->save();

        return redirect()->route('eggs.show', $egg->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Egg $egg)
    {

        return view('eggs.show', compact('egg'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $egg = Egg::findOrFail($id);
        return view('eggs.edit', compact('egg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $newEgg = new Egg();

        $newEgg->fill($data);
        $newEgg->save();

        return redirect()->route('eggs.show', $newEgg->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Egg $egg)
    {
        $egg->delete();

        return redirect()->route('eggs.index');
    }
}
