@extends('Departement.layout')

@section('navbar')
    <div class="flex justify-between items-center flex-col">
        <h1 class="text-2xl font-bold">{{ $departement }}</h1>

        @if($departements->isEmpty())
            <p>No data found for this departements.</p>
        @else
            <table class="mt-4 w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">الاسم</th>
                        <th class="px-4 py-2">المهمة</th>
                        <th class="px-4 py-2">الاطلاع</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departements as $dept)
                        <tr>
                            <td class="border px-4 py-2 text-center">{{ $dept->name }}</td>
                            <td class="border px-4 py-2 text-center">{{ $dept->job }}</td>
                            <td class="border px-4 py-2 text-center">
                                <a href="{{ route('departement.show_name', ['name' => $dept->name]) }}" class="text-blue-500 hover:underline">
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
