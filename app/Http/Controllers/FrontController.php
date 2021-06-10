<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campeonato;
use App\Models\Calendario;
use App\Models\Equipo;

class FrontController extends Controller
{
    public function copaamerica(){
        $campeonato = Campeonato::whereSlug("copa-america")->first();
        
        return view('front.campeonato', compact('campeonato'));
    }
    public function equipo($equipo){
        $equipo = Equipo::whereSlug($equipo)->first();
        return view('front.equipo', compact('equipo'));
    }
}
