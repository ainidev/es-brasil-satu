<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::latest()->get();
        return view('admin.store.index', compact('stores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('stores', 'public');
        }

        Store::create([
            'name'  => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Toko berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $store = Store::findOrFail($id);

        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($store->image && Storage::disk('public')->exists($store->image)) {
                Storage::disk('public')->delete($store->image);
            }
            $store->image = $request->file('image')->store('stores', 'public');
        }

        $store->name = $request->name;
        $store->save();

        return redirect()->back()->with('success', 'Data toko berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $store = Store::findOrFail($id);

        if ($store->image && Storage::disk('public')->exists($store->image)) {
            Storage::disk('public')->delete($store->image);
        }

        $store->delete();

        return redirect()->back()->with('success', 'Toko berhasil dihapus!');
    }
}