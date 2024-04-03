@extends('Departement.layout')

@section('navbar')
    <h1>Show Personne: {{ $name }}</h1>

    @if($departements->isEmpty())
        <p>No data found for this departements.</p>
    @else
        <ul>
            @foreach($departements as $dept)
                <li><a href=""> {{ $dept->name }} - {{ $dept->job }} - {{$dept->phone }} - {{ $dept->email }} </a></li>
            @endforeach
        </ul>
    @endif
@endsection
