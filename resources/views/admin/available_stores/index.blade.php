<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Toko (Tersedia Di Toko) - Brasil Es Krim & Es Puter</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        @keyframes modalPop {
            0% { opacity: 0; transform: scale(0.95); }
            100% { opacity: 1; transform: scale(1); }
        }
        .animate-modal {
            animation: modalPop 0.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
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
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('admin.about.edit') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="info" class="w-5 h-5"></i>
                        <span>Tentang Kami</span>
                    </a>

                    <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="package" class="w-5 h-5"></i>
                        <span>Produk / Varian</span>
                    </a>

                    <!-- MENU PROFIL TOKO -->
                    <a href="{{ route('admin.store.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="store" class="w-5 h-5"></i>
                        <span>Profil Toko</span>
                    </a>

                    <a href="{{ route('admin.partners.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="handshake" class="w-5 h-5"></i>
                        <span>Mitra Kami</span>
                    </a>
                    
                    <!-- MENU TERSEDIA DI TOKO (AKTIF) -->
                    <a href="{{ route('admin.available-stores.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-red-600 text-white font-medium shadow-lg shadow-red-600/20 transition">
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
                <div class="flex items-center space-x-2 text-slate-500 text-sm">
                    <i data-lucide="home" class="w-4 h-4"></i>
                    <span>/</span>
                    <span class="font-medium text-slate-800">Tersedia di Toko</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold text-sm">
                        A
                    </div>
                    <span class="font-semibold text-sm text-slate-700">Administrator</span>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-8">
                <!-- WRAPPER AGAR KONTEN BERADA DI TENGAH -->
                <div class="max-w-4xl mx-auto">
                    
                    <!-- Header Halaman Tengah -->
                    <div class="mb-8 text-center">
                        <h2 class="text-2xl font-bold text-slate-900">Kelola Toko (Tersedia Di Toko)</h2>
                        <p class="text-slate-500 text-sm mt-1">Tambahkan nama toko dan logo/foto toko tempat produk tersedia.</p>
                    </div>

                    @if (session('success'))
                        <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-700 font-medium text-sm text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Form Tambah Toko (Atas Bawah Sesuai Kode Awal) -->
                    <div class="bg-white rounded-2xl border border-slate-200 p-6 mb-8 shadow-sm">
                        <h3 class="font-bold text-slate-900 mb-4 flex items-center space-x-2">
                            <i data-lucide="plus-circle" class="w-5 h-5 text-red-600"></i>
                            <span>Tambah Toko Baru</span>
                        </h3>
                        <form action="{{ route('admin.available-stores.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                            @csrf
                            <div>
                                <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Nama Toko</label>
                                <input type="text" name="name" required placeholder="Contoh: Toko Indomaret / Minimarket ABC" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Foto / Logo Toko</label>
                                <input type="file" name="image" required accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-600 hover:file:bg-red-100">
                            </div>
                            <div class="pt-2">
                                <button type="submit" class="w-full py-2.5 bg-red-600 text-white font-medium text-sm rounded-xl shadow-lg shadow-red-600/20 hover:bg-red-700 transition">
                                    Simpan Toko
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Daftar Toko (Di Tengah) -->
                    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                        <h3 class="font-bold text-slate-900 mb-4 flex items-center justify-between">
                            <span>Daftar Toko Tersedia</span>
                            <span class="text-xs font-normal text-slate-500">Total: {{ $stores->count() }} Toko</span>
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @forelse($stores as $store)
                                <div class="border border-slate-100 rounded-xl p-4 flex items-center justify-between bg-slate-50 hover:bg-slate-100/50 transition">
                                    <div class="flex items-center space-x-3">
                                        <img src="{{ asset('storage/' . $store->image) }}" class="w-12 h-12 object-cover rounded-lg border border-slate-200 bg-white" alt="{{ $store->name }}">
                                        <span class="font-semibold text-slate-800 text-sm">{{ $store->name }}</span>
                                    </div>
                                    
                                    <!-- Aksi: Edit & Hapus -->
                                    <div class="flex items-center space-x-1">
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('admin.available-stores.edit', $store->id) }}" class="p-2 text-amber-500 hover:text-amber-700 hover:bg-amber-50 rounded-lg text-sm font-medium transition" title="Edit">
                                            <i data-lucide="pencil" class="w-4 h-4"></i>
                                        </a>

                                        <!-- Tombol Hapus (Memicu Modal Pop-Up) -->
                                        <button type="button" onclick="openDeleteModal('{{ $store->id }}', '{{ $store->name }}')" class="p-2 text-rose-500 hover:text-rose-700 hover:bg-rose-50 rounded-lg text-sm font-medium transition" title="Hapus">
                                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                                        </button>

                                        <!-- Form Tersembunyi untuk Hapus -->
                                        <form id="delete-form-{{ $store->id }}" action="{{ route('admin.available-stores.destroy', $store->id) }}" method="POST" class="hidden">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            @empty
                                <div class="col-span-2 text-center py-8">
                                    <i data-lucide="shopping-bag" class="w-10 h-10 text-slate-300 mx-auto mb-2"></i>
                                    <p class="text-slate-400 text-sm">Belum ada toko yang ditambahkan.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <!-- ========================================== -->
    <!--     POP-UP MODAL HAPUS ESTETIK & MODERN    -->
    <!-- ========================================== -->
    <div id="deleteModal" class="fixed inset-0 z-[99999] hidden items-center justify-center bg-slate-900/40 backdrop-blur-sm p-4 transition-all" onclick="closeDeleteModal()">
        <div onclick="event.stopPropagation()" class="bg-white border border-slate-100 rounded-3xl p-6 max-w-sm w-full text-center shadow-2xl animate-modal">
            
            <!-- Icon Peringatan -->
            <div class="w-14 h-14 bg-rose-100 text-rose-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <i data-lucide="alert-triangle" class="w-7 h-7"></i>
            </div>

            <h4 class="text-lg font-bold text-slate-900 mb-1">Hapus Toko ini?</h4>
            <p class="text-slate-500 text-sm mb-6 leading-relaxed">
                Kamu yakin ingin menghapus toko <strong id="deleteStoreName" class="text-slate-800"></strong>? Data yang dihapus tidak bisa dikembalikan.
            </p>

            <div class="flex items-center space-x-3">
                <button type="button" onclick="closeDeleteModal()" class="w-1/2 py-2.5 rounded-xl border border-slate-200 text-slate-600 font-semibold text-sm hover:bg-slate-50 transition">
                    Batal
                </button>
                <button type="button" onclick="executeDelete()" class="w-1/2 py-2.5 rounded-xl bg-red-600 hover:bg-red-700 text-white font-semibold text-sm shadow-lg shadow-red-600/20 transition">
                    Ya, Hapus
                </button>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();

        let targetDeleteId = null;

        function openDeleteModal(id, name) {
            targetDeleteId = id;
            document.getElementById('deleteStoreName').innerText = `"${name}"`;
            const modal = document.getElementById('deleteModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeDeleteModal() {
            const modal = document.getElementById('deleteModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            targetDeleteId = null;
        }

        function executeDelete() {
            if (targetDeleteId) {
                document.getElementById(`delete-form-${targetDeleteId}`).submit();
            }
        }

        // Tutup modal jika tombol ESC ditekan
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeDeleteModal();
        });
    </script>
</body>
</html>