<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','index')</title>
    @vite('ressources/css/app.css')
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="{{route('etablissement')}}">
                    البحث بالمؤسسة
                </a>
            </li>
            <li>البحث بالمصلحة</li>
            <li>المديريات الاقليمية</li>
            <li>هيئة التفتيش</li>
            <li>التوجيه التربوي</li>
            <li>جمعيات المجتمع المدني</li>
        </ul>
    </nav>
    @yield('navbar')
</body>
</html>