<?php

namespace App\Http\Controllers;

use App\Models\Tiporequerimiento;
use Illuminate\Http\Request;

class TiporequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $tiporequerimientos = Tiporequerimiento::all();
        return response()->json(['data' => $tiporequerimientos], 200);
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
            'tipo_requerimiento' => ['required'],
            'id_categoria' => ['required'],

        ]);
        $tiporequerimiento = new Tiporequerimiento();
        $tiporequerimiento->cod= $request->cod;
        $tiporequerimiento->tipo_requerimiento = $request->tipo_requerimiento;
        $tiporequerimiento->id_categoria = $request->id_categorias;
        $tiporequerimiento->save();

        return response()->json(['data' => $tiporequerimiento], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Tiporequerimiento::findOrFail($id)],200);
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
            'tipo_requerimiento' => [],
            'id_categoria' => [],

        ]);
        $tiporequerimiento = Tiporequerimiento::findOrFail($id);
        $tiporequerimiento->cod = $request->input('cod');
        $tiporequerimiento->tipo_requerimiento = $request->input('tipo_requerimiento');
        $tiporequerimiento->id_categoria = $request->input('id_categoria');
        $tiporequerimiento->save();

        return response()->json(['data' => $tiporequerimiento], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $tiporequerimiento = Tiporequerimiento::findOrFail($id);
        $tiporequerimiento->delete();

        return response()->json(['data' => $tiporequerimiento], 201);
    }
}
