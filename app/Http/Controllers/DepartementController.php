<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index() {
        return view('Departement.index', ['departements' => Departement::all()]);
    }
}
