<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lowongan - Helper</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#f8f9fa]">

    <nav class="w-full bg-white border-b border-gray-100 px-8 py-4 flex items-center justify-between shadow-sm">
        <div class="flex items-center">
            <a href="/"
                class="text-xl font-bold text-red-600 italic hover:opacity-80 transition flex items-center tracking-wide">
                BRASIL<span class="text-black not-italic ml-1 font-bold">Loker</span>
            </a>
        </div>
        <div class="flex items-center space-x-6">
            <a href="/register" class="text-gray-600 hover:text-gray-900 font-medium text-sm transition">
                Sign Up
            </a>
            <a href="/login"
                class="bg-[#3b82f6] hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded-xl text-sm shadow-sm transition">
                Log In
            </a>
        </div>
    </nav>

    <div class="w-full min-h-screen pb-12">
        <div class="w-full h-48 bg-[#222] relative">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1000"
                class="w-full h-full object-cover opacity-40" alt="Banner">
        </div>

        <div class="max-w-xl mx-auto -mt-16 relative z-10 px-4">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 flex items-center space-x-5">
                <div
                    class="w-16 h-16 bg-blue-50 rounded-xl overflow-hidden flex items-center justify-center border border-gray-100">
                    <img src="/assets/img/logo helper.png" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                    <h1 class="text-2xl font-bold text-gray-800 italic tracking-wide">Helper</h1>
                    <div class="mt-2">
                        <a href="/login"
                            class="bg-[#11a04b] hover:bg-[#0e863e] text-white font-semibold px-6 py-1.5 rounded-lg text-xs transition inline-block">
                            Apply
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-2xl mx-auto px-6 mt-10">
            <div class="mb-8">
                <h3 class="text-lg font-bold text-gray-800 mb-3 tracking-wide">Deskripsi Pekerjaan :</h3>
                <p class="text-gray-600 text-sm leading-relaxed text-justify font-medium">
                    Kami membuka kesempatan kerja untuk posisi Helper, yaitu tenaga bantuan umum yang siap terlibat
                    langsung dalam kegiatan operasional harian...
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
    </div>

</body>

</html>
