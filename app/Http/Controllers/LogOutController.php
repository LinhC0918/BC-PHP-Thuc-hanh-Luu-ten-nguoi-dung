<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function logout(Request $request)
    {
        // Xóa Session login, đưa người dùng về trạng thái chưa đăng nhập
        $request->session()->flush();
        return view('layouts.showLogin');
    }

}
