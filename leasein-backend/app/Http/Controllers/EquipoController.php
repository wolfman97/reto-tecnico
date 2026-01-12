<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        return Equipo::all();
    }

    public function validar(Request $request)
    {
        $request->validate([
            'codigos' => 'required|array'
        ]);

        $codigos = $request->codigos;

        $encontrados = Equipo::whereIn('codigo', $codigos)
            ->pluck('codigo')
            ->toArray();

        $noEncontrados = array_values(array_diff($codigos, $encontrados));

        return response()->json([
            'encontrados' => $encontrados,
            'no_encontrados' => $noEncontrados
        ]);
    }
}
