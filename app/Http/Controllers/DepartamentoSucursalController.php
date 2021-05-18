<?php

namespace App\Http\Controllers;

use App\Models\dptosucursal;
use Illuminate\Http\Request;

class DepartamentoSucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $DptoSucursles = dptosucursal::all();
        //return 'holll';
        return response()->json(['data' => $DptoSucursles], 200);
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
            'id_sucursal' => ['required'],
            'id_dpto' => ['required'],

        ]);
        $dptoSucural = new dptosucursal();
        $dptoSucural->id_sucursal = $request->id_sucursal;
        $dptoSucural->id_dpto = $request->id_dpto;
        $dptoSucural->save();

        return response()->json(['data' => $dptoSucural], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => dptosucursal::findOrFail($id)],200);
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
            'id_sucursal' => [],
            'id_dpto' => [],

        ]);
        $dptoSucural = dptosucursal::findOrFail($id);
        $dptoSucural->id_sucursal = $request->input('id_sucursal');
        $dptoSucural->id_dpto = $request->input('id_dpto');


        $dptoSucural->save();

        return response()->json(['data' => $dptoSucural], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $dptoSucural = dptosucursal::findOrFail($id);
        $dptoSucural->delete();

        return response()->json(['data' => $dptoSucural], 201);
    }
}
