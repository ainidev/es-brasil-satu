<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Mitra Kami - Brasil Es Krim & Es Puter</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased">
    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR (Samain persis kaya Dashboard - bg-slate-900) -->
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

                    <!-- Informasi Toko -->
                    <a href="{{ route('admin.store.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
                        <i data-lucide="store" class="w-5 h-5"></i>
                        <span>Profil Toko</span>
                    </a>

                    <!-- Mitra Kami (ACTIVE MENU - Red-600) -->
                    <a href="{{ route('admin.partners.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-red-600 text-white font-medium shadow-lg shadow-red-600/20 transition">
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
                    <span class="font-medium text-slate-800">Mitra Kami</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold text-sm">
                        A
                    </div>
                    <span class="font-semibold text-sm text-slate-700">Administrator</span>
                </div>
            </header>

            <!-- Main Content Scrollable -->
            <main class="flex-1 overflow-y-auto p-8">
                <!-- Header Halaman -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900">Kelola Mitra Kami</h2>
                        <p class="text-slate-500 text-sm mt-1">Tambahkan dan atur daftar mitra/partner yang bekerja sama dengan Brasil Es Krim.</p>
                    </div>
                    <div>
                        <button onclick="openModal('addModal')" class="inline-flex items-center space-x-2 bg-red-600 hover:bg-red-700 text-white px-5 py-2.5 rounded-xl font-medium shadow-lg shadow-red-600/20 transition cursor-pointer">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                            <span>Tambah Mitra</span>
                        </button>
                    </div>
                </div>

                <!-- Notifikasi Sukses -->
                @if (session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-700 flex items-center space-x-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-emerald-600"></i>
                        <span class="text-sm font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                <!-- TABEL DATA MITRA -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 border-b border-slate-200 text-xs font-semibold uppercase text-slate-500 tracking-wider">
                                    <th class="py-4 px-6">No</th>
                                    <th class="py-4 px-6">Logo / Gambar</th>
                                    <th class="py-4 px-6">Nama Mitra</th>
                                    <th class="py-4 px-6 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-sm">
                                @forelse ($partners as $index => $partner)
                                    <tr class="hover:bg-slate-50/50 transition">
                                        <td class="py-4 px-6 font-medium text-slate-500">{{ $index + 1 }}</td>
                                        <td class="py-4 px-6">
                                            <div class="w-16 h-12 rounded-lg bg-slate-100 border border-slate-200 overflow-hidden flex items-center justify-center p-1">
                                                @if ($partner->image)
                                                    <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" class="max-h-full max-w-full object-contain">
                                                @else
                                                    <i data-lucide="image" class="w-6 h-6 text-slate-400"></i>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 font-semibold text-slate-900">{{ $partner->name }}</td>
                                        <td class="py-4 px-6 text-right">
                                            <div class="flex items-center justify-end space-x-2">
                                                <!-- Tombol Edit -->
                                                <button onclick="editPartner('{{ $partner->id }}', '{{ $partner->name }}', '{{ asset('storage/' . $partner->image) }}')" class="p-2 rounded-lg text-amber-600 hover:bg-amber-50 transition" title="Edit">
                                                    <i data-lucide="pencil" class="w-4 h-4"></i>
                                                </button>
                                                <!-- Tombol Hapus -->
                                                <button onclick="confirmDelete('{{ $partner->id }}', '{{ $partner->name }}')" class="p-2 rounded-lg text-rose-600 hover:bg-rose-50 transition" title="Hapus">
                                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="py-12 text-center text-slate-400">
                                            <div class="flex flex-col items-center justify-center space-y-2">
                                                <i data-lucide="handshake" class="w-10 h-10 text-slate-300"></i>
                                                <p class="font-medium text-slate-500">Belum ada data mitra.</p>
                                                <p class="text-xs text-slate-400">Klik tombol "Tambah Mitra" di atas untuk menambahkan mitra baru.</p>
                                            </div>
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

    <!-- MODAL TAMBAH MITRA -->
    <div id="addModal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-xl border border-slate-100">
            <div class="flex justify-between items-center mb-5">
                <h3 class="text-lg font-bold text-slate-900">Tambah Mitra Baru</h3>
                <button onclick="closeModal('addModal')" class="text-slate-400 hover:text-slate-600 p-1 rounded-lg">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
            <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Nama Mitra</label>
                    <input type="text" name="name" required placeholder="Contoh: Minimarket Abadi" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Logo / Gambar Mitra</label>
                    <input type="file" name="image" required accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-red-50 file:text-red-600 hover:file:bg-red-100">
                </div>
                <div class="flex justify-end space-x-3 mt-6">
                    <button type="button" onclick="closeModal('addModal')" class="px-4 py-2.5 rounded-xl border border-slate-200 text-slate-600 font-medium text-sm hover:bg-slate-50">Batal</button>
                    <button type="submit" class="px-4 py-2.5 rounded-xl bg-red-600 hover:bg-red-700 text-white font-medium text-sm shadow-md shadow-red-600/20">Simpan Mitra</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL EDIT MITRA -->
    <div id="editModal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-xl border border-slate-100">
            <div class="flex justify-between items-center mb-5">
                <h3 class="text-lg font-bold text-slate-900">Edit Data Mitra</h3>
                <button onclick="closeModal('editModal')" class="text-slate-400 hover:text-slate-600 p-1 rounded-lg">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Nama Mitra</label>
                    <input type="text" id="edit_name" name="name" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-red-600 text-sm">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-600 uppercase mb-2">Ganti Logo / Gambar (Opsional)</label>
                    <div class="mb-2 w-20 h-16 rounded-lg bg-slate-100 border border-slate-200 p-1 flex items-center justify-center">
                        <img id="edit_preview" src="" alt="Preview" class="max-h-full max-w-full object-contain">
                    </div>
                    <input type="file" name="image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-red-50 file:text-red-600 hover:file:bg-red-100">
                </div>
                <div class="flex justify-end space-x-3 mt-6">
                    <button type="button" onclick="closeModal('editModal')" class="px-4 py-2.5 rounded-xl border border-slate-200 text-slate-600 font-medium text-sm hover:bg-slate-50">Batal</button>
                    <button type="submit" class="px-4 py-2.5 rounded-xl bg-amber-600 hover:bg-amber-700 text-white font-medium text-sm shadow-md shadow-amber-600/20">Update Mitra</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL KONFIRMASI HAPUS -->
    <div id="deleteModal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden p-4">
        <div class="bg-white rounded-2xl max-w-sm w-full p-6 shadow-xl border border-slate-100 text-center">
            <div class="w-12 h-12 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center mx-auto mb-4">
                <i data-lucide="alert-triangle" class="w-6 h-6"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-900 mb-1">Hapus Mitra?</h3>
            <p class="text-slate-500 text-sm mb-6">Apakah Anda yakin ingin menghapus mitra <span id="delete_partner_name" class="font-semibold text-slate-800"></span>? Tindakan ini tidak dapat dibatalkan.</p>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex space-x-3">
                    <button type="button" onclick="closeModal('deleteModal')" class="flex-1 py-2.5 rounded-xl border border-slate-200 text-slate-600 font-medium text-sm hover:bg-slate-50">Batal</button>
                    <button type="submit" class="flex-1 py-2.5 rounded-xl bg-rose-600 hover:bg-rose-700 text-white font-medium text-sm shadow-md shadow-rose-600/20">Ya, Hapus</button>
                </div>
            </form>
        </div>
    </div>

    <!-- SCRIPT JAVASCRIPT & MODAL -->
    <script>
        // Inisialisasi Lucide Icons
        lucide.createIcons();

        // Fungsi Buka & Tutup Modal
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }

        // Fungsi Modal Edit
        function editPartner(id, name, imageUrl) {
            const form = document.getElementById('editForm');
            form.action = `/admin/partners/${id}`;
            document.getElementById('edit_name').value = name;
            
            const preview = document.getElementById('edit_preview');
            preview.src = imageUrl;
            preview.alt = name;
            
            openModal('editModal');
        }

        // Fungsi Modal Hapus
        function confirmDelete(id, name) {
            const form = document.getElementById('deleteForm');
            form.action = `/admin/partners/${id}`;
            document.getElementById('delete_partner_name').textContent = name;
            openModal('deleteModal');
        }
    </script>
</body>
</html>