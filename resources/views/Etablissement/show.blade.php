@extends('Departement.layout')

@section('navbar')
<div class="flex justify-between items-center flex-col">
    <h1 class="text-2xl font-bold">{{ $etablisement }}</h1>

    @if($etablissements->isEmpty())
    <p>No data found for this etablissements.</p>
    @else
    <table class="table-lg rounded-lg overflow-hidden">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="table-head">رقم الهاتف</th>
                <th class="table-head">رئيس جمعية الاباءوالاولياء</th>
                <th class="table-head">البريد الالكتروني</th>
                <th class="table-head">رقم هاتف المدير</th>
                <th class="table-head">مدير المؤسسة</th>
                <th class="table-head">المؤسسة</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($etablissements as $etablissement)
            <tr>
                <td class="border px-4 py-2 text-center">{{ $etablissement->association_number ?? 'غير موجود'}}</td>
                <td class="border px-4 py-2 text-center">{{ $etablissement->association_president ?? 'غير موجود'}}</td>
                <td class="border px-4 py-2 text-center">{{ $etablissement->directeur_email ?? 'غير موجود'}}</td>
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
