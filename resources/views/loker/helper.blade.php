<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lowongan Helper - BRASIL Loker</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>

<body class="bg-[#f8f9fa] text-[#2c2c2c] flex flex-col min-h-screen">

    <!-- 1. MANGGIL NAVBAR TERPISAH YANG SUDAH KONSISTEN -->
    @include('partials.navbar_user')

    <!-- 2. PEMBUNGKUS UTAMA DETAIL LOKER (pt-20 disesuaikan agar pas di bawah fixed navbar dengan banner) -->
    <main class="flex-grow w-full pb-12 pt-20">
        <!-- Banner Visual -->
        <div class="w-full h-48 bg-[#222] relative">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1000" class="w-full h-full object-cover opacity-40" alt="Banner">
        </div>

        <!-- Info Singkat Perusahaan / Posisi -->
        <div class="max-w-xl mx-auto -mt-16 relative z-10 px-4">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 flex items-center space-x-5">
                <div class="w-16 h-16 bg-blue-50 rounded-xl overflow-hidden flex items-center justify-center border border-gray-100">
                    <img src="/assets/img/logo helper.png" class="w-full h-full object-cover" alt="Logo Helper">
                </div>
                <div class="flex-1">
                    <h1 class="text-2xl font-bold text-gray-800 italic tracking-wide">Helper</h1>
                  <a href="{{ route('lamaran.form', ['lowongan_id' => $lowongan->id]) }}"
   class="inline-block bg-[#1bc465] hover:bg-emerald-600 text-white font-bold text-xs px-6 py-2.5 rounded-lg transition shadow-xs">
    Apply
</a>
                </div>
            </div>
        </div>

        <!-- Konten Detail Lowongan -->
        <div class="max-w-2xl mx-auto px-6 mt-10">
            <div class="mb-8">
                <h3 class="text-lg font-bold text-gray-800 mb-3 tracking-wide">Deskripsi Pekerjaan :</h3>
                <p class="text-gray-600 text-sm leading-relaxed text-justify font-medium">
                    Kami membuka kesempatan kerja untuk posisi Helper, yaitu tenaga bantuan umum yang siap terlibat
                    langsung dalam kegiatan operasional harian. Posisi ini sangat cocok untuk kamu yang aktif, suka
                    bekerja lapangan, dan siap belajar berbagai hal baru. Sebagai Helper, kamu akan membantu
                    kelancaran proses kerja mulai dari packing barang, membersihkan area kerja, hingga mengantar
                    pesanan ke customer.
                </p>
            </div>
            <div>
                <h3 class="text-lg font-bold text-gray-800 mb-3 tracking-wide">Persyaratan :</h3>
                <ul class="list-disc list-inside text-gray-600 text-sm space-y-2 font-medium pl-1">
                    <li>Pria, usia maksimal 27 tahun</li>
                    <li>Domisili dekat lokasi usaha Bogor</li>
                    <li>Bisa mengendarai motor roda 3 (Viar)</li>
                </ul>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#f1f1f1] border-t border-gray-200 py-6 mt-auto text-center">
        <div class="text-xs font-bold tracking-wide text-gray-400 mb-2">
            <span class="text-red-600 italic font-black">BRASIL</span> Loker
        </div>
        <div class="text-xs font-bold text-emerald-500 flex items-center justify-center space-x-2 mb-4">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
            </span>
            <span>+62 857-7399-3494</span>
        </div>
        <p class="text-[10px] text-gray-400 font-medium">© 2026 All rights reserved Es Brasil Create by ❤️ BogorStudio</p>
        <div class="flex justify-center space-x-4 mt-3 text-gray-400 text-sm">
            <a href="https://www.facebook.com/Esbrasilbgr" target="_blank" class="hover:text-gray-600"> Facebook </a>
            <a href="https://www.instagram.com/esbrasil_bogor/" target="_blank" class="hover:text-gray-600"> Instagram </a>
            <a href="https://esbrasilonline.com/" target="_blank" class="hover:text-gray-600"> Website </a>
        </div>
    </footer>

    <!-- Bagian JavaScript -->
    <script>
        function toggleDropdown(event) {
            if(event) event.stopPropagation();
            const dropdown = document.getElementById('profileDropdown');
            if(dropdown) {
                dropdown.classList.toggle('hidden');
            }
        }

        window.addEventListener('click', function(event) {
            const dropdown = document.getElementById('profileDropdown');
            const profileArea = document.getElementById('profile-area');
            
            if (dropdown && !dropdown.classList.contains('hidden')) {
                if (profileArea && !profileArea.contains(event.target)) {
                    dropdown.classList.add('hidden');
                }
            }
        });

        function shareLowongan() {
            if (navigator.share) {
                navigator.share({
                    title: document.title,
                    url: window.location.href
                });
            } else {
                navigator.clipboard.writeText(window.location.href);
                alert("Link berhasil disalin.");
            }
        }
    </script>

</body>
</html>