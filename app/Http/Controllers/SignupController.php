<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup()
    {
        return view("signup");
    }

    public function donesignup(Request $data)
    {
        $fullname = $data->fulname;
        $email = $data->email;
        $user = $data->nama;
        $pass = $data->sandi;


        DB::table('users')->insert([
            'fullname' => $fullname,
            'email' => $email,
            'username' => $user,
            'password' => $pass,
        ]);

        return redirect('/auth');
    }

}
