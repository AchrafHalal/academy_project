<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;


class DepartementController extends Controller
{
            public function index()
            {
                $departements = Departement::distinct('departement')->get(['departement']);

                $regions = Departement::select('region')
                            ->groupBy('region')
                            ->get();
            
                return view('Departement.index', compact('departements', 'regions'));
          }

    public function show($region, $departement)
    {
        $departements = Departement::where('region', $region)
            ->where('departement', $departement)
            ->get();
        return view('Departement.show', ['departements' => $departements, 'departement' => $departement, 'region' => $region]);
    }

    public function show_name($name) {
        $departements = Departement::where('name', $name)->get();
        return view('Departement.show_name', ['departements' => $departements, 'name' => $name]);
    }

    public function edit($name) {
        $person = Departement::where('name', $name)->get();
        return view('Departement.update', ['person' => $person]);
    }

}

