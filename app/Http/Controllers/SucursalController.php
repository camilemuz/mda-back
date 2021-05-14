<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $sucursales = Sucursal::all();
        return response()->json(['data' => $sucursales], 200);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_sucursals' => ['required'],
            'nombre_sucursal' => ['required'],
            'id_municipios' => ['required'],

        ]);
        $sucursal = new Dep();
        $sucursal->id_sucursals = $request->id_sucursals;
        $sucursal->nombre_sucursal = $request->nombre_sucursal;
        $sucursal->id_municipios = $request->id_municipios;
        $sucursal->save();

        return response()->json(['data' => $sucursal], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  char  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Sucursal::findOrFail($id)],200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  char  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_sucursals' => [],
            'nombre_sucursal' => [],
            'id_municipios' => [],

        ]);
        $sucursal = Departamento::findOrFail($id);
        $sucursal->id_sucursals = $request->input('id_sucursals');
        $sucursal->nombre_sucursal = $request->input('nombre_sucursal');
        $sucursal->id_municipios = $request->input('id_municipios');
        $sucursal->save();

        return response()->json(['data' => $sucursal], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  char  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->delete();

        return response()->json(['data' => $sucursal], 201);
    }
}
