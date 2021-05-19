<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class  UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function index()
    {
        $users = User::all();
        return response()->json(['data' => $users], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => ['required'],
            'ap_paterno' => ['required'],
            'ap_materno' => [],
            'email' => ['required', 'email:rfc,dns', 'unique:users,email'],
            'password' => ['required', 'min:8'],
            'division' => [],
            'id_cargo' => [],
            'id_rol' => [],




        ]);
        $user = new User();
        $user->nombre = $request->nombre;
        $user->ap_paterno = $request->ap_paterno;
        $user->ap_materno = $request->ap_materno;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->division = $request->division;
        $user->id_cargo = $request->id_cargo;
        $user->id_rol = $request->id_rol;


        $user->rol = $request->rol;

        $user->save();

        return response()->json(['data' => $user], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(User $user)
    {
        return response()->json(['data' => $user], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update( Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => ['required'],
            'ap_paterno' => ['required'],
            'ap_materno' => [],
            'email' => ['required'],
            'password' => ['required', 'min:8'],
            'division' => [],
            'id_cargo' => [],
            'id_rol' => [],
        ]);
        $user = User::findOrFail($id);
        $user->nombre = $request->input('nombre');
        $user->ap_paterno = $request->input('ap_paterno');
        $user->ap_materno = $request->input('ap_materno');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->division = $request->input('division');
        $user->id_cargo = $request->input('id_cargo');
        $user->id_rol = $request->input('id_rol');
        $user->save();

        return response()->json(['data' => $user], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['data' => $user], 201);
    }
}

