<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserTables;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login()
    {
        // $data = UserModel::all();
        $data = User::all();
        return view('kartu-anggota', ['data' => $data]);
        // return $data;
    }

    public function auth(Request $request)
    {
        $credential = $request->only('username', 'password');
        $role = User::where('username', $request->username)->first()->role;
        $data = User::verification($credential);
        if ($data) {
            session(['login' => TRUE, 'data' => $credential, 'role' => $role]);
            return redirect('dashboard');
            // return $role;
        } else {
            return back();
        }
        // return 'apa anying' ;
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function addMember(Request $request)
    {
        $passvalidation = false;
        $validation = $request->validate([
            'username' => 'required|max:30',
            'email' => 'required|email',
            'password' => 'min:8'
        ]);

        if ($validation == false) {
            return redirect('/register')->withErrors($validation)->withInput();
        } else {
            $passvalidation = $request->password == $request->password2 ? true : false;
        }

        if ($passvalidation) {
            $insertData = DB::table('users')->insert([
                'username' => $request->username,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'password' => Hash::make($request->password)
            ]);

            return redirect('/login')->with('success', 'Akun anda berhasil dibuat. Silahkan Login!!');
            // return $insertData?'berhasil' : 'data anda terduplikasi';
            // $credential = $request->all();
            // return $credential;
            // session(['login' => TRUE, 'data' => $credential]);
            // return view('')

        } else {
            return redirect('/register')->withErrors('Masukkan password yang sama')->withInput();
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
