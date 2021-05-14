<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $calificaiones = Calificacion::all();

        return response()->json(['data' => $calificaiones], 200);
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
            'calificacion' => ['required'],

        ]);
        $calificacion = new Calificacion();
        $calificacion->id = $request->id;

        $calificacion->save();

        return response()->json(['data' => $calificacion], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  char  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Calificacion::findOrFail($id)],200);
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
            'calificación' => [],

        ]);
        $calificacion = Categoria::findOrFail($id);
        $calificacion->id = $request->input('id');
        $calificacion->calificacion = $request->input('calificacion');


        $calificacion->save();

        return response()->json(['data' => $calificacion], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  char  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $calificacion = Calificacion::findOrFail($id);
        $calificacion->delete();

        return response()->json(['data' => $calificacion], 201);
    }
}
