<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Penduduk;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Umkm;

class AdminController extends Controller
{
    protected function isAuthenticated()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.loginPage')->send();
        }
    }

    public function loginPage()
    {
        return view('admin.loginPage');
    }

    public function profileDesaPage()
    {
        $galeris = Galeri::all();
        return view('profile', compact('galeris'));
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function infografisPage()
    {
        $totalPenduduk = Penduduk::count();
        $lakiLaki = Penduduk::where('jenis_kelamin_penduduk', 'Laki-laki')->count();
        $perempuan = Penduduk::where('jenis_kelamin_penduduk', 'Perempuan')->count();

        return view('infografis', [
            'totalPenduduk' => $totalPenduduk,
            'lakiLaki' => $lakiLaki,
            'perempuan' => $perempuan
        ]);
    }

    public function dashboard()
    {
        $this->isAuthenticated(); 

        $adminNow = Auth::guard('admin')->user(); 
        $totalPenduduk = Penduduk::count();
        $lakiLaki = Penduduk::where('jenis_kelamin_penduduk', 'Laki-laki')->count();
        $perempuan = Penduduk::where('jenis_kelamin_penduduk', 'Perempuan')->count();

        return view('admin.dashboard', [
            'totalPenduduk' => $totalPenduduk,
            'lakiLaki' => $lakiLaki,
            'perempuan' => $perempuan,
            'admin' => $adminNow,
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.loginPage');
    }

    public function home(){
    $beritaTerbaru = Berita::latest()->take(3)->get();
    $galeriTerbaru = Galeri::latest()->take(4)->get();
    $umkmTerbaru = Umkm::latest()->take(4)->get();
    
    return view('home', compact('beritaTerbaru', 'galeriTerbaru', 'umkmTerbaru'));
}
}
