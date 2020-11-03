<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // middleware auth
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    // jika berhasil login maka akan menampilkan nama user yang sudah didaftarkan
    public function __invoke(Request $request)
    {
        return $request->user()->name;
    }
}
