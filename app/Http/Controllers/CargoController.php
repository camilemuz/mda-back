<?php

namespace App\Http\Controllers;

use App\Models\cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = cargo::all();

        return response()->json(['data' => $cargos], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'cod' => ['required'],
            'cargo' => ['required'],

        ]);
        $cargo = new Cargo();
        $cargo->cod = $request->cod;
        $cargo->cargo=$request->cargo;
        $cargo->save();

        return response()->json(['data' => $cargo], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['data' => Cargo::findOrFail($id)],200);    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cod' => [],
            'cargo' => [],

        ]);
        $cargo = Cargo::findOrFail($id);
        $cargo->id = $request->input('cod');
        $cargo->cargo = $request->input('cargo');


        $cargo->save();

        return response()->json(['data' => $cargo], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();

        return response()->json(['data' => $cargo], 201);
    }
}
