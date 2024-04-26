<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>@yield('title','index')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body>
    <nav class="navb lg:w-full md:w-48 w-26 flex flex-col justify-center items-center gap-4">
        <div class="flex justify-center items-center">
            <a href="{{url('/')}}">
                <img src="{{asset('logo.gif')}}" class="w-64" alt="logo">
            </a>
        </div>
        <button id="toggle" class="w-12 lg:hidden block" ><i class="fas fa-bars"></i></button>
        <div class="w-full" id="div-ul">
            <ul class="md:flex-row flex flex-col gap-4">
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
                <a href="{{route('academy')}}" class="pages text-center">
                    الأكاديمية الجهوية للتربية والتكوين
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
        </div>
    </nav>
    <footer class="absolute bottom-0 w-full">
        <div class="flex justify-center">
            <p class="text-gray-500 text-sm">© 2024 All rights reserved DEVOWFS201</p>
        </div>
    </footer>
    
    @yield('navbar')
</body>
</html>