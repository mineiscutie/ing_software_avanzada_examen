<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ClienteRequest;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create', ['cliente' => new Cliente()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClienteRequest $request)
    {
        $data = $request->validated();
        $data['foto'] = $request->file('foto')->store('clientes', 'public');
        Cliente::create($data);
        return redirect()->route('clientes.index')->with('estado', 'Cliente registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClienteRequest $request, Cliente $cliente)
    {
        $data = array_filter($request->validated());

        if ($request->hasFile('foto')) {
            if ($cliente->foto) Storage::disk('public')->delete($cliente->foto);
            $data['foto'] = $request->file('foto')->store('clientes', 'public');
        }

        $cliente->update($data);
        return redirect()->route('clientes.index')->with('estado', 'Cliente actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        if ($cliente->foto) Storage::disk('public')->delete($cliente->foto);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('estado', 'Cliente eliminado');
    }
}
