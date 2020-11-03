<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // lakukan validasi untuk login
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // lakukkan jika login tapi tidak memiliki token atau gagal salah pass atau username dijwt akan di arahkan ke 401 unauthorized atau tidak memiliki hak kases token
        if(!$token = auth()->attempt($request->only('email', 'password'))){
            // null akan mengembalikan halam kosong, jika mau buat pesan masukin aja 'pesannya apa'
            return response(null, 401);
        }

        // jika sukses kirim tokennya
        return response()->json(compact('token'));
    }
}
