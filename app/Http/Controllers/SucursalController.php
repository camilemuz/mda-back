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
            'cod' => ['required'],
            'sucursal' => ['required'],
            'id_municipio' => ['required'],

        ]);
        $sucursal = new Sucursal();
        $sucursal->cod= $request->cod;
        $sucursal->sucursal = $request->sucursal;
        $sucursal->id_municipio = $request->id_municipio;
        $sucursal->save();

        return response()->json(['data' => $sucursal], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cod' => [],
            'sucursal' => [],
            'id_municipio' => [],

        ]);
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->cod = $request->input('cod');
        $sucursal->sucursal = $request->input('sucursal');
        $sucursal->id_municipio = $request->input('id_municipio');
        $sucursal->save();

        return response()->json(['data' => $sucursal], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->delete();

        return response()->json(['data' => $sucursal], 201);
    }

    public function filtro($id){
        $sucursal = Sucursal::join("sucursals","sucursals.id_municipio","=","municipios.id")

            ->get();
        return response()->json(['data' => $sucursal], 201);
    }
}
