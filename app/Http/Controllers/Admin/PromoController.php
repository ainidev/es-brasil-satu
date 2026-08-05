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
            'title' => $request->title,
            'image' => $imagePath,
            'is_active' => true,
        ]);

        return redirect()->back()->with('success', 'Gambar promo berhasil ditambahkan!');
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