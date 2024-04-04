@extends('Departement.layout')
@section('navbar')
    <h1 class="text-2xl font-bold mb-4 text-center m-5">الوحدة/المصلحة</h1>
    <div class="flex justify-center mx-auto my-16">
        <form id="departementForm" action="{{ route('departement.show', ['departement' => '__departement__']) }}" method="GET" class="flex items-center">
            <select name="departement" id="departementSelect" class="px-4 py-2 border border-gray-300 rounded-md mr-2 h-20 w-[450px]">
                    <option value="">--SELECT AN OPTION--</option>
                @foreach ($etablissement as $departement)
                    <option value="{{ $departement->departement }}">{{ $departement->departement }}</option>
                @endforeach
            </select>
            <input type="hidden" name="selected_departement" id="selected_departement">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-2xl rounded-md hover:bg-blue-600 h-20 w-48">بحث</button>
        </form>
    </div>
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