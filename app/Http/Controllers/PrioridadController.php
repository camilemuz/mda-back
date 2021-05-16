<?php

namespace App\Http\Controllers;

use App\Models\Prioridad;
use Illuminate\Http\Request;

class PrioridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $prioridades = Prioridad::all();

        return response()->json(['data' => $prioridades], 200);
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
            'prioridad' => ['required'],

        ]);
        $prioridad = new Prioridad();
        $prioridad->cod = $request->cod;
        $prioridad->prioridad = $request->prioridad;

        $prioridad->save();

        return response()->json(['data' => $prioridad], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Prioridad::findOrFail($id)],200);
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
            'prioridad' => [],

        ]);
        $prioridad = Prioridad::findOrFail($id);
        $prioridad->cod = $request->input('cod');
        $prioridad->prioridad = $request->input('prioridad');
        $prioridad->save();

        return response()->json(['data' => $prioridad], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $prioridad = Prioridad::findOrFail($id);
        $prioridad->delete();

        return response()->json(['data' => $prioridad], 201);
    }
}
