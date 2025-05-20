<?php

namespace App\Http\Controllers;

use App\Models\Novo;
use Illuminate\Http\Request;

class NovoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Novo = new Novo();
        $Novo = $Novo->all();

        return view('Index', compact(['Novo']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $novo = new Novo();
        $novo->name = $request->name;
        $novo->species = $request->species;
        $novo->weight = $request->weight;
        $novo->birthdate = $request->birthdate;
        $novo->cor = $request->cor;

        $novo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
