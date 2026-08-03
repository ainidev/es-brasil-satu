<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Menampilkan daftar semua mitra kerja sama.
     */
    public function index()
    {
        $partners = Partner::latest()->get();
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Menyimpan data mitra baru beserta upload gambarnya.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ], [
            'name.required'  => 'Nama mitra wajib diisi.',
            'image.required' => 'Foto atau logo mitra wajib diunggah.',
            'image.image'    => 'File harus berupa gambar.',
            'image.mimes'    => 'Format gambar harus JPEG, PNG, JPG, atau WEBP.',
            'image.max'      => 'Ukuran gambar maksimal 2MB.',
        ]);

        // Simpan file ke folder storage/app/public/partners
        $imagePath = $request->file('image')->store('partners', 'public');

        Partner::create([
            'name'  => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Mitra baru berhasil ditambahkan!');
    }

    /**
     * Memperbarui data nama dan/atau logo mitra.
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ], [
            'name.required' => 'Nama mitra wajib diisi.',
            'image.image'   => 'File harus berupa gambar.',
            'image.mimes'   => 'Format gambar harus JPEG, PNG, JPG, atau WEBP.',
            'image.max'     => 'Ukuran gambar maksimal 2MB.',
        ]);

        $imagePath = $partner->image;

        // Jika user memilih file gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($partner->image && Storage::disk('public')->exists($partner->image)) {
                Storage::disk('public')->delete($partner->image);
            }
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('partners', 'public');
        }

        $partner->update([
            'name'  => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Data mitra berhasil diperbarui!');
    }

    /**
     * Menghapus data mitra dan menghapus gambarnya dari storage.
     */
    public function destroy(Partner $partner)
    {
        // Hapus file gambar dari disk storage
        if ($partner->image && Storage::disk('public')->exists($partner->image)) {
            Storage::disk('public')->delete($partner->image);
        }

        // Hapus record dari database
        $partner->delete();

        return redirect()->back()->with('success', 'Mitra berhasil dihapus!');
    }
}