<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Profil Toko - Brasil Es Krim & Es Puter</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased">
    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR (bg-slate-900) -->
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

                    <!-- Tentang Kami -->
                    <a href="{{ route('admin.about.edit') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="info" class="w-5 h-5"></i>
                        <span>Tentang Kami</span>
                    </a>

                    <!-- Produk -->
                    <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="package" class="w-5 h-5"></i>
                        <span>Produk / Varian</span>
                    </a>

                    <!-- Informasi / Profil Toko (ACTIVE MENU) -->
                    <a href="{{ route('admin.store.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-red-600 text-white font-medium shadow-lg shadow-red-600/20 transition">
                        <i data-lucide="store" class="w-5 h-5"></i>
                        <span>Profil Toko</span>
                    </a>

                    <!-- Mitra Kami -->
                    <a href="{{ route('admin.partners.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="handshake" class="w-5 h-5"></i>
                        <span>Mitra Kami</span>
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
               <header class="bg-white border-b border-slate-200 px-8 py-4 flex justify-between items-center shadow-sm">
                <div class="flex items-center space-x-2 text-slate-500 text-sm">
                    <i data-lucide="home" class="w-4 h-4"></i>
                    <span>/</span>
                    <span class="font-medium text-slate-800">Profil Toko</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold text-sm">
                        A
                    </div>
                    <span class="font-semibold text-sm text-slate-700">Administrator</span>
                </div>
            </header>>

            <!-- Main Content Scrollable -->
            <main class="flex-1 overflow-y-auto p-8">
                <!-- Header Halaman -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-slate-900">Pengaturan Profil Toko</h2>
                    <p class="text-slate-500 text-sm mt-1">Kelola informasi kontak, alamat operasional, jam buka, dan media sosial toko.</p>
                </div>

                <!-- Notifikasi Sukses -->
                @if (session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-700 flex items-center space-x-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-emerald-600"></i>
                        <span class="text-sm font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                <!-- FORM PROFIL TOKO -->
                <form action="{{ route('admin.store.update') }}" method="POST" class="space-y-6 max-w-4xl">
                    @csrf
                    @method('PUT')

                    <!-- Card 1: Informasi Kontak Utam -->
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                        <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="p-2 bg-red-50 text-red-600 rounded-lg">
                                <i data-lucide="phone-call" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">Informasi Kontak & Nama Toko</h3>
                                <p class="text-xs text-slate-500">Nama brand dan nomor kontak yang dapat dihubungi pelanggan.</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Nama Toko / Outlet</label>
                                <input type="text" name="store_name" value="{{ old('store_name', $store->store_name ?? 'Brasil Es Krim & Es Puter') }}" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Nomor WhatsApp / Telepon</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                        <i data-lucide="phone" class="w-4 h-4"></i>
                                    </span>
                                    <input type="text" name="phone" value="{{ old('phone', $store->phone ?? '081234567890') }}" required class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm">
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Email Toko</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                        <i data-lucide="mail" class="w-4 h-4"></i>
                                    </span>
                                    <input type="email" name="email" value="{{ old('email', $store->email ?? 'info@brasileskrim.com') }}" required class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Alamat & Jam Operasional -->
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                        <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="p-2 bg-red-50 text-red-600 rounded-lg">
                                <i data-lucide="map-pin" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">Alamat & Jam Operasional</h3>
                                <p class="text-xs text-slate-500">Lokasi fisik toko dan jadwal buka/tutup.</p>
                            </div>
                        </div>

                        <div class="space-y-5">
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Alamat Lengkap Toko</label>
                                <textarea name="address" rows="3" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm resize-none" placeholder="Masukkan alamat lengkap toko...">{{ old('address', $store->address ?? 'Jl. Raya Bogor No. 123, Bogor, Jawa Barat') }}</textarea>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Jam Buka / Operasional</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                            <i data-lucide="clock" class="w-4 h-4"></i>
                                        </span>
                                        <input type="text" name="opening_hours" value="{{ old('opening_hours', $store->opening_hours ?? 'Senin - Minggu (09:00 - 21:00 WIB)') }}" required class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Link Google Maps (Embed/URL)</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                            <i data-lucide="map" class="w-4 h-4"></i>
                                        </span>
                                        <input type="url" name="maps_link" value="{{ old('maps_link', $store->maps_link ?? 'https://maps.google.com') }}" class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm" placeholder="https://maps.app.goo.gl/...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Media Sosial -->
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                        <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="p-2 bg-red-50 text-red-600 rounded-lg">
                                <i data-lucide="share-2" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">Media Sosial Toko</h3>
                                <p class="text-xs text-slate-500">Tautan ke akun media sosial resmi.</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Instagram (Username / Link)</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                        <i data-lucide="instagram" class="w-4 h-4"></i>
                                    </span>
                                    <input type="text" name="instagram" value="{{ old('instagram', $store->instagram ?? '@brasileskrim') }}" class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm" placeholder="@username">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Facebook (Page / Link)</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                        <i data-lucide="facebook" class="w-4 h-4"></i>
                                    </span>
                                    <input type="text" name="facebook" value="{{ old('facebook', $store->facebook ?? 'Brasil Es Krim Official') }}" class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm" placeholder="Nama Halaman Facebook">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Action Simpan -->
                    <div class="flex justify-end space-x-4 pt-2">
                        <button type="reset" class="px-6 py-2.5 rounded-xl border border-slate-200 text-slate-600 font-medium text-sm hover:bg-slate-100 transition">
                            Reset Form
                        </button>
                        <button type="submit" class="inline-flex items-center space-x-2 px-6 py-2.5 rounded-xl bg-red-600 hover:bg-red-700 text-white font-medium text-sm shadow-lg shadow-red-600/20 transition">
                            <i data-lucide="save" class="w-4 h-4"></i>
                            <span>Simpan Perubahan</span>
                        </button>
                    </div>

                </form>
            </main>
        </div>

    </div>

    <!-- SCRIPT JAVASCRIPT -->
    <script>
        // Inisialisasi Lucide Icons
        lucide.createIcons();
    </script>
</body>
</html>