@extends('Departement.layout')
@section('navbar')
    <h1>hello departement</h1>
    <form action="{{route('departement', ['id' => $request->input('departement')])}}">
        <select name="departement" id="">
            @foreach ($departements as $departement)
                <option value="{{ $departement->id }}">{{ $departement->name }}</option>
            @endforeach
        </select>
        <button type="submit">submit</button>
    </form>
@endsection