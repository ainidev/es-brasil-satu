<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::latest()->get();
        return view('admin.promos.index', compact('promos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = $request->file('image')->store('promos', 'public');

        Promo::create([
            'title'     => $request->title,
            'image'     => $imagePath,
            'is_active' => true,
        ]);

        return redirect()->back()->with('success', 'Gambar promo berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title'     => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $promo = Promo::findOrFail($id);

        // Jika ada unggahan gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($promo->image && Storage::disk('public')->exists($promo->image)) {
                Storage::disk('public')->delete($promo->image);
            }

            // Simpan gambar baru
            $promo->image = $request->file('image')->store('promos', 'public');
        }

        // Update title jika ada di form
        if ($request->has('title')) {
            $promo->title = $request->title;
        }

        // Update status aktif/nonaktif jika dikirim
        if ($request->has('is_active')) {
            $promo->is_active = $request->is_active;
        }

        $promo->save();

        return redirect()->back()->with('success', 'Promo berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        if ($promo->image) {
            Storage::disk('public')->delete($promo->image);
        }
        $promo->delete();

        return redirect()->back()->with('success', 'Promo berhasil dihapus!');
    }
}