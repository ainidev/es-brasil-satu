<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class GoogleController extends Controller
{
    // Fungsi untuk mengarahkan pengguna ke halaman login Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Fungsi untuk menerima data kembali dari Google setelah pengguna memilih akun
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            // Cek apakah email sudah terdaftar di database kita
            $findUser = User::where('email', $googleUser->email)->first();

            if ($findUser) {
                // Jika user sudah ada, langsung loginkan
                Auth::login($findUser);
                return redirect()->intended('dashboard');
            } else {
                // Jika user belum ada, buat user baru otomatis di database
                $newUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => encrypt('123456dummy') // Password dummy karena login lewat google
                ]);

                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }

        } catch (Exception $e) {
            return redirect('login')->with('error', 'Gagal login menggunakan Google.');
        }
    }
}