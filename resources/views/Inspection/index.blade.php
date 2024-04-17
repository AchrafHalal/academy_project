@extends('Departement.layout')

@section('navbar')
    <h1 class="text-2xl font-bold mb-4 text-center m-5">هيئات التفتيش</h1>
    <div class="flex justify-center mx-auto my-16">
        <form id="inspectionForm" method="GET" class="flex flex-col items-center">
            <div class=" w-[550px]">
                <select name="region" id="regionSelect" required class=" selct_op px-4 py-2 border border-gray-300  rounded-md mb-4">
                    <option value="" class="text-center text-xl">--الجهة--</option>
                    @foreach ($inspections->unique('region') as $inspection)
                        <option value="{{ $inspection->region }}">{{ $inspection->region }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-[550px]">
                <select name="section" id="sectionSelect" required class="selct_op px-4 py-2 border border-gray-300 rounded-md mb-4">
                    <option value="" class="text-center text-xl">--السلك--</option>
                    @foreach ($inspections->unique('section') as $inspection)
                        <option value="{{ $inspection->section }}">{{ $inspection->section }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-[550px]">
                <select name="specialisation" id="specialisationSelect" required class="selct_op px-4 py-2 border border-gray-300 rounded-md mb-4">
                    <option value="" class="text-center text-xl">--التخصص--</option>
                    @foreach ($inspections->unique('specialisation') as $inspection)
                        <option value="{{ $inspection->specialisation }}">{{ $inspection->specialisation }}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="selected_inspection" id="selected_inspection">
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 text-2xl rounded-md hover:bg-blue-600 w-48">بحث</button>
        </form>
    </div>
    <script>
        document.getElementById('inspectionForm').addEventListener('change', function() {
            var selectedregion = document.getElementById('regionSelect').value;
            var selectedsection = document.getElementById('sectionSelect').value;
            var selectedspecialisation = document.getElementById('specialisationSelect').value;
            var formAction = '{{ route("inspection.show", ["region" => ":region","section"=>":section","specialisation"=>":specialisation"]) }}';
            formAction = formAction.replace(':region', selectedregion);
            formAction = formAction.replace(':section', selectedsection);
            formAction = formAction.replace(':specialisation', selectedspecialisation);
            this.action = formAction;
        });
    </script>
@endsection
