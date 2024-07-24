<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class CalendarioController extends Controller


{   public function index()
    {
        $eventos = Evento::all(); // Obtiene todos los eventos de la base de datos
        $eventos = $eventos->map(function ($evento) {
            return [
                'hora' => $evento->Evento_Inicio,
                'event_title' => $evento->Name,
                'event_theme' => 'blue', // Puedes ajustar esto según tus necesidades
                'nota' => $evento->Director,
            ];
        });

        return view('calendario', ['eventos' => json_encode($eventos)]);
    }

    public function mostrarPorFecha(Request $request)
    {
        $fecha = $request->input('fecha');
        $eventos = Evento::whereDate('Evento_Inicio', $fecha)->get();

        return response()->json($eventos);
    }
}
