<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        // $data = UserTables::find(1);
        return view('testing');
        // return $data->users->name;

    }

    public function testingdata(Request $request)
    {
        $data = $request->date;
        return $data;
    }

    public function getBelong()
    {
        $data = User::all();
        return $data[0]->detail->nim;
    }
}
