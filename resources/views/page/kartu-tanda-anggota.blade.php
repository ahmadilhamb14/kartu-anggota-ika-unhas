@extends('sidebar')

@section('style')
    <style>
 
        .other-data p{
            margin-bottom: 0.951rem;
            font-style: italic
        }
    </style>
@endsection

@section('content')
    <div class="flex flex-col items-center justify-center w-full h-screen bg-slate-200 ">
        <h1 class="mb-5 text-xl font-bold">KARTU TANDA ANGGOTA</h1>
        {{-- <div class="card-depan w-80 h-48" style="background-image: url('img/template member card depan.png'); background-size: cover"></div> --}}
        <div class="relative mb-5">
            <img src="{{ asset('img/template member card depan.png') }}" class="w-96 rounded-xl -z-index-10 relative" alt="">
            <div class="flex w-full content z-index-10 absolute top-0">
                <div class="img w-[7.25rem] pt-6 flex flex-col items-center">
                    <div class="profile-cover w-16 h-16 overflow-hidden rounded-full border-solid border-2 border-yellow-600">
                        <img src="{{ asset('img/profile.jpg') }}"  alt="">
                    </div>
                </div>
                <div class="data h-10">
                    <div class="header pl-5 pt-10">
                        <h1 class="text-yellow-500 text-3xl leading-5" style="font-family: bebas neue">Ahmad ilham B</h1>
                        <h1 class="text-white text-xs mt-0" style="font-family: montserrat">MIPA 2018</h1>
                    </div>
                    <div class="other-data text-white text-[0.4rem] pl-10 pt-6" style="font-family: 'montserrat'">
                        <p>Matematika & Ilmu Pengetahuan Alam</p>
                        <p>Kabupaten Wajo</p>
                        <p>089519623835</p>
                        <p>ahmadilhamb14@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        
        <img src="{{ asset('img/template member card belakang.png') }}" class="w-96 rounded-xl" alt="">
    </div>
@endsection