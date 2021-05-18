<?php

namespace App\Http\Controllers;

use App\Models\TicketPrioridad;
use Illuminate\Http\Request;

class TicketPrioridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $TicketPrioridades = TicketPrioridad::all();

        return response()->json(['data' => $TicketPrioridades], 200);
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
            'id_prioridad' => [],

        ]);
        $TicketPrioridad = new TicketPrioridad();
        $TicketPrioridad->id_ticket = $request->id_ticket;
        $TicketPrioridad->id_prioridad = $request->id_prioridad;

        $TicketPrioridad->save();

        return response()->json(['data' => $TicketPrioridad], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => TicketPrioridad::findOrFail($id)],200);
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
            'id_prioridad' => [],

        ]);
        $TicketPrioridad = TicketPrioridad::findOrFail($id);
        $TicketPrioridad->id_ticket = $request->input('id_ticket');
        $TicketPrioridad->id_prioridad = $request->input('id_prioridad');
        $TicketPrioridad->save();

        return response()->json(['data' => $TicketPrioridad], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $TicketPrioridad = TicketPrioridad::findOrFail($id);
        $TicketPrioridad->delete();

        return response()->json(['data' => $TicketPrioridad], 201);
    }
}
