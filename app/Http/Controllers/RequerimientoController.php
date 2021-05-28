<?php

namespace App\Http\Controllers;

use App\Models\Requerimiento;
use App\Models\Ticket;
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


        $requerimiento = Requerimiento::all();
        return response()->json(['data' => $requerimiento], 200);
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
            'descripcion' => [],
            'interno' => [],
            'id_users' => [],
            'id_tiporeq' => [],
            'id_departamento' => [],




        ]);
        $requerimiento = new Requerimiento();
        $requerimiento->descripcion = $request->descripcion;
        $requerimiento->interno = $request->interno;
        $requerimiento->id_users = $request->id_users;
        $requerimiento->id_tiporeq = $request->id_tiporeq;
        $requerimiento->id_departamento = $request->id_departamento;



        $requerimiento->save();




        $ticket = new Ticket();
        $ticket-> id_req= $requerimiento->id;
        $ticket->numero = random_int(10000, 99999);
        $ticket->id_estado = 1;
        $ticket->comentarios = 'pon aquí tu comentario';

        $ticket->save();

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
            'interno' => [],
            'id_tiporeq' => [],
            'id_departamento' => [],
            'id_estado' => [],
            'comentarios' => [],




        ]);
        $requerimiento = Requerimiento::findOrFail($id);
        $requerimiento->descripcion = $request->input('descripcion');
        $requerimiento->interno = $request->input('interno');
        $requerimiento->id_tiporeq = $request->input('id_tiporeq');
        $requerimiento->id_departamento= $request->input('id_departamento');

        $requerimiento->save();

        Ticket::where('id_req',$id)->update(['id_estado'=>$request->id_estado,
            'comentarios'=>$request->comentarios]);
      /*  $ticket-> id_req= $id;*/
        /*$ticket->numero = random_int(10000, 99999);*/
       /* $ticket->id_estado = $request->input('id_estado');
        $ticket->comentarios = $request->input('comentarios');*/

   /*      $ticket->save();*/


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
