<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','index')</title>
    <style>
        body {
            margin: 0;
            padding :0;
        }
        nav {
            background: black;
            color: white;
            height: 50px;
            padding: 5px;
            margin:auto;
            display:flex;
            align-items: center;
            justify-content: center;
        }
        ul {
            list-style: none;
            display: flex;
            gap:20px;
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        li {
            width: 200px;
            height: 50px;
            background: rgb(143, 143, 143);
            border-radius: 5px;
            display:flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        li:hover {
            background: rgb(240, 239, 239);
            color: black;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="{{route('departement')}}">
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