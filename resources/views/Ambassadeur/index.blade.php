@extends('Departement.layout')

@section('navbar')
    <h1 class="text-2xl font-bold mb-4 text-center m-5">هيئة التوجيه التربوي لوادي الذهب</h1>
    <div class="flex justify-center mx-auto my-16">
        <form id="AmbassadeurForm" method="GET" class="flex items-center">
            @csrf <!-- Add CSRF protection -->
            <select required name="region" id="regionSelect" class="px-4 py-2 border border-gray-300 rounded-md mr-2 h-20 w-[450px]">
                <option value="" class="text-center text-xl"> --هيئة التوجيه التربوي-- </option>
                @foreach ($ambasaadeurs as $ambasaadeur)
                    <option value="{{ $ambasaadeur->region }}">{{ $ambasaadeur->region }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-2xl rounded-md hover:bg-blue-600 h-20 w-48">بحث</button>
        </form>
    </div>
    <script>
         document.getElementById('AmbassadeurForm').addEventListener('change', function () {
            var regionSelect = document.getElementById('regionSelect').value;
            var ActionForm = '{{ route("departement.show", ["region" => ":region"]) }}';
            ActionForm = ActionForm.replace(':region',regionSelect);
            this.action = ActionForm;
         })
    </script>
@endsection
