<?php

namespace App\Http\Controllers;

use App\Models\Ambassadeur;
use Illuminate\Http\Request;

class AmbassadeurController extends Controller
{
    public function index()
    {
        $ambasaadeurs = Ambassadeur::select('region')
        ->groupBy('region')
        ->get();
        return view('Ambassadeur.index', ['ambasaadeurs' => $ambasaadeurs]);
    }

    public function show($Ambassadeur_region)
    {
        $ambasaadeurs = Ambassadeur::where('region', $Ambassadeur_region)->get();
        return view('Ambassadeur.show', ['ambasaadeurs' => $ambasaadeurs, 'region' => $Ambassadeur_region]);
    }
    public function showAmbassadeur($Ambassadeur_id)
    {
        $ambasaadeur = Ambassadeur::find($Ambassadeur_id);
        return view('Ambassadeur.showAmbassadeur', ['ambasaadeur' => $ambasaadeur]);
    }
}
