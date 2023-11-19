<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <style>
        li{
            height: 3rem;
            display: flex;
            align-items: center;
            font-size: 1rem
        }
    </style>
    @yield('style')
</head>
<body>
    <div class="flex w-full h-screen bg-white">
        <div class="sidebar bg-slate-100 h-screen w-80 flex flex-col">
            <div class="profile flex flex-col items-center pt-10">
                <img class="w-20" src="{{ asset('img/logo.png') }}" alt="">
                <h1 class="font-bold mt-2 mb-3">{{ session('data')['username'] }}</h1>
            </div>
            <ul class="list-menu pt-5 px-3">
            @if(session('role') == 'admin')
                <hr>
                <li><a href="{{ route('kelola-admin') }}">Kelola admin</a></li>
            @endif
                <hr>
                <li><a href="{{ route('edit-profile') }}">Edit Profile</a></li>
                <hr>
                <li><a href="{{ route('dashboard') }}">Kartu Tanda Anggota</a></li>
                
            </ul>
            
            <div class="px-3 flex-end mt-auto">
                <hr>
                <li class=""><a class="" href="{{ route('logout') }}">Logout</a></li>
            </div>
        </div>
        
        <div class="w-full">
            @yield('content')
        </div>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

    </div>
</body>
</html>