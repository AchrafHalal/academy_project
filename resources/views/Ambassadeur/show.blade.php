@extends('Departement.layout')

@section('navbar')
    <div class="flex justify-between items-center flex-col">
        <h1 class="text-2xl font-bold">{{ $region }}</h1>

        @if($ambasaadeurs->isEmpty())
            <p>No data found for this departements.</p>
        @else
            <table class="mt-4 w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">الاسم</th>
                        <th class="px-4 py-2">القطاع</th>
                        <th class="px-4 py-2">رقم الهاتف</th>
                        <th class="px-4 py-2">البريد الالكتروني</th>
                        <th class="px-4 py-2">ملاحظات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ambasaadeurs as $ambs)
                        <tr>
                            <td class="border px-4 py-2 text-center">{{ $ambs->fullname }}</td>
                            <td class="border px-4 py-2 text-center">{{ $ambs->zone }}</td>
                            <td class="border px-4 py-2 text-center">{{ $ambs->phone }}</td>
                            <td class="border px-4 py-2 text-center">{{ $ambs->email ?? 'غير موجود' }}</td>
                            <td class="border px-4 py-2 text-center">{{ $ambs->note ? 'غير موجود' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
