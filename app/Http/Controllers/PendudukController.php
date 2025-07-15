<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    protected function isAuthenticated()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.loginPage')->send();
        }
    }

    // public function index()
    // {
    //     return Penduduk::all();
    // }

    public function index()
    {
        $this->isAuthenticated(); 

        $penduduks = Penduduk::paginate(10);
        $admin = Auth::guard('admin')->user();

        return view('admin.penduduk', compact('penduduks', 'admin'));
    }

    public function store(Request $request)
    {
        $this->isAuthenticated();

        $data = $request->validate([
            'nama_penduduk' => 'required|string|max:255',
            'umur_penduduk' => 'required|integer',
            'jenis_kelamin_penduduk' => 'required|in:Laki-laki,Perempuan',
            'no_telp_penduduk' => 'nullable|string',
            'alamat_penduduk' => 'required|string',
        ]);

        Penduduk::create($data);
        return redirect()->route('admin.penduduk')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        return Penduduk::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $penduduk = Penduduk::findOrFail($id);

        $data = $request->validate([
            'nama_penduduk' => 'required|string|max:255',
            'umur_penduduk' => 'required|integer',
            'jenis_kelamin_penduduk' => 'required|string',
            'no_telp_penduduk' => 'nullable|string',
            'alamat_penduduk' => 'required|string',
        ]);

        $penduduk->update($data);

        return redirect()->route('admin.penduduk')->with('success', 'Data penduduk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        $penduduk->delete();

        return redirect()->route('admin.penduduk')->with('success', 'Data penduduk berhasil dihapus.');
    }
}
