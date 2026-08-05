<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Produk - Brasil Es Krim & Es Puter</title>
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

                    <a href="{{ route('admin.store.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="store" class="w-5 h-5"></i>
                        <span>Profil Toko</span>
                    </a>

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
                <div class="flex items-center space-x-2 text-slate-500 text-sm">
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-red-600 transition">
                        <i data-lucide="home" class="w-4 h-4"></i>
                    </a>
                    <span>/</span>
                    <span class="font-medium text-slate-800">Daftar Varian Rasa</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold text-sm">A</div>
                    <span class="font-semibold text-sm text-slate-700">Administrator</span>
                </div>
            </header>

            <!-- Main Content Scrollable -->
            <main class="flex-1 overflow-y-auto p-8">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                    
                    <!-- Header Actions -->
                    <div class="flex justify-between items-center mb-6 pb-4 border-b border-slate-100">
                        <div>
                            <h2 class="text-xl font-bold text-slate-800">Daftar Varian Rasa Es Krim</h2>
                            <p class="text-sm text-slate-500">Kelola katalog varian rasa es krim dan es puter.</p>
                        </div>
                        <a href="{{ route('admin.products.create') }}" class="bg-red-600 text-white px-5 py-2.5 rounded-xl font-semibold hover:bg-red-700 shadow-lg shadow-red-600/20 transition flex items-center space-x-2">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                            <span>Tambah Varian Baru</span>
                        </a>
                    </div>

                    <!-- Flash Message Notifikasi -->
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl text-sm font-medium flex items-center space-x-2">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-600"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <!-- Table Data -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 uppercase text-xs font-semibold tracking-wider border-b border-slate-200">
                                    <th class="p-4">Foto Display</th>
                                    <th class="p-4">Nama Varian</th>
                                    <th class="p-4">Kategori</th>
                                    <th class="p-4">Status Stok</th>
                                    <th class="p-4 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-sm">
                                @forelse($products as $product)
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="p-4">
                                        @if($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" class="w-14 h-14 object-cover rounded-xl border border-slate-200">
                                        @else
                                            <div class="w-14 h-14 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400">
                                                <i data-lucide="image" class="w-6 h-6"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="p-4 font-semibold text-slate-800">
                                        {{ $product->name }}
                                    </td>
                                    <td class="p-4 text-slate-600">
                                        <span class="px-3 py-1 bg-slate-100 text-slate-700 rounded-lg text-xs font-medium">
                                            {{ $product->category ?? 'Es Krim' }}
                                        </span>
                                    </td>
                                    <td class="p-4">
                                        <span class="px-3 py-1 rounded-full text-xs font-bold {{ $product->status == 'available' ? 'bg-emerald-100 text-emerald-700' : 'bg-rose-100 text-rose-700' }}">
                                            {{ $product->status == 'available' ? 'Tersedia' : 'Habis' }}
                                        </span>
                                    </td>
                                    <td class="p-4">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="{{ route('admin.products.edit', $product->id) }}" class="p-2 bg-slate-100 text-slate-600 hover:bg-slate-200 hover:text-slate-900 rounded-lg transition" title="Edit Data">
                                                <i data-lucide="pencil" class="w-4 h-4"></i>
                                            </a>
                                            <!-- Tombol pemicu Modal Pop-Up -->
                                            <button type="button" 
                                                    onclick="openDeleteModal('{{ route('admin.products.destroy', $product->id) }}', '{{ $product->name }}')" 
                                                    class="p-2 bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white rounded-lg transition" 
                                                    title="Hapus Data">
                                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="p-8 text-center text-slate-400">
                                        <i data-lucide="package-open" class="w-12 h-12 mx-auto mb-2 text-slate-300"></i>
                                        <p>Belum ada varian rasa yang ditambahkan.</p>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </main>
        </div>

    </div>

    <!-- MODAL POP-UP KONFIRMASI HAPUS -->
    <div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/60 backdrop-blur-sm transition-opacity duration-300">
        <div class="bg-white rounded-3xl max-w-md w-full mx-4 p-6 shadow-2xl transform transition-all scale-95 duration-200 border border-slate-100">
            
            <!-- Icon Warning Header -->
            <div class="w-14 h-14 bg-rose-100 text-rose-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <i data-lucide="alert-triangle" class="w-7 h-7"></i>
            </div>

            <!-- Content Modal -->
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-slate-800 mb-2">Hapus Varian Rasa?</h3>
                <p class="text-slate-500 text-sm">
                    Apakah Anda yakin ingin menghapus rasa <span id="productName" class="font-bold text-slate-800 underline decoration-rose-500 decoration-2"></span>? Tindakan ini tidak dapat dibatalkan.
                </p>
            </div>

            <!-- Actions Modal -->
            <div class="flex items-center space-x-3">
                <button type="button" 
                        onclick="closeDeleteModal()" 
                        class="w-1/2 py-3 bg-slate-100 text-slate-600 hover:bg-slate-200 font-semibold rounded-xl transition text-sm">
                    Batal
                </button>

                <form id="deleteForm" action="" method="POST" class="w-1/2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="w-full py-3 bg-rose-600 text-white hover:bg-rose-700 font-semibold rounded-xl shadow-lg shadow-rose-600/30 transition text-sm flex items-center justify-center space-x-2">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                        <span>Ya, Hapus</span>
                    </button>
                </form>
            </div>

        </div>
    </div>

    <!-- Render Lucide Icons & Script Modal Control -->
    <script>
        lucide.createIcons();

        function openDeleteModal(actionUrl, productName) {
            const modal = document.getElementById('deleteModal');
            const form = document.getElementById('deleteForm');
            const nameSpan = document.getElementById('productName');

            form.action = actionUrl;
            nameSpan.textContent = productName;

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeDeleteModal() {
            const modal = document.getElementById('deleteModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    </script>
</body>
</html>