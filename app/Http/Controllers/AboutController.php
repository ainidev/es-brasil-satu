<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    // Tampilkan form edit Tentang Kami di Admin
    public function edit()
    {
        // Ambil data pertama, jika belum ada buat data default
        $about = About::first() ?? About::create([
            'title' => 'Tentang Kami',
            'content' => 'Produk rumahan yang merupakan usaha keluarga dan berasal dari Purwokerto...',
        ]);

        return view('admin.about.edit', compact('about'));
    }

    // Simpan perubahan artikel & foto
    public function update(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $about = About::first();

        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $about->image = $request->file('image')->store('about', 'public');
        }

        $about->update([
            'title'   => $request->title,
            'content' => $request->content,
            'image'   => $about->image,
        ]);

        return redirect()->back()->with('success', 'Halaman Tentang Kami berhasil diperbarui!');
    }
}