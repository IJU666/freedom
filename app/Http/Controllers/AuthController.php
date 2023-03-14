<?php

namespace App\Http\Controllers;


use App\Models\Masyarakat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function masuk()
    {
        return view('auth.login', [
            'title' => 'Masuk'
        ]);
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('user')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/pengaduan');
        } elseif (Auth::guard('petugas')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/pengaduan');
        } elseif (Auth::guard('masyarakat')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back();
    }

    public function keluar(Request $request)
    {
        if (Auth::guard('user')) {
            Auth::guard('user')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        } elseif (Auth::guard('masyarakat')) {
            Auth::guard('masyarakat')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        }
        if (Auth::guard('petugas')) {
            Auth::guard('petugas')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        }
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'nik' => 'required|unique:masyarakats',
            'tglahir' => 'required',
            'kelamin' => 'required',
            'telp' => 'required',
            'pekerjaan' => 'required',
            'username' => 'required|unique:masyarakats',
            'email' => 'required|unique:masyarakats',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'remember_token' => Str::random(10)
        ]);


        $data['password'] = Hash::make($data['password']);

        // dd($request->all());

        Masyarakat::create($data);
        return redirect('/login');

        // if ($data) {
        //     return redirect('/login');
        // } else {
        //     return redirect('/login');
        // }
    }


    // public function pengaduan(Request $request)
    // {
    //     $data = $request->validate([
    //         "klasifikasi" => "required",
    //         "laporan" => "required",
    //         "tglkejadian" => "required",
    //         "alamat" => "required",
    //         "lampiran" => "image|file|mimes:jpeg,png,jpg|max:20000"
    //     ]);
    //     if ($request->file('lampiran')) {
    //         $data['lampiran'] = $request->file('lampiran')->store('post-image');
    //     }
    //     Pengaduan::create($data);
    //     return redirect('/');
    // }
}