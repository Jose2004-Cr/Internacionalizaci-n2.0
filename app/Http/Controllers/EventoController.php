<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->fill($request->all());
        $evento->save();
    }

    /**
     * Display the specified resource.
     */
    // En tu EventController o el controlador que maneja la vista
    public function show($id)
{
    $evento = Evento::find($id);

    if (!$evento) {
        abort(404); // Manejar el caso en el que el evento no existe
    }

    return view('homecartas', ['evento' => $evento]);
}





    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
