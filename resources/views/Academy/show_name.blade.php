@extends('layout')

@section('navbar')
    <div class="flex justify-between items-center flex-col">
        <h1 class="text-2xl font-bold">{{ $departement }}</h1>
        <table class="table-sm">
            <thead>
                <tr>
                    <th class="table-head">الاسم الكامل</th>
                    <th class="table-head">المهمة</th>
                    <th class="table-head">رقم الهاتف</th>
                    <th class="table-head" > البريد الالكتروني </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departements as $member)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{ $member->name }}</td>
                        <td class="border px-4 py-2 text-center">{{ $member->job }}</td>
                        <td class="border px-4 py-2 text-center">{{ $member->phone ?? 'غير موجود' }}</td>
                        <td class="border px-4 py-2 text-center">{{ $member->email ?? 'غير موجود' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
