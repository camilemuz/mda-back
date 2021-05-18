<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return response()->json(['data' => $departamentos], 200);
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
            'departamento' => ['required'],
           /* 'id_dptosucur' => ['required'],*/

        ]);
        $departamento = new Departamento();
        $departamento->cod = $request->cod;
        $departamento->departamento = $request->departamento;
        /*$departamento->id_dptosucur = $request->id_dptosucur;*/
        $departamento->save();

        return response()->json(['data' => $departamento], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Departamento::findOrFail($id)],200);
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
            'departamento' => [],
           /* 'id_dptosucur' => [],*/

        ]);
        $departamento = Departamento::findOrFail($id);
        $departamento->cod = $request->input('cod');
        $departamento->departamento = $request->input('departamento');
        /*$departamento->id_dptosucur = $request->input('id_dptosucur');*/
        $departamento->save();

        return response()->json(['data' => $departamento], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();

        return response()->json(['data' => $departamento], 201);
    }
}
