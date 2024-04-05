@extends('Departement.layout')

@section('navbar')
    <h1 class="text-2xl font-bold mb-4 text-center m-5">المديري-    المصلحة</h1>
    <div class="flex justify-center mx-auto my-16">
        <form id="departementForm" method="GET" class="flex items-center">
            @csrf <!-- Add CSRF protection -->
            <select required name="region" id="regionSelect" class="px-4 py-2 border border-gray-300 rounded-md mr-2 h-20 w-[450px]">
                <option value="" class="text-center text-xl"> --المديرية-- </option>
                @foreach ($regions as $region)
                    <option value="{{ $region->region }}">{{ $region->region }}</option>
                @endforeach
            </select>
            <select required name="departement" id="departementSelect" class="px-4 py-2 border border-gray-300 rounded-md mr-2 h-20 w-[450px]">
                <option value="" class="text-center text-xl">--المصلحة--</option>
                @foreach ($departements as $departement)
                    <option value="{{ $departement->departement }}">{{ $departement->departement }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-2xl rounded-md hover:bg-blue-600 h-20 w-48">بحث</button>
        </form>
    </div>
    <script>
        document.getElementById('departementForm').addEventListener('submit', function(event) {
            var selectedDepartement = document.getElementById('departementSelect').value;
            var selectedRegion = document.getElementById('regionSelect').value;
            var formAction = '{{ route("departement.show", ["region" => ":region", "departement" => ":departement"]) }}';
            formAction = formAction.replace(':departement', selectedDepartement);
            formAction = formAction.replace(':region', selectedRegion);
            this.action = formAction;
        });
    </script>
@endsection
