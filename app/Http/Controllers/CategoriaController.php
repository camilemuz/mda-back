<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $categorias = Categoria::all();

        return response()->json(['data' => $categorias], 200);
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
            'categoria' => ['required'],

        ]);
        $categoria = new Categoria();
        $categoria->cod = $request->cod;
        $categoria->categoria = $request->categoria;

        $categoria->save();

        return response()->json(['data' => $categoria], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Categoria::findOrFail($id)],200);
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
            'categoria' => [],

        ]);
        $categoria = Categoria::findOrFail($id);
        $categoria->cod = $request->input('cod');
        $categoria->categoria = $request->input('categoria');


        $categoria->save();

        return response()->json(['data' => $categoria], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return response()->json(['data' => $categoria], 201);
    }
}
