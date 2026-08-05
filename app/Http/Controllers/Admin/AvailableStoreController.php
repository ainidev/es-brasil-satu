<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AvailableStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvailableStoreController extends Controller
{
    public function index()
    {
        $stores = AvailableStore::all();
        return view('admin.available_stores.index', compact('stores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = $request->file('image')->store('stores', 'public');

        AvailableStore::create([
            'name'  => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Toko berhasil ditambahkan!');
    }

    // METHOD EDIT
    public function edit($id)
    {
        $store = AvailableStore::findOrFail($id);
        return view('admin.available_stores.edit', compact('store'));
    }

    // METHOD UPDATE
    public function update(Request $request, $id)
    {
        $store = AvailableStore::findOrFail($id);

        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // opsional jika tidak ingin ganti foto
        ]);

        $data = [
            'name' => $request->name,
        ];

        // Jika user mengunggah foto baru
        if ($request->hasFile('image')) {
            // Hapus foto lama
            if ($store->image && Storage::disk('public')->exists($store->image)) {
                Storage::disk('public')->delete($store->image);
            }
            // Simpan foto baru
            $data['image'] = $request->file('image')->store('stores', 'public');
        }

        $store->update($data);

        return redirect()->route('admin.available-stores.index')->with('success', 'Toko berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $store = AvailableStore::findOrFail($id);

        if ($store->image && Storage::disk('public')->exists($store->image)) {
            Storage::disk('public')->delete($store->image);
        }

        $store->delete();

        return redirect()->back()->with('success', 'Toko berhasil dihapus!');
    }
}