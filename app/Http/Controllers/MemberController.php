<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function index()
    {
        return view('page.notverified-user');
    }

    public function editProfile()
    {
        return view('page.edit-profile');
    }

    public function kelolaAdmin()
    {
        $data = User::all();
        return view('page.kelola-admin', ['data' => $data]);
    }
}
