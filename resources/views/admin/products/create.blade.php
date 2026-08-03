<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Varian Rasa - Brasil Es Krim & Es Puter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased">
    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR -->
        <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between shadow-xl">
            <div>
                <div class="p-6 border-b border-slate-800 flex items-center space-x-3">
                    <div class="p-2 bg-red-600 rounded-lg text-white">
                        <i data-lucide="ice-cream" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h1 class="font-bold text-lg text-white leading-tight">Brasil Es Krim</h1>
                        <span class="text-xs text-slate-400">Panel Administrator</span>
                    </div>
                </div>

                <nav class="p-4 space-y-1.5">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('admin.about.edit') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="info" class="w-5 h-5"></i>
                        <span>Tentang Kami</span>
                    </a>

                    <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-red-600 text-white font-medium shadow-lg shadow-red-600/20 transition">
                        <i data-lucide="package" class="w-5 h-5"></i>
                        <span>Produk / Varian</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="store" class="w-5 h-5"></i>
                        <span>Profil Toko</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="handshake" class="w-5 h-5"></i>
                        <span>Mitra Kami</span>
                    </a>
                </nav>
            </div>

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
            
            <header class="bg-white border-b border-slate-200 px-8 py-4 flex justify-between items-center shadow-sm">
                <div class="flex items-center space-x-2 text-slate-500 text-sm">
                    <a href="{{ route('admin.products.index') }}" class="hover:text-red-600 transition">Daftar Varian</a>
                    <span>/</span>
                    <span class="font-medium text-slate-800">Tambah Varian Baru</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold text-sm">A</div>
                    <span class="font-semibold text-sm text-slate-700">Administrator</span>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-8">
                <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                    
                    <div class="flex justify-between items-center mb-6 pb-4 border-b border-slate-100">
                        <div>
                            <h2 class="text-xl font-bold text-slate-800">Tambah Varian Rasa Baru</h2>
                            <p class="text-sm text-slate-500">Isi formulir di bawah ini untuk menambahkan rasa es krim baru.</p>
                        </div>
                        <a href="{{ route('admin.products.index') }}" class="text-slate-500 hover:text-slate-800 flex items-center space-x-1 text-sm font-medium">
                            <i data-lucide="arrow-left" class="w-4 h-4"></i>
                            <span>Batal</span>
                        </a>
                    </div>

                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        
                        <div>
                            <label class="block font-semibold text-slate-700 mb-2">Nama Varian Rasa</label>
                            <input type="text" name="name" placeholder="Contoh: Kacang Hijau / Rujak / Coklat Chip" required class="w-full border border-slate-200 p-3 rounded-xl focus:ring-2 focus:ring-red-500 focus:outline-none transition">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block font-semibold text-slate-700 mb-2">Kategori</label>
                                <select name="category" class="w-full border border-slate-200 p-3 rounded-xl focus:ring-2 focus:ring-red-500 focus:outline-none transition">
                                    <option value="Es Krim">Es Krim</option>
                                    <option value="Es Puter">Es Puter</option>
                                    <option value="Es Mambo / Lilin">Es Mambo / Lilin</option>
                                </select>
                            </div>

                            <div>
                                <label class="block font-semibold text-slate-700 mb-2">Status Stok</label>
                                <select name="status" class="w-full border border-slate-200 p-3 rounded-xl focus:ring-2 focus:ring-red-500 focus:outline-none transition">
                                    <option value="available">Tersedia</option>
                                    <option value="sold_out">Habis</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block font-semibold text-slate-700 mb-2">Foto Kemasan / Product Display</label>
                            <input type="file" name="image" accept="image/*" class="w-full border border-slate-200 p-2 rounded-xl text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-red-50 file:text-red-600 file:font-semibold hover:file:bg-red-100 transition">
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex justify-end">
                            <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-red-700 shadow-lg shadow-red-600/20 transition flex items-center space-x-2">
                                <i data-lucide="plus-circle" class="w-5 h-5"></i>
                                <span>Simpan Varian Rasa</span>
                            </button>
                        </div>
                    </form>

                </div>
            </main>
        </div>

    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>