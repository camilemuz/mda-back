<?php

namespace App\Http\Controllers;

use App\Models\CalificacionTicketUsuario;
use Illuminate\Http\Request;

class CalificacionTicketUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $CalificacionTickets = CalificacionTicketUsuario::all();

        return response()->json(['data' => $CalificacionTickets], 200);
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
            'id_ticket' => [],
            'id_calificacion' => [],
            'id_user' => [],

        ]);
        $CalificacionTicket = new CalificacionTicketUsuario();
        $CalificacionTicket->id_ticket = $request->id_ticket;
        $CalificacionTicket->id_calificacion = $request->id_calificacion;
        $CalificacionTicket->id_user = $request->id_user;

        $CalificacionTicket->save();

        return response()->json(['data' => $CalificacionTicket], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => CalificacionTicketUsuario::findOrFail($id)],200);
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
            'id_ticket' => [],
            'id_calificacion' => [],
            'id_user' => [],

        ]);
        $CalificacionTicket = CalificacionTicketUsuario::findOrFail($id);
        $CalificacionTicket->id_ticket = $request->input('id_ticket');
        $CalificacionTicket->id_calificacion = $request->input('id_calificacion');
        $CalificacionTicket->id_user = $request->input('id_user');
        $CalificacionTicket->save();

        return response()->json(['data' => $CalificacionTicket], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $CalificacionTicket = CalificacionTicketUsuario::findOrFail($id);
        $CalificacionTicket->delete();

        return response()->json(['data' => $CalificacionTicket], 201);
    }
}
