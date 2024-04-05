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

    public function show($region)
    {
        $ambasaadeurs = Ambassadeur::where('region', $region)->get();
        return view('Ambassadeur.show', ['ambasaadeurs' => $ambasaadeurs, 'region' => $region]);
    }
}
