<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inspection;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    public function index()
    {
        $inspections = Inspection::select('region', 'section', 'specialisation')
                             ->groupBy('region', 'section', 'specialisation')
                             ->distinct()
                             ->get();

        return view('Inspection.index', ['inspections' => $inspections]);
    }

    public function show($region, $section, $specialisation)
    {
        $inspections = Inspection::where('region', $region)
                             ->where('section', $section)
                             ->where('specialisation', $specialisation)
                             ->get();

        return view('Inspection.show', ['inspections' => $inspections, 'inspection' => $region]);
    }

    public function show_name($name) {
        $inspections = Inspection::where('inspecteur_name', $name)->get();
        return view('Inspection.show_name', ['inspections' => $inspections, 'name' => $name]);
    }
}
