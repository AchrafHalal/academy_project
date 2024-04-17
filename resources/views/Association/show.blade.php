@extends('Departement.layout')

@section('navbar')
    <div class="flex justify-between items-center flex-col">
        <h1 class="text-2xl font-bold">{{ $name }}</h1>
        <table class="table-sm">
            <thead>
                <tr>
                    <th class="table-head">اسم الجمعية</th>
                    <th class="table-head">اسم المسؤول</th>
                    <th class="table-head">رقم الهاتف</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($association as $member)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{ $member->name }}</td>
                        <td class="border px-4 py-2 text-center">{{ $member->responsable_name }}</td>
                        <td class="border px-4 py-2 text-center">{{ $member->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
