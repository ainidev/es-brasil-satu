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
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-red-600 text-white font-medium shadow-lg shadow-red-600/20 transition">
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
                <div class="flex items-center space-x-2 text-slate-500 text-sm">
                    <i data-lucide="home" class="w-4 h-4"></i>
                    <span>/</span>
                    <span class="font-medium text-slate-800">Dashboard</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold text-sm">
                        A
                    </div>
                    <span class="font-semibold text-sm text-slate-700">Administrator</span>
                </div>
            </header>

            <!-- Dashboard Content Scrollable -->
            <main class="flex-1 overflow-y-auto p-8">
                <!-- Welcome Banner -->
                <div class="bg-gradient-to-r from-red-600 to-rose-700 text-white rounded-2xl p-6 shadow-lg mb-8 flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold mb-1">Selamat Datang Kembali, Admin! 👋</h2>
                        <p class="text-red-100 text-sm">Kelola katalog es krim, informasi toko, dan mitra kerja sama dengan mudah.</p>
                    </div>
                    <a href="{{ route('home') }}" target="_blank" class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white backdrop-blur-md rounded-xl text-sm font-medium transition flex items-center space-x-2">
                        <span>Lihat Website Utama</span>
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Stats Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                    
                    <!-- Card 1: Total Produk -->
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="text-slate-500 text-xs font-semibold uppercase tracking-wider">Total Produk</span>
                                <h3 class="text-2xl font-extrabold text-slate-800 mt-1">
                                    {{ $totalProducts ?? 0 }}
                                </h3>
                            </div>
                            <div class="p-3 bg-red-50 text-red-600 rounded-xl">
                                <i data-lucide="package" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <a href="{{ route('admin.products.index') }}" class="text-xs font-medium text-red-600 hover:text-red-700 flex items-center space-x-1">
                            <span>Kelola Produk</span>
                            <i data-lucide="arrow-right" class="w-3 h-3"></i>
                        </a>
                    </div>

                    <!-- Card 2: Total Mitra -->
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="text-slate-500 text-xs font-semibold uppercase tracking-wider">Total Mitra</span>
                                <h3 class="text-2xl font-extrabold text-slate-800 mt-1">
                                    {{ $totalPartners ?? 0 }}
                                </h3>
                            </div>
                            <div class="p-3 bg-blue-50 text-blue-600 rounded-xl">
                                <i data-lucide="handshake" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <a href="#" class="text-xs font-medium text-blue-600 hover:text-blue-700 flex items-center space-x-1">
                            <span>Kelola Mitra</span>
                            <i data-lucide="arrow-right" class="w-3 h-3"></i>
                        </a>
                    </div>

                    <!-- Card 3: Profil Toko -->
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="text-slate-500 text-xs font-semibold uppercase tracking-wider">Profil Toko</span>
                                <h3 class="text-lg font-bold text-slate-800 mt-1">Aktif</h3>
                            </div>
                            <div class="p-3 bg-amber-50 text-amber-600 rounded-xl">
                                <i data-lucide="store" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <a href="#" class="text-xs font-medium text-amber-600 hover:text-amber-700 flex items-center space-x-1">
                            <span>Edit Alamat & WA</span>
                            <i data-lucide="arrow-right" class="w-3 h-3"></i>
                        </a>
                    </div>

                    <!-- Card 4: Tentang Kami -->
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="text-slate-500 text-xs font-semibold uppercase tracking-wider">Tentang Kami</span>
                                <h3 class="text-lg font-bold text-slate-800 mt-1">Terisi</h3>
                            </div>
                            <div class="p-3 bg-emerald-50 text-emerald-600 rounded-xl">
                                <i data-lucide="info" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <a href="#" class="text-xs font-medium text-emerald-600 hover:text-emerald-700 flex items-center space-x-1">
                            <span>Edit Deskripsi</span>
                            <i data-lucide="arrow-right" class="w-3 h-3"></i>
                        </a>
                    </div>

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