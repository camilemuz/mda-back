<?php

namespace App\Http\Controllers;

use App\Models\Requerimiento;
use Illuminate\Http\Request;

class RequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $requerimientos = Requerimiento::all();
        //return 'holll';
        return response()->json(['data' => $requerimientos], 200);
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
            'descripcion' => ['required'],
            'fecha_atencion' => ['required'],
            'id_users' => ['required'],
            'id_tiporeq' => ['required'],
            'id_calificacion' => [],
            'id_prioridad' => [],
            'id_ubicacion' => ['required'],
            'id_estado' => [],



        ]);
        $requerimiento = new Requerimiento();
        $requerimiento->descripcion = $request->descripcion;
        $requerimiento->fecha_atencion = $request->fecha_atencion;
        $requerimiento->id_users = $request->id_users;
        $requerimiento->id_tiporeq = $request->id_tiporeq;
        $requerimiento->id_calificacion = $request->id_calificacion;
        $requerimiento->id_prioridad = $request->id_prioridad;
        $requerimiento->id_ubicacion = $request->id_ubicacion;
        $requerimiento->id_estado = $request->id_estado;


        $requerimiento->save();

        return response()->json(['data' => $requerimiento], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id)
    {
        return response()->json(['data' => Requerimiento::findOrFail($id)], 200);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'descripcion' => [],
            'fecha_atencion' => [],
            'id_users' => [],
            'id_tiporeq' => [],
            'id_calificacion' => [],
            'id_prioridad' => [],
            'id_ubicacion' => [],
            'id_estado' => [],



        ]);
        $requerimiento = Requerimiento::findOrFail($id);
        $requerimiento->descripcion = $request->input('descripcion');
        $requerimiento->fecha_atencion = $request->input('fecha_atencion');
        $requerimiento->id_users = $request->input('id_users');
        $requerimiento->id_tiporeq = $request->input('id_tiporeq');
        $requerimiento->id_calificacion = $request->input('id_calificacion');
        $requerimiento->id_prioridad = $request->input('id_prioridad');
        $requerimiento->id_departamento= $request->input('id_departamento');
        $requerimiento->id_estado = $request->input('id_estado');

        $requerimiento->save();

        return response()->json(['data' => $requerimiento], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $requerimiento = Requerimiento::findOrFail($id);
        $requerimiento->delete();

        return response()->json(['data' => $requerimiento], 201);
    }
}
