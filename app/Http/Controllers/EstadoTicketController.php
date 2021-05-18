<?php

namespace App\Http\Controllers;

use App\Models\EstadoTicket;
use Illuminate\Http\Request;

class EstadoTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $estadoTickets = EstadoTicket::all();

        return response()->json(['data' => $estadoTickets], 200);
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
            'id_estado' => [],
            'id_ticket' => [],

        ]);
        $estadoTicket = new EstadoTicket();
        $estadoTicket->id_estado = $request->id_estado;
        $estadoTicket->id_ticket = $request->id_ticket;

        $estadoTicket->save();

        return response()->json(['data' => $estadoTicket], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => EstadoTicket::findOrFail($id)],200);
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
            'id_estado' => [],
            'calificación' => [],

        ]);
        $estadoTicket = EstadoTicket::findOrFail($id);
        $estadoTicket->id_estado = $request->input('id_estado');
        $estadoTicket->id_ticket = $request->input('id_ticket');
        $estadoTicket->save();

        return response()->json(['data' => $estadoTicket], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $estadoTicket = EstadoTicket::findOrFail($id);
        $estadoTicket->delete();

        return response()->json(['data' => $estadoTicket], 201);
    }
}
