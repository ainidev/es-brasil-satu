<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pop-up Promo - Brasil Es Krim</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- SweetAlert2 CSS & JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased">
    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR -->
        <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between shadow-xl flex-shrink-0">
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

                    <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white font-medium transition">
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

                    <a href="{{ route('admin.promos.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-red-600 text-white font-medium shadow-lg shadow-red-600/20 transition">
                        <i data-lucide="image" class="w-5 h-5"></i>
                        <span>Pop-up Promo</span>
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

        <!-- MAIN CONTENT -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            <main class="flex-1 overflow-y-auto p-8">
                <div class="max-w-6xl mx-auto">
                    
                    <div class="mb-8 text-center">
                        <h2 class="text-2xl font-bold text-slate-900">Kelola Pop-up Promo</h2>
                        <p class="text-slate-500 text-sm mt-1">Upload dan atur gambar poster promo yang akan tampil otomatis saat website dibuka.</p>
                    </div>

                    @if (session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: "{{ session('success') }}",
                                    showConfirmButton: false,
                                    timer: 2000,
                                    customClass: {
                                        popup: 'rounded-2xl'
                                    }
                                });
                            });
                        </script>
                    @endif

                    <!-- CONTAINER GRID DUA KOLOM (KIRI & KANAN) -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        
                        <!-- KOLOM KIRI: Form Upload / Tambah Promo -->
                        <div class="lg:col-span-5 bg-white rounded-2xl border border-slate-200 p-6 shadow-sm sticky top-8">
                            <h3 class="font-bold text-slate-900 mb-4 flex items-center space-x-2">
                                <i data-lucide="plus-circle" class="w-5 h-5 text-red-600 shrink-0"></i>
                                <span>Upload Gambar Promo Baru</span>
                            </h3>
                            
                            <form action="{{ route('admin.promos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                                @csrf
                                <div>
                                    <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Judul Promo (Opsional)</label>
                                    <input type="text" name="title" placeholder="Contoh: Promo Es Brasil Durian" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:ring-2 focus:ring-red-500/20 focus:border-red-500">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Pilih Banner / Poster Gambar</label>
                                    <input type="file" name="image" required accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-600 hover:file:bg-red-100">
                                </div>
                                <button type="submit" class="w-full py-2.5 bg-red-600 text-white font-medium text-sm rounded-xl hover:bg-red-700 transition shadow-lg shadow-red-600/20">
                                    Simpan & Tampilkan Promo
                                </button>
                            </form>
                        </div>

                        <!-- KOLOM KANAN: Daftar Gambar Promo -->
                        <div class="lg:col-span-7 bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                            <h3 class="font-bold text-slate-900 mb-4 flex items-center justify-between">
                                <span>Daftar Gambar Promo</span>
                                <span class="text-xs font-normal text-slate-500">Total: {{ count($promos) }} Promo</span>
                            </h3>

                            <div class="space-y-4">
                                @forelse($promos as $item)
                                    <div class="border border-slate-200 rounded-xl p-4 bg-slate-50 flex items-center justify-between hover:bg-white hover:shadow-md transition">
                                        <div class="flex items-center space-x-4">
                                            <img src="{{ asset('storage/' . $item->image) }}" class="w-20 h-20 object-cover rounded-xl border border-slate-200 shrink-0" alt="Promo">
                                            <div>
                                                <h4 class="font-bold text-slate-800 text-base mb-1">{{ $item->title ?? 'Tanpa Judul' }}</h4>
                                                <span class="inline-flex items-center space-x-1.5 text-xs text-emerald-600 font-medium bg-emerald-50 px-2.5 py-1 rounded-full border border-emerald-200">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                                    <span>Status Aktif</span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- TOMBOL AKSI (EDIT & HAPUS) -->
                                        <div class="flex items-center space-x-2 shrink-0">
                                            <!-- Tombol Edit -->
                                            <button type="button" 
                                                    onclick="openEditModal({{ $item->id }}, '{{ addslashes($item->title) }}')" 
                                                    class="p-2.5 text-amber-600 bg-amber-50 hover:bg-amber-100 rounded-xl transition border border-amber-200 flex items-center justify-center" 
                                                    title="Edit Promo">
                                                <i data-lucide="pencil" class="w-4 h-4 shrink-0"></i>
                                            </button>

                                            <!-- Form Hapus dengan SweetAlert -->
                                            <form id="delete-form-{{ $item->id }}" action="{{ route('admin.promos.destroy', $item->id) }}" method="POST" class="inline-block m-0 p-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" 
                                                        onclick="confirmDelete({{ $item->id }})"
                                                        class="p-2.5 text-rose-600 bg-rose-50 hover:bg-rose-100 rounded-xl transition border border-rose-200 flex items-center justify-center" 
                                                        title="Hapus Promo">
                                                    <i data-lucide="trash-2" class="w-4 h-4 shrink-0"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @empty
                                    <div class="text-center py-10 border border-dashed border-slate-200 rounded-xl">
                                        <i data-lucide="image-off" class="w-10 h-10 text-slate-300 mx-auto mb-2"></i>
                                        <p class="text-slate-400 text-sm">Belum ada promo yang di-upload.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>

                    </div>

                </div>
            </main>
        </div>
    </div>

    <!-- MODAL EDIT PROMO -->
    <div id="editModal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-xl border border-slate-100">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-bold text-slate-900 text-lg">Edit Promo</h3>
                <button onclick="closeEditModal()" class="text-slate-400 hover:text-slate-600">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <form id="editForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Judul Promo</label>
                    <input type="text" id="editTitle" name="title" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:ring-2 focus:ring-red-500/20 focus:border-red-500">
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase text-slate-600 mb-1">Ganti Gambar (Opsional)</label>
                    <input type="file" name="image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-600 hover:file:bg-red-100">
                    <p class="text-[11px] text-slate-400 mt-1">*Biarkan kosong jika tidak ingin mengganti gambar.</p>
                </div>
                <div class="flex items-center space-x-3 pt-2">
                    <button type="button" onclick="closeEditModal()" class="w-1/2 py-2.5 bg-slate-100 text-slate-600 font-medium text-sm rounded-xl hover:bg-slate-200 transition">Batal</button>
                    <button type="submit" class="w-1/2 py-2.5 bg-red-600 text-white font-medium text-sm rounded-xl hover:bg-red-700 transition">Update Promo</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        lucide.createIcons();

        function openEditModal(id, title) {
            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editTitle').value = title;
            document.getElementById('editForm').action = `/admin/promos/${id}`;
            lucide.createIcons();
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        // Konfirmasi Hapus Modern dengan SweetAlert2
        function confirmDelete(id) {
            Swal.fire({
                title: 'Hapus Promo ini?',
                text: "Gambar promo yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc2626',
                cancelButtonColor: '#94a3b8',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'rounded-2xl',
                    confirmButton: 'rounded-xl px-5 py-2.5 font-medium',
                    cancelButton: 'rounded-xl px-5 py-2.5 font-medium'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${id}`).submit();
                }
            });
        }
    </script>
</body>
</html>