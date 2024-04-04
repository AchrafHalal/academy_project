<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;


class DepartementController extends Controller
{
            public function index()
            {
                $departements = Departement::select('departement')
                    ->groupBy('departement')
                    ->get();

                return view('Departement.index', ['departements' => $departements]);
    }

    public function show($departement)
    {
        $departements = Departement::where('departement', $departement)->get();
        return view('Departement.show', ['departements' => $departements, 'departement' => $departement]);
    }

    public function show_name($name) {
        $departements = Departement::where('name', $name)->get();
        return view('Departement.show_name', ['departements' => $departements, 'name' => $name]);
    }

}