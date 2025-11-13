<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use hash;

class AuthController extends Controller
{
    //form login
    public function loginform()
    {
        return view('admin.user.formLogin');
    }

    //cek user login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'email dan password tidak sesuai',
        ])->onlyInput('email');
    }

    //user logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    //form register
        public function registationform()
    {
        return view('admin.user.registrasi');
    }

    //simpan data register
     public function register(Request $request) {
        // cek isian form register
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
       // simpan ke dalam database
        $user = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'email_verified_at' =>$credentials['email'],
            'password' => bcrypt($credentials['password']), // ubah ke format hash
        ]);


        Auth::login($user);
        return redirect()->intended('/daftar')->with('success',
      'Pendaftaran Anda Berhasil'); // lempar ke halaman login
     }
}
