<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movilidad;
use App\Models\Actividad;
use App\Models\Evento;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actividades = Actividad::all();
        $movilidades = Movilidad::all();
        return view('home', compact('movilidades', 'actividades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'Name' => 'required|string|max:255',
        'Director' => 'required|string|max:255',
        'Evento_Inicio' => 'required|date',
        'Evento_Fin' => 'required|date',
        'actividad_id' => 'required|exists:actividads,id',
        'movilidad_id' => 'required|exists:movilidads,id',
    ]);

    $evento = new Evento();
    $evento->fill($validatedData);
    $evento->save();

    return response()->json($evento, 201); // Retornar el evento guardado en formato JSON con código de estado 201
}

}
