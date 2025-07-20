<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    protected function isAuthenticated()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.loginPage')->send();
        }
    }

    public function index(Request $request)
    {
        $this->isAuthenticated();

        $query = Berita::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('judul_berita', 'like', "%{$search}%");
            });
        }

        $beritas = $query->paginate(10)->withQueryString();
        $admin = Auth::guard('admin')->user();

        return view('admin.berita', compact('beritas', 'admin'));
    }

    public function showBeritaPage()
    {
        $beritas = Berita::paginate(6);
        return view('berita', compact('beritas'));
    }

    public function showBeritaDetailPage($id)
    {

        $findBerita = Berita::findOrFail($id);
        return view('beritaDetail', compact('findBerita'));
    }

    public function store(Request $request)
    {
        $this->isAuthenticated();

        $data = $request->validate([
            'judul_berita' => 'required|string|max:255',
            'deskripsi_berita' => 'required|string',
            'tanggal_berita' => 'required|date',
            'foto_berita' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto_berita')) {
            // simpan ke storage/app/public/foto_berita
            $path = $request->file('foto_berita')->store('foto_berita', 'public');
            $data['foto_berita'] = $path;
        } else {
            $data['foto_berita'] = null;
        }

        Berita::create($data);

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil ditambahkan.');
    }


    public function show($id)
    {
        $this->isAuthenticated();

        return Berita::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $this->isAuthenticated();

        $berita = Berita::findOrFail($id);

        $data = $request->validate([
            'judul_berita' => 'required|string|max:255',
            'deskripsi_berita' => 'required|string',
            'tanggal_berita' => 'required|date',
            'foto_berita' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cek apakah ada file baru untuk menggantikan foto lama
        if ($request->hasFile('foto_berita')) {
            // Hapus file lama jika ada
            if ($berita->foto_berita && \Storage::disk('public')->exists($berita->foto_berita)) {
                \Storage::disk('public')->delete($berita->foto_berita);
            }

            // Simpan file baru dengan nama khusus
            $filename = 'berita-' . time() . '.' . $request->file('foto_berita')->extension();
            $path = $request->file('foto_berita')->storeAs('foto_berita', $filename, 'public');
            $data['foto_berita'] = $path;
        } else {
            // Tidak mengubah foto, tetap gunakan foto lama
            $data['foto_berita'] = $berita->foto_berita;
        }

        $berita->update($data);

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $this->isAuthenticated();

        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil dihapus.');
    }
}
