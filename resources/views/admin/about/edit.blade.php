<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tentang Kami - Brasil Es Krim & Es Puter</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased">
    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR -->
        <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between shadow-xl">
            <div>
                <!-- Brand / Logo Header -->
                <div class="p-6 border-b border-slate-800 flex items-center space-x-3">
                    <div class="p-2 bg-red-600 rounded-lg text-white">
                        <i data-lucide="ice-cream" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h1 class="font-bold text-lg text-white leading-tight">Brasil Es Krim</h1>
                        <span class="text-xs text-slate-400">Panel Administrator</span>
                    </div>
                </div>

                <!-- Navigation Links -->
                <nav class="p-4 space-y-1.5">
                    <!-- Dashboard -->
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                        <span>Dashboard</span>
                    </a>

                    <!-- Tentang Kami (Active) -->
                    <a href="{{ route('admin.about.edit') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-red-600 text-white font-medium shadow-lg shadow-red-600/20 transition">
                        <i data-lucide="info" class="w-5 h-5"></i>
                        <span>Tentang Kami</span>
                    </a>

                    <!-- Produk -->
                    <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="package" class="w-5 h-5"></i>
                        <span>Produk / Varian</span>
                    </a>

                    <!-- Informasi Toko -->
                    <a href="{{ route('admin.store.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="store" class="w-5 h-5"></i>
                        <span>Profil Toko</span>
                    </a>

                    <!-- Mitra Kami -->
                    <a href="{{ route('admin.partners.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="handshake" class="w-5 h-5"></i>
                        <span>Mitra Kami</span>
                    </a>

                     <a href="{{ route('admin.available-stores.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                        <span>Tersedia di Toko</span>
                    </a>

                    <a href="{{ route('admin.promos.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
    <i data-lucide="image" class="w-5 h-5"></i>
    <span>Pop-up Promo</span>
</a>
                </nav>
            </div>

            <!-- Logout Button Area -->
            <div class="p-4 border-t border-slate-800">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center space-x-2 px-4 py-2.5 rounded-xl bg-slate-800 text-rose-400 hover:bg-rose-600 hover:text-white font-medium transition duration-200">
                        <i data-lucide="log-out" class="w-4 h-4"></i>
                        <span>Keluar System</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- MAIN CONTENT AREA -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            
            <!-- Top Navbar Header -->
            <header class="bg-white border-b border-slate-200 px-8 py-4 flex justify-between items-center shadow-sm">
                <!-- Breadcrumb Nav -->
                <div class="flex items-center space-x-2 text-slate-500 text-sm">
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-red-600 transition">
                        <i data-lucide="home" class="w-4 h-4"></i>
                    </a>
                    <span>/</span>
                    <span class="font-medium text-slate-800">Edit Tentang Kami</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold text-sm">
                        A
                    </div>
                    <span class="font-semibold text-sm text-slate-700">Administrator</span>
                </div>
            </header>

            <!-- Main Form Content Scrollable -->
            <main class="flex-1 overflow-y-auto p-8">
                
                <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                    
                    <div class="flex justify-between items-center mb-6 pb-4 border-b border-slate-100">
                        <div>
                            <h2 class="text-xl font-bold text-slate-800">Kelola Halaman Tentang Kami</h2>
                            <p class="text-sm text-slate-500">Perbarui artikel sejarah/deskripsi dan foto banner promosi.</p>
                        </div>
                    </div>

                    <!-- Flash Message Notifikasi -->
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl text-sm font-medium flex items-center space-x-2">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-600"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Judul Seksi -->
                        <div>
                            <label class="block font-semibold text-slate-700 mb-2">Judul Utama</label>
                            <input type="text" name="title" value="{{ old('title', $about->title) }}" required class="w-full border border-slate-200 p-3 rounded-xl focus:ring-2 focus:ring-red-500 focus:outline-none transition">
                        </div>

                        <!-- Artikel / Deskripsi -->
                        <div>
                            <label class="block font-semibold text-slate-700 mb-2">Teks Artikel / Sejarah Singkat</label>
                            <textarea name="content" rows="6" required class="w-full border border-slate-200 p-3 rounded-xl focus:ring-2 focus:ring-red-500 focus:outline-none transition">{{ old('content', $about->content) }}</textarea>
                            <p class="text-xs text-slate-400 mt-1.5">Teks ini akan muncul di samping foto pada halaman utama website.</p>
                        </div>

                        <!-- Upload Foto Banner -->
                        <div>
                            <label class="block font-semibold text-slate-700 mb-2">Gambar / Foto Pendukung</label>
                            
                            @if($about->image)
                                <div class="mb-3">
                                    <p class="text-xs text-slate-500 mb-1">Foto Saat Ini:</p>
                                    <img src="{{ asset('storage/' . $about->image) }}" alt="Preview" class="w-64 h-auto rounded-xl shadow-sm border border-slate-200">
                                </div>
                            @endif

                            <input type="file" name="image" accept="image/*" class="w-full border border-slate-200 p-2 rounded-xl text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-red-50 file:text-red-600 file:font-semibold hover:file:bg-red-100 transition">
                        </div>

                        <!-- Tombol Simpan -->
                        <div class="pt-4 border-t border-slate-100 flex justify-end">
                            <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-red-700 shadow-lg shadow-red-600/20 transition flex items-center space-x-2">
                                <i data-lucide="save" class="w-5 h-5"></i>
                                <span>Simpan Perubahan</span>
                            </button>
                        </div>
                    </form>

                </div>

            </main>
        </div>

    </div>

    <!-- Render Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>