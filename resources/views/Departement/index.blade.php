@extends('Departement.layout')

@section('navbar')
    <h1>hello departement</h1>
    <form id="departementForm" action="{{ route('departement.show', ['departement' => '__departement__']) }}" method="GET">
        <select name="departement" id="departementSelect">
            @foreach ($departements as $departement)
                <option value="{{ $departement->departement }}">{{ $departement->departement }}</option>
            @endforeach
        </select>
        <input type="hidden" name="selected_departement" id="selected_departement">
        <button type="submit">Submit</button>
    </form>

    <script>
        document.getElementById('departementSelect').addEventListener('change', function() {
            var selectedDepartement = this.value;
            var formAction = '{{ route("departement.show", ["departement" => ":departement"]) }}';
            formAction = formAction.replace(':departement', selectedDepartement);
            document.getElementById('departementForm').action = formAction;
            document.getElementById('selected_departement').value = selectedDepartement;
        });
    </script>
@endsection
