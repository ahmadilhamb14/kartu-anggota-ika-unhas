<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    public function index()
    {
        // jika belum terdaftar
        if (session('is_active') == 'active') {
            return view('page.kartu-tanda-anggota');
        } else if (session('is_active') == 'waiting') {
            $content = "Data anda sedang dalam proses verifikasi admin <br> Harap tunggu info selanjutnya";
            return view('page.notverified-user', ['content' => $content]);
        } else {
            $content = "Kartu anda belum tersedia.<br> Lengkapi data anda terlebih dahulu <br>
            <a class='btn btn-sm btn-outline btn-error mt-3' href='{{ route('edit-profile') }}'>Lengkapi profile</a>";

            return view('page.notverified-user', ['content' => $content]);
        }
    }

    public function editProfile()
    {
        if (session('is_active') == 'active') {
            return 'ini halaman update profile';
        } else if (session('is_active') == 'waiting') {

            return 'anda sekarang sudah waiting';
        } else {
            return view('page.edit-profile');
        }
    }

    public function updateProfile(Request $request)
    {
        $username = session('data')['username'];
        if (session('is_active') == 'active') {
            return 'ini halaman update profile';
        } else if (session('is_active') == 'waiting') {

            return 'anda sekarang sudah waiting';
        } else {
            $data = DB::table('detail_models')->insert([
                'username' => $username,
                'nim' => $request->nim,
                'prodi' => $request->prodi,
                'angkatan' => $request->angkatan,
                'tanggalLahir' => $request->input('tanggal-lahir'),
                'kabKota' => $request->input('kab-kota'),
                'tahunLulus' => $request->input('tahun-lulus'),
                'jenisKelamin' => $request->input('jenis-kelamin')
            ]);
            $dataUser = DB::table('users')->where('username', $username)->update(['is_active' => 'waiting']);

            return redirect('dashboard');
        }
    }

    public function verifikasiUser()
    {
        $data = User::where('is_active', 'waiting')->get();
        return view('page.verification-user', ['data' => $data]);
    }

    public function kelolaAdmin()
    {
        $data = User::all();
        return view('page.kelola-admin', ['data' => $data]);
    }
}
