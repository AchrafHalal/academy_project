@extends('Departement.layout')

@section('navbar')
    <h1>Show Departement: {{ $departement }}</h1>

    @if($departements->isEmpty())
        <p>No data found for this departements.</p>
    @else
        <ul>
            @foreach($departements as $dept)
                <li><a href="{{route('departement.show_name', ['name' => $dept->name])}}"> {{ $dept->name }} - {{ $dept->job }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection
