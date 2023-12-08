@extends('sidebar')

@section('content')
    <div class="flex flex-col w-full h-screen justify-center items-center text-center">
        <p>
            {{-- Kartu anda belum tersedia. <br>
            lengkapi data anda tersebih dahulu --}}
            {!! $content !!}
    
        </p>
    </div>
@endsection