<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return response()->json(['data' => $departamentos], 200);
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
            'id' => ['required'],
            'nombre_departamento' => ['required'],
            'id_sucursal' => ['required'],

        ]);
        $departamento = new Estado();
        $departamento->id = $request->id;
        $departamento->nombre_departamento = $request->nombre_departamento;
        $departamento->id_sucursal = $request->id_sucursal;
        $departamento->save();

        return response()->json(['data' => $departamento], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  char  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Departamento::findOrFail($id)],200);
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
            'id' => ['required'],
            'nombre_departamento' => [],
            'id_sucursal' => [],

        ]);
        $departamento = Departamento::findOrFail($id);
        $departamento->id = $request->input('id');
        $departamento->nombre_departamento = $request->input('nombre_departamento');
        $departamento->id_sucursal = $request->input('id_sucursal');
        $departamento->save();

        return response()->json(['data' => $departamento], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  char  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();

        return response()->json(['data' => $departamento], 201);
    }
}
