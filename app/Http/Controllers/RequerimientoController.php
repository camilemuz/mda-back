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
<<<<<<< HEAD

=======
            'estado' => [],
>>>>>>> 1b82f9ae6bf3cc6ed549403495b7125d233165cb


        ]);
        $requerimiento = new Requerimiento();
        $requerimiento->descripcion = $request->descripcion;
        $requerimiento->fecha_atencion = $request->fecha_atencion;
<<<<<<< HEAD

=======
        $requerimiento->estado = $request->estado;
>>>>>>> 1b82f9ae6bf3cc6ed549403495b7125d233165cb

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
<<<<<<< HEAD

=======
        /*return $requerimientos;*/
>>>>>>> 1b82f9ae6bf3cc6ed549403495b7125d233165cb
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
<<<<<<< HEAD

=======
            'estado' => [],
>>>>>>> 1b82f9ae6bf3cc6ed549403495b7125d233165cb


        ]);
        $requerimiento = Requerimiento::findOrFail($id);
        $requerimiento->descripcion = $request->input('descripcion');
        $requerimiento->fecha_atencion = $request->input('fecha_atencion');
<<<<<<< HEAD

=======
        $requerimiento->estado = $request->input('estado');
>>>>>>> 1b82f9ae6bf3cc6ed549403495b7125d233165cb
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
