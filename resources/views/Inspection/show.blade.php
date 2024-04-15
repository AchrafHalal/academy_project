@extends('Departement.layout')

@section('navbar')
    <div class="flex justify-between items-center flex-col">
        <h1 class="text-2xl font-bold">هيئات التفتيش</h1>

        @if($inspections->isEmpty())
            <p>No data found for this inspections.</p>
        @else
            <table class="mt-4 w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">الاسم</th>
                        <th class="px-4 py-2">التخصص</th>
                        <th class="px-4 py-2">الاطلاع</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inspections as $inspection)
                        <tr>
                            <td class="border px-4 py-2 text-center">{{ $inspection->inspecteur_name }}</td>
                            <td class="border px-4 py-2 text-center">{{ $inspection->specialisation }}</td>
                            <td class="border px-4 py-2 text-center">
                                <a href="{{ route('inspection.show_name', ['name' => $inspection->inspecteur_name]) }}" class="text-blue-500 hover:underline">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        المعلومات
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
