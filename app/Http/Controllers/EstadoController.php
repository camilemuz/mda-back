<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $estados = Estado::all();
        //return 'holll';
        return response()->json(['data' => $estados], 200);
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
            'estado' => ['required'],

        ]);
        $estado = new Estado();
        $estado->cod = $request->cod;
        $estado->estado = $request->estado;
        $estado->save();

        return response()->json(['data' => $estado], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Estado::findOrFail($id)],200);
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
            'estado' => [],

        ]);
        $estado = Estado::findOrFail($id);
        $estado->cod = $request->input('cod');
        $estado->Estado = $request->input('Estado');


        $estado->save();

        return response()->json(['data' => $estado], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $estado = Estado::findOrFail($id);
        $estado->delete();

        return response()->json(['data' => $estado], 201);
    }
}
