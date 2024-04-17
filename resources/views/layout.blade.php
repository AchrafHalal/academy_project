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
    <nav class="navb">
        <ul class="flex gap-4">
            <li class="pg">
                <a href="{{route('etablissement')}}" class="pages">
                    البحث بالمؤسسة
                </a>
                </li>
            <li>
                <a href="{{route('departement')}}" class="pages">
                    البحث بالمصلحة
                </a>
            </li>
            <li class="pg">
            <a href="#" class="pages">
                 المديريات الاقليمية
            </a>
            </li>
            <li class="pg">
                <a href="{{route('inspection')}}" class="pages">
                    هيئة التفتيش 
                </a>    
            </li>
            <li class="pg">
                <a href="{{route('ambassadeur')}}" class="pages">
                    التوجيه التربوي
                </a>
            </li>
            <li class="pg text-center">
                <a href="{{route('association')}}" class="pages">
                    جمعيات المجتمع المدني
                </a>
            </li>
        </ul>
    </nav>
    @yield('navbar')
</body>
</html>