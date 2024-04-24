<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Http\Request;

class AcademyController extends Controller
{
    public function index()
    {
        $departements = Academy::select('departement')
                    ->groupBy('departement')
                    ->get();
        return view('Academy.index', compact('departements'));
    }


    public function show_name($departement)
    {
        $departements = Academy::where('departement', $departement)
            ->get();
        return view('Academy.show_name', ['departements' => $departements , 'departement' => $departement]);
    }
}
