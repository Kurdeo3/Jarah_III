<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

class UmkmController extends Controller
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

        $umkms = Umkm::all();
        $admin = Auth::guard('admin')->user();

        return view('admin.umkm', compact('umkms', 'admin'));
    }

    public function show()
    {
        $umkms = Umkm::paginate(6);
        return view('umkm', compact('umkms'));
    }

    public function store(Request $request)
    {
        $this->isAuthenticated();

        $data = $request->validate([
            'nama_pemilik_umkm' => 'required|string|max:255',
            'nama_umkm' => 'required|string|max:255',
            'no_telp_umkm' => 'required|string|max:20',
            'deskripsi_umkm' => 'required|string',
            'foto_umkm' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto_umkm')) {
            $filename = 'umkm-' . time() . '.' . $request->file('foto_umkm')->extension();
            $path = $request->file('foto_umkm')->storeAs('foto_umkm', $filename, 'public');
            $data['foto_umkm'] = $path;
        } else {
            $data['foto_umkm'] = null;
        }

        Umkm::create($data);

        return redirect()->route('admin.umkm')->with('success', 'Data UMKM berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $this->isAuthenticated();

        $umkm = Umkm::findOrFail($id);

        $data = $request->validate([
            'nama_pemilik_umkm' => 'required|string|max:255',
            'nama_umkm' => 'required|string|max:255',
            'no_telp_umkm' => 'required|string|max:20',
            'deskripsi_umkm' => 'required|string',
            'foto_umkm' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto_umkm')) {
            if ($umkm->foto_umkm && Storage::disk('public')->exists($umkm->foto_umkm)) {
                Storage::disk('public')->delete($umkm->foto_umkm);
            }
            $filename = 'umkm-' . time() . '.' . $request->file('foto_umkm')->extension();
            $path = $request->file('foto_umkm')->storeAs('foto_umkm', $filename, 'public');
            $data['foto_umkm'] = $path;
        } else {
            $data['foto_umkm'] = $umkm->foto_umkm;
        }

        $umkm->update($data);

        return redirect()->route('admin.umkm')->with('success', 'Data UMKM berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $this->isAuthenticated();

        $umkm = Umkm::findOrFail($id);

        if ($umkm->foto_umkm && Storage::disk('public')->exists($umkm->foto_umkm)) {
            Storage::disk('public')->delete($umkm->foto_umkm);
        }

        $umkm->delete();

        return redirect()->route('admin.umkm')->with('success', 'Data UMKM berhasil dihapus.');
    }
}
