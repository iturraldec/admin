<?php

namespace App\Http\Controllers;

use App\Models\TpProveedor;
use Illuminate\Http\Request;

class TpProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpProveedores = TpProveedor::all();

        return response()->json($tpProveedores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tpProveedor = TpProveedor::firstOrCreate($request->all());

        return response()->json($tpProveedor, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TpProveedor  $tpProveedor
     * @return \Illuminate\Http\Response
     */
    public function show(TpProveedor $tpProveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TpProveedor  $tpProveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TpProveedor $tpProveedor)
    {
        $tipo = TpProveedor::findOrFail($tpProveedor->id);
        $tipo->update($request->all());

        return response()->json($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TpProveedor  $tpProveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(TpProveedor $tpProveedor)
    {
        $tpProveedor->delete();

        return response()->json(null, 204);
    }
}
