<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','index')</title>

    @vite('resources/css/app.css')

</head>
<body>
    <nav class="bg-black text-white h-16 flex items-center justify-center">
        <ul class="flex gap-4">
            <li class="w-40 h-16 bg-gray-500 rounded-lg flex items-center justify-center">
            <a href="{{route('etablissement')}}" class="w-40 h-16 bg-gray-500 rounded-lg flex items-center justify-center">
                    البحث بالمؤسسة
            </a>   
             </li>
            <li>
                <a href="{{route('departement')}}" class="w-40 h-16 bg-gray-500 rounded-lg flex items-center justify-center">
                    البحث بالمصلحة
                </a>
            </li>
            <li class="w-40 h-16 bg-gray-500 rounded-lg flex items-center justify-center">المديريات الاقليمية</li>
            <li class="w-40 h-16 bg-gray-500 rounded-lg flex items-center justify-center">
                <a href="{{route('inspection')}}" class="w-40 h-16 bg-gray-500 rounded-lg flex items-center justify-center">
                    هيئة التفتيش 
                </a>    
            </li>
            <li class="w-40 h-16 bg-gray-500 rounded-lg flex items-center justify-center">التوجيه التربوي</li>
            <li class="w-40 h-16 bg-gray-500 rounded-lg flex items-center justify-center text-center">جمعيات المجتمع المدني</li>
        </ul>
    </nav>
    @yield('navbar')
</body>
</html>