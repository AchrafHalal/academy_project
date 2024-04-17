@extends('Departement.layout')
@section('navbar')
    <h1 class="text-2xl font-bold mb-4 text-center m-5">المؤسسات</h1>
    <div class="flex justify-center mx-auto my-16">
        <form id="etablissementForm" action="{{ route('etablissement.show', ['etablissement' => '__etablissement__']) }}" method="GET" class="flex items-center">
            <select name="etablissement" id="etablissementSelect" class="px-4 py-2 border border-gray-300 rounded-md mr-2 h-20 w-[450px]">
                    <option value="" class="text-center text-xl">--المؤسسات--</option>
                @foreach ($etablissements as $etablissement)
                    <option value="{{ $etablissement->Institution_name }}">{{ $etablissement->Institution_name }}</option>
                @endforeach
            </select>
            <input type="hidden" name="selected_etablissement" id="selected_etablissement">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-2xl rounded-md hover:bg-blue-600 h-20 w-48">بحث</button>
        </form>
    </div>
    <script>
        document.getElementById('etablissementSelect').addEventListener('change', function() {
            var selectedEtablissement = this.value;
            var formAction = '{{ route("etablissement.show", ["etablissement" => ":etablissement"]) }}';
            formAction = formAction.replace(':etablissement', selectedEtablissement);
            document.getElementById('etablissementForm').action = formAction;
            document.getElementById('selected_etablissement').value = selectedEtablissement;
        });
    </script>
@endsection