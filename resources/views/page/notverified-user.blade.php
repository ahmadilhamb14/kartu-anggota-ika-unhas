@extends('sidebar')

@section('content')
    <div class="flex flex-col w-full h-screen justify-center items-center text-center">
        <p>
            Kartu anda belum tersedia. <br>
            lengkapi data anda tersebih dahulu
        </p>
        <a class="btn btn-sm btn-outline btn-error mt-3" href="{{ route('edit-profile') }}">Lengkapi profile</a>
    </div>
@endsection