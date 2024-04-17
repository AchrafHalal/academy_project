<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    public function index()
    {
        $associations = Association::all();
        return view('Association.index', compact('associations'));
    }

    public function show($name)
    {
        $association = Association::where('name', $name)->get();
        return view('Association.show', compact('association','name'));
    }

}
