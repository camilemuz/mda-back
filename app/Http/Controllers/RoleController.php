<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $roles= Role::all();

        return response()->json(['data' => $roles], 200);
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
            'rol' => ['required'],

        ]);
        $rol = new Role();
        $rol->cod = $request->cod;
        $rol->rol = $request->rol;
        $rol->save();

        return response()->json(['data' => $rol], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Role::findOrFail($id)],200);
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
            'rol' => [],

        ]);
        $rol = Role::findOrFail($id);
        $rol->cod = $request->input('cod');
        $rol->rol = $request->input('rol');


        $rol->save();

        return response()->json(['data' => $rol], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $rol = Role::findOrFail($id);
        $rol->delete();

        return response()->json(['data' => $rol], 201);
    }
}
