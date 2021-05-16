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
            'sub_categoria' => ['required'],
            'id_categorias' => ['required'],

        ]);
        $tiporequerimiento = new Tiporequerimiento();
        $tiporequerimiento->cod= $request->cod;
        $tiporequerimiento->sub_categoria = $request->sub_categoria;
        $tiporequerimiento->id_categorias = $request->id_categorias;
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
            'sub_categoria' => [],
            'id_categorias' => [],

        ]);
        $tiporequerimiento = Tiporequerimiento::findOrFail($id);
        $tiporequerimiento->cod = $request->input('cod');
        $tiporequerimiento->sub_categoria = $request->input('sub_categoria');
        $tiporequerimiento->id_categorias = $request->input('id_categorias');
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
