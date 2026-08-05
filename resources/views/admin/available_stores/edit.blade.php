<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Toko - Brasil Es Krim</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased">
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-xl w-full bg-white rounded-2xl border border-slate-200 p-8 shadow-sm">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-slate-900">Edit Toko</h2>
                <a href="{{ route('admin.available-stores.index') }}" class="text-sm text-slate-500 hover:text-slate-800 flex items-center space-x-1">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    <span>Kembali</span>
                </a>
            </div>

            <form action="{{ route('admin.available-stores.update', $store->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Nama Toko</label>
                    <input type="text" name="name" value="{{ old('name', $store->name) }}" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm">
                </div>

                <div>
                    <label class="block text-xs font-semibold uppercase text-slate-600 mb-2">Foto / Logo Toko Saat Ini</label>
                    <div class="flex items-center space-x-4 mb-3">
                        <img src="{{ asset('storage/' . $store->image) }}" class="w-16 h-16 object-cover rounded-xl border border-slate-200" alt="{{ $store->name }}">
                        <span class="text-xs text-slate-400">Pilih file baru di bawah jika ingin mengganti foto ini.</span>
                    </div>
                    <input type="file" name="image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-600 hover:file:bg-red-100">
                </div>

                <div class="pt-3 flex space-x-3">
                    <a href="{{ route('admin.available-stores.index') }}" class="w-1/2 py-2.5 bg-slate-100 text-slate-600 font-medium text-sm rounded-xl text-center hover:bg-slate-200 transition">
                        Batal
                    </a>
                    <button type="submit" class="w-1/2 py-2.5 bg-red-600 text-white font-medium text-sm rounded-xl shadow-lg shadow-red-600/20 hover:bg-red-700 transition">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>lucide.createIcons();</script>
</body>
</html>