<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    protected function isAuthenticated()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.loginPage')->send();
        }
    }

    public function index()
    {
        $this->isAuthenticated();

        $galeris = Galeri::all();
        $admin = Auth::guard('admin')->user();

        return view('admin.galeri', compact('galeris', 'admin'));
    }

    public function store(Request $request)
    {
        $this->isAuthenticated();

        $data = $request->validate([
            'title_foto_galeri' => 'required|string|max:255',
            'tanggal_foto_galeri' => 'required|date',
            'foto_galeri' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto_galeri')) {
            $filename = 'galeri-' . time() . '.' . $request->file('foto_galeri')->extension();
            $path = $request->file('foto_galeri')->storeAs('foto_galeri', $filename, 'public');
            $data['foto_galeri'] = $path;
        } else {
            $data['foto_galeri'] = null;
        }

        Galeri::create($data);

        return redirect()->route('admin.galeri')->with('success', 'Data Galeri berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $this->isAuthenticated();

        $galeri = Galeri::findOrFail($id);

        $data = $request->validate([
            'title_foto_galeri' => 'required|string|max:255',
            'tanggal_foto_galeri' => 'required|date',
            'foto_galeri' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto_galeri')) {
            if ($galeri->foto_galeri && Storage::disk('public')->exists($galeri->foto_galeri)) {
                Storage::disk('public')->delete($galeri->foto_galeri);
            }
            $filename = 'galeri-' . time() . '.' . $request->file('foto_galeri')->extension();
            $path = $request->file('foto_galeri')->storeAs('foto_galeri', $filename, 'public');
            $data['foto_galeri'] = $path;
        } else {
            $data['foto_galeri'] = $galeri->foto_galeri;
        }

        $galeri->update($data);

        return redirect()->route('admin.galeri')->with('success', 'Data Galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $this->isAuthenticated();

        $galeri = Galeri::findOrFail($id);

        if ($galeri->foto_galeri && Storage::disk('public')->exists($galeri->foto_galeri)) {
            Storage::disk('public')->delete($galeri->foto_galeri);
        }

        $galeri->delete();

        return redirect()->route('admin.galeri')->with('success', 'Data Galeri berhasil dihapus.');
    }
}
