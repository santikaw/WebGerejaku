<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function auth()
    {
        return view("auth");
    }
    public function dashboard()
    {
        return view("dashboardadmin", ["title"=>"Dashboard", "dbuser"=>"admin"]);
    }

    public function authLogin(Request $data)
    {
        if (isset($data->username)) {
            $dbusers = DB::table('users')->where('username', $data->username)->first();
            $password = $data->password;

            // Logic Login
            if ($data->username == "admin") {
                if ($password == "123") {
                    return redirect("/dashboard");
                } else {
                    return redirect("/auth");
                }
            } else if ($dbusers->username == $data->username) {
                if ($dbusers->password == $password) {
                    if (!isset($_SESSION)) {
                        session_start();
                        $_SESSION['usernama'] = $data->username;
                    }
                    
                    return redirect("/home");
                } else {
                    return redirect("/auth");
                }
            }
        } else {
            return redirect("/auth");
        }
    }

    public function authLogout(Request $data)
    {
        session_start();
        session_unset();
        session_destroy();
        return redirect("/auth");
    }

//     public function adminLogin(Request $data)
//     {
//         if (isset($data->username)) {
//             $dbadmin = DB::table('admin')->where('username', $data->username)->first();
//             $password = $data->password;

//             // Logic Login
//             if ($dbadmin->username == $data->username) {
//                 if ($dbadmin->password == $password) {
//                     return redirect("/dashboardadmin");
//                 } else {
//                     return redirect("/auth");
//                 }
//             }
//         } else {
//             return redirect("/auth");
//         }
//     }

//     public function adminLogout(Request $data)
//     {
//         return redirect("/auth");
//     }
}
