<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $municipios = Municipio::all();

        return response()->json(['data' => $municipios], 200);
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
            'nombre_municipios' => ['required'],

        ]);
        $municipio = new Municipio();
        $municipio->id = $request->id;

        $municipio->save();

        return response()->json(['data' => $municipio], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  char  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Municipio::findOrFail($id)],200);
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
            'id' => [],
            'nombre_municipio' => [],

        ]);
        $municipio = Municipio::findOrFail($id);
        $municipio->id = $request->input('id');
        $municipio->nombre_municipio = $request->input('nombre_municipio');


        $estado->save();

        return response()->json(['data' => $municipio], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  char  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $estado = Estado::findOrFail($id);
        $estado->delete();

        return response()->json(['data' => $estado], 201);
    }
}
