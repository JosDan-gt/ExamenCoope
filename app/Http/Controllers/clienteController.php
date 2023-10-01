<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Cliente::all();
        return $cliente;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->cod_asociado = $request->cod_asociado;
        $cliente->id_users = $request->id_users;
        $cliente->nombre = $request->nombre;
        $cliente->apellido1 = $request->apellido1;
        $cliente->apellido2 = $request->apellido2;
        $cliente->dpi = $request->dpi;
        $cliente->sexo = $request->sexo;
        $cliente->direccion = $request->direccion;
        $cliente->fecha_nac = $request->fecha_nac;
        $cliente->estado_civ = $request->estado_civ;


        $cliente->save();
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
    public function update(Request $request)
    {
        $cliente = Cliente::findOrFail($request->id_cli);
        $cliente->cod_asociado = $request->cod_asociado;
        $cliente->id_users = $request->id_users;
        $cliente->nombre = $request->nombre;
        $cliente->apellido1 = $request->apellido1;
        $cliente->apellido2 = $request->apellido2;
        $cliente->dpi = $request->dpi;
        $cliente->sexo = $request->sexo;
        $cliente->direccion = $request->direccion;
        $cliente->fecha_nac = $request->fecha_nac;
        $cliente->estado_civ = $request->estado_civ;

        $cliente->save();

        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $cliente = Cliente::destroy($request->id_cli);
        return $cliente;
    }
}
