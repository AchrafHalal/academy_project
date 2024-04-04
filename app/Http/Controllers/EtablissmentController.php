<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Etablissement;
use Illuminate\Http\Request;

class EtablissmentController extends Controller
{
    public function index()
    {
        $etablissements = Etablissement::select('Institution_name')
            ->groupBy('Institution_name')
            ->get();

        return view('Etablissement.index', ['etablissements' => $etablissements]);
    }

    public function show($etablisement)
    {
        $etablissements = Etablissement::where('Institution_name', $etablisement)->distinct()->get();
        return view('Etablissement.show', ['etablissements' => $etablissements, 'etablisement' => $etablisement]);
    }


}
