<?php

namespace App\Http\Controllers;

use App\Models\ControleNte;
use Illuminate\Http\Request;

class Controle_ntesController extends Controller
{

    // Mostra Todas as unidades do NTE passado por parametro
    public function index($nte)
    {
        // varios dados
        $controle_ntes = ControleNte::all()->where('nte', $nte);

        return view('nte.nte', ['controle_ntes' => $controle_ntes]);
    }

    public function show($id) {

        //  dados unicos
        $controle_ntes = ControleNte::findOrFail($id);

        return view ('nte.show_uee', ['controle_ntes' => $controle_ntes]);

    }
}
