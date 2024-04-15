@extends('Departement.layout')

@section('navbar')
    <div class="bg-gray-100 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-semibold text-gray-800">{{ $name }}</h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        @if($inspections->isEmpty())
            <p class="text-gray-600">No data found for this inspections.</p>
        @else
            <ul class="divide-y divide-gray-200">
                @foreach($inspections as $inspc)
                    <li class="py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1">
                                <h2 class="text-xl font-semibold text-gray-800">{{ $inspc->inspecteur_name }}</h2>
                                <p class="text-gray-600">{{ $inspc->specialisation }}</p>
                            </div>
                            <div>
                                <p class="text-gray-600">{{ $inspc->telephone }}</p>
                                <p class="text-gray-600">{{ $inspc->email }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
