<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

    <style>
      .form-login::before{
        content: "";
        border-radius: 10px;
        box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* filter: blur(5px); */
      }
    </style>
</head>
<body>
  <div class="flex flex-col justify-center h-screen items-center bg-red-400" style="background-image: url('img/latar ika unhas.png'); background-size: cover">
    
    <div class="login-form flex flex-col justify-center items-center">
  
          <form class="form-login relative flex rounded-lg flex-col w-96 justify-center items-center p-5" action="{{ route('register') }}" method="post" style="box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); z-index: 1">
            @csrf
            <img class="w-16" src="{{ asset('img/logo.png') }}" alt="">
            <h1 class="font-bold text-md">Ikatan Alumni</h1>
            <p class="font-bold mt-0 text-xl mb-5">UNIVERSITAS HASANUDDIN</p>

            @if ($errors->any())
            <div class="w-80 rounded text-xs px-3 py-2 bg-red-500 text-white">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div id="username" class="flex flex-col mt-2">
                <label for="username">Username</label>
                <input name="username" class="w-80 pl-3 border-none border-slodin border-red-400 h-8 rounded-full" type="text" required>
              </div>

              <div id="email" class="flex flex-col mt-2">
                <label for="email">Email</label>
                <input name="email" class="w-80 pl-3 border-none border-slodin border-red-400 h-8 rounded-full" type="text" required>
              </div>

              <div id="phonenumber" class="flex flex-col mt-2">
                <label for="phonenumber">Whatsapp</label>
                <input name="phonenumber" class="w-80 pl-3 border-none border-slodin border-red-400 h-8 rounded-full" type="number" required>
              </div>

              <div id="password" class="flex flex-col mt-2">
                <label for="password">Password</label>
                <input name="password" class="w-80 pl-3 border-none border-slodin border-red-400 h-8 rounded-full" type="password" required>
              </div>
              
              <div id="password2" class="flex flex-col mt-2">
                <label for="password2">Masukkan Password kembali</label>
                <input name="password2" class="w-80 pl-3 border-none border-slodin border-red-400 h-8 rounded-full" type="password" required>
              </div>

            <input class="rounded-full bg-red-400 w-80 mt-5 border-none h-10 text-white" type="submit" value="Register">

            <div class="flex flex-row-reverse px-5 mt-2 w-full">
              <a href="{{ route('login') }}" class=" flex-end">Login</a>
            </div>
          </form>
        </div>
       
      </div>
    </body>
</html>