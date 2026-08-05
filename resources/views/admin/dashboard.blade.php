<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Brasil Es Krim & Es Puter</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-slate-50 font-sans text-slate-800 antialiased">
    <div class="flex h-screen overflow-hidden">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between shadow-xl flex-shrink-0">
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
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-red-600 text-white font-medium shadow-lg shadow-red-600/20 transition">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('admin.about.edit') }}"
                        class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="info" class="w-5 h-5"></i>
                        <span>Tentang Kami</span>
                    </a>

                    <a href="{{ route('admin.products.index') }}"
                        class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="package" class="w-5 h-5"></i>
                        <span>Produk / Varian</span>
                    </a>

                    <a href="{{ route('admin.store.index') }}"
                        class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="store" class="w-5 h-5"></i>
                        <span>Profil Toko</span>
                    </a>

                    <a href="{{ route('admin.partners.index') }}"
                        class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="handshake" class="w-5 h-5"></i>
                        <span>Mitra Kami</span>
                    </a>

                    <a href="{{ route('admin.available-stores.index') }}"
                        class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                        <span>Tersedia di Toko</span>
                    </a>

                    <a href="{{ route('admin.promos.index') }}"
                        class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="image" class="w-5 h-5"></i>
                        <span>Pop-up Promo</span>
                    </a>
                </nav>
            </div>

            <!-- Logout Button Area -->
            <div class="p-4 border-t border-slate-800">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center justify-center space-x-2 px-4 py-2.5 rounded-xl bg-slate-800 text-rose-400 hover:bg-rose-600 hover:text-white font-medium transition duration-200">
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
                <div class="flex items-center space-x-2 text-slate-500 text-sm">
                    <i data-lucide="home" class="w-4 h-4"></i>
                    <span>/</span>
                    <span class="font-medium text-slate-800">Dashboard</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div
                        class="w-9 h-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold text-sm">
                        A
                    </div>
                    <span class="font-semibold text-sm text-slate-700">Administrator</span>
                </div>
            </header>

            <!-- Main Content Scrollable -->
            <main class="flex-1 overflow-y-auto p-8">

                <!-- Hero Banner Welcome -->
                <div
                    class="bg-gradient-to-r from-red-600 to-rose-700 rounded-2xl p-8 text-white shadow-lg shadow-red-600/10 mb-8 flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Selamat Datang Kembali, Admin! 👋</h2>
                        <p class="text-red-100 text-sm">Kelola katalog es krim, informasi toko, mitra kerja sama, dan
                            titik ketersediaan toko dengan mudah.</p>
                    </div>
                    <a href="{{ route('home') }}" target="_blank"
                        class="hidden md:inline-flex items-center space-x-2 px-5 py-3 bg-white/10 hover:bg-white/20 rounded-xl text-sm font-semibold transition border border-white/20 backdrop-blur-sm">
                        <span>Lihat Website Utama</span>
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- CARDS STATISTIK (DAPAT DIKLIK) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <!-- Card 1: Total Produk -->
                    <div
                        class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total
                                    Produk</span>
                                <h3 class="text-3xl font-extrabold text-slate-900 mt-2">{{ $totalProducts ?? 0 }}</h3>
                            </div>
                            <div class="p-3 bg-red-50 text-red-600 rounded-xl">
                                <i data-lucide="package" class="w-6 h-6"></i>
                            </div>
                        </div>
                        <a href="{{ route('admin.products.index') }}"
                            class="mt-4 text-xs font-semibold text-red-600 hover:text-red-700 inline-flex items-center space-x-1">
                            <span>Kelola Produk</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- Card 2: Total Mitra -->
                    <div
                        class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total
                                    Mitra</span>
                                <h3 class="text-3xl font-extrabold text-slate-900 mt-2">{{ $totalPartners ?? 0 }}</h3>
                            </div>
                            <div class="p-3 bg-blue-50 text-blue-600 rounded-xl">
                                <i data-lucide="handshake" class="w-6 h-6"></i>
                            </div>
                        </div>
                        <a href="{{ route('admin.partners.index') }}"
                            class="mt-4 text-xs font-semibold text-blue-600 hover:text-blue-700 inline-flex items-center space-x-1">
                            <span>Kelola Mitra</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- Card 3: Profil Toko -->
                    <div
                        class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Profil
                                    Toko</span>
                                <h3 class="text-2xl font-extrabold text-slate-900 mt-2">Aktif</h3>
                            </div>
                            <div class="p-3 bg-amber-50 text-amber-600 rounded-xl">
                                <i data-lucide="store" class="w-6 h-6"></i>
                            </div>
                        </div>
                        <a href="{{ route('admin.store.index') }}"
                            class="mt-4 text-xs font-semibold text-amber-600 hover:text-amber-700 inline-flex items-center space-x-1">
                            <span>Edit Alamat & WA</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- Card 4: Tentang Kami -->
                    <div
                        class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Tentang
                                    Kami</span>
                                <h3 class="text-2xl font-extrabold text-slate-900 mt-2">Terisi</h3>
                            </div>
                            <div class="p-3 bg-emerald-50 text-emerald-600 rounded-xl">
                                <i data-lucide="info" class="w-6 h-6"></i>
                            </div>
                        </div>
                        <a href="{{ route('admin.about.edit') }}"
                            class="mt-4 text-xs font-semibold text-emerald-600 hover:text-emerald-700 inline-flex items-center space-x-1">
                            <span>Edit Deskripsi</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- Card 5: Tersedia di Toko (CARD BARU) -->
                    <div
                        class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Tersedia di
                                    Toko</span>
                                <h3 class="text-3xl font-extrabold text-slate-900 mt-2">
                                    {{ $totalAvailableStores ?? 0 }}</h3>
                            </div>
                            <div class="p-3 bg-purple-50 text-purple-600 rounded-xl">
                                <i data-lucide="shopping-bag" class="w-6 h-6"></i>
                            </div>
                        </div>
                        <a href="{{ route('admin.available-stores.index') }}"
                            class="mt-4 text-xs font-semibold text-purple-600 hover:text-purple-700 inline-flex items-center space-x-1">
                            <span>Kelola Toko</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- KARTU POP-UP PROMO -->
                    <div
                        class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-xs font-bold tracking-wider uppercase text-slate-400">POP-UP
                                    PROMO</span>
                                <div class="p-2.5 bg-rose-50 rounded-xl text-rose-600">
                                    <i data-lucide="image" class="w-5 h-5"></i>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-800">{{ $totalPromos ?? 0 }}</h3>
                        </div>
                        <a href="{{ route('admin.promos.index') }}"
                            class="mt-4 text-xs font-semibold text-red-600 hover:text-red-700 flex items-center space-x-1 transition">
                            <span>Kelola Promo</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                </div>

            </main>
        </div>

    </div>

    <!-- SCRIPT JAVASCRIPT -->
    <script>
        lucide.createIcons();
    </script>
</body>

</html>
