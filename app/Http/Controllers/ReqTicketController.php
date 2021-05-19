<?php

namespace App\Http\Controllers;

use App\Models\ReqTicket;
use Illuminate\Http\Request;

class ReqTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $reqtickets = ReqTicket::all();

        return response()->json(['data' => $reqtickets], 200);
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
            'id_req' => ['required'],
            'id_ticket' => ['required'],

        ]);
        $reqticket = new ReqTicket();
        $reqticket->id_req = $request->id_req;
        $reqticket->id_ticket = $request->id_ticket;

        $reqticket->save();

        return response()->json(['data' => $reqticket], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(['data' => ReqTicket::findOrFail($id)],200);
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
            'id_req' => [],
            'id_ticket' => [],

        ]);
        $reqticket = ReqTicket::findOrFail($id);
        $reqticket->id_req = $request->input('id_req');
        $reqticket->id_ticket = $request->input('id_ticket');
        $reqticket->save();

        return response()->json(['data' => $reqticket], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $reqticket = ReqTicket::findOrFail($id);
        $reqticket->delete();

        return response()->json(['data' => $reqticket], 201);
    }
}
