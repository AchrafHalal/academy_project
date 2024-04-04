@extends('Departement.layout')

@section('navbar')
<div class="flex justify-between items-center flex-col">
    <h1 class="text-2xl font-bold">{{ $etablisement }}</h1>

    @if($etablissements->isEmpty())
    <p>No data found for this etablissements.</p>
    @else
    <table class="mt-4 w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="px-4 py-2">رقم الهاتف</th>
                <th class="px-4 py-2">رئيس جمعية الاباءوالاولياء</th>
                <th class="px-4 py-2">البريد الالكتروني</th>
                <th class="px-4 py-2">رقم هاتف المدير</th>
                <th class="px-4 py-2">مدير المؤسسة</th>
                <th class="px-4 py-2">المؤسسة</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($etablissements as $etablissement)
            <tr>
                <td class="border px-4 py-2 text-center">{{ $etablissement->association_number }}</td>
                <td class="border px-4 py-2 text-center">{{ $etablissement->association_president }}</td>
                <td class="border px-4 py-2 text-center">{{ $etablissement->directeur_email }}</td>
                <td class="border px-4 py-2 text-center">{{ $etablissement->directeur_number }}</td>
                <td class="border px-4 py-2 text-center">{{ $etablissement->directeur_name }}</td>
                <td class="border px-4 py-2 text-center">{{ $etablissement->Institution_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
