<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function registerPage(){
        return view('register');
    }
/**
     * Untuk Proses input data user ke database
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function register(Request $request)
    {
        // Validasi Data Parameter yang Dikirim
        $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);

        // Menggabungkan firstName dan lastName
        $name = $request->firstName . ' ' . $request->lastName;

        // Memasukkan data ke database melalui model user
        User::create([
            'name' => $name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        // Mengambil data email dan password dari request
        $credentials = $request->only('email', 'password');

        // Untuk Proses login dengan email dan password
        Auth::attempt($credentials);
        // Membuat sesi
        $request->session()->regenerate();

        // Masuk kehalaman dashboard
        return redirect('/')
            ->withSuccess('You have successfully registered & logged in!');
    }
    /**
     * Untuk Menampilkan halaman login
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function loginPage()
    {
        return view('login');
    }
/**
     * Untuk proses pengecekan login
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function login(Request $request)
    {
        // Validasi data dari parameter yang dikirim
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Pengecekan login dari data
        if (Auth::attempt($credentials)) {
            // jika sukses maka akan membuat sesi baru 
            $request->session()->regenerate();
            
            // masuk dashboard
            return redirect('/')->withSuccess('You have successfully logged in!');
        }

        // jika user tidak ditemukan
        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');
    }
/**
     * Fungsi untuk Logout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        // Proses logout 
        Auth::logout();
        
        // Menghapus sesi login
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // pindah ke halaman login
        return redirect('/login')->withSuccess('You have logged out successfully!');
    }    


}
