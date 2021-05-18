<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $tickets = Ticket::all();

        return response()->json(['data' => $tickets], 200);
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
            'numero' => ['required'],

        ]);
        $ticket = new Ticket();
        $ticket->cod = $request->cod;
        $ticket->numero = $request->numero;

        $ticket->save();

        return response()->json(['data' => $ticket], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => Ticket::findOrFail($id)],200);
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
            'numero' => [],

        ]);
        $ticket = Ticket::findOrFail($id);
        $ticket->cod = $request->input('cod');
        $ticket->calificacion = $request->input('numero');
        $ticket->save();

        return response()->json(['data' => $ticket], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return response()->json(['data' => $ticket], 201);
    }
}
