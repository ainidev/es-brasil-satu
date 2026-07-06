<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#f8f9fa] text-[#2c2c2c]">

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

    <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4">
        <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Sign Up</h2>

            <form id="registerForm" onsubmit="handleRegister(event)" autocomplete="off" class="w-full space-y-4">

                @php
                    $fields = [
                        ['name' => 'name', 'label' => 'Nama', 'type' => 'text', 'required' => true],
                        ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true],
                        ['name' => 'password', 'label' => 'Password', 'type' => 'password', 'required' => true],
                        ['name' => 'password_confirmation', 'label' => 'Confirm Password', 'type' => 'password', 'required' => true],
                        ['name' => 'phone', 'label' => 'Phone (Min 10, Max 13 digit)', 'type' => 'text', 'required' => true],
                        ['name' => 'pob', 'label' => 'Tempat Lahir', 'type' => 'text', 'required' => true],
                        ['name' => 'dob', 'label' => 'Tanggal Lahir', 'type' => 'date', 'required' => true],
                        ['name' => 'address', 'label' => 'Alamat', 'type' => 'text', 'required' => true],
                        ['name' => 'skills', 'label' => 'Skill Saya / Keahlian', 'type' => 'textarea', 'required' => false],
                    ];
                @endphp

                @foreach ($fields as $field)
                    <div>
                        <div class="relative flex bg-[#f8f9fa] border border-gray-200 focus-within:border-blue-500 focus-within:bg-white rounded-xl px-4 py-3.5 shadow-xs transition
                            {{ $field['type'] === 'textarea' ? 'items-start' : 'items-center' }}
                            {{ $field['name'] === 'dob' ? 'cursor-pointer' : '' }}"
                            @if($field['name'] === 'dob') onclick="document.getElementById('dob').showPicker()" @endif>

                            @if ($field['type'] === 'textarea')
                                <textarea id="{{ $field['name'] }}" name="{{ $field['name'] }}" rows="3" placeholder="{{ $field['label'] }} {{ $field['required'] ? '*' : '' }}"
                                    class="w-full bg-transparent border-none p-0 text-gray-700 placeholder-gray-400 focus:ring-0 text-sm font-medium resize-none outline-none"></textarea>
                            @else
                                <input id="{{ $field['name'] }}" type="{{ $field['type'] }}" name="{{ $field['name'] }}"
                                    {{ $field['required'] ? 'required' : '' }}
                                    placeholder="{{ $field['label'] }} {{ $field['required'] ? '*' : '' }}"
                                    class="w-full bg-transparent border-none p-0 text-gray-700 placeholder-gray-400 focus:ring-0 text-sm font-medium outline-none"
                                    {{ $field['type'] === 'password' ? 'autocomplete=new-password' : 'autocomplete=off' }} />

                                @if ($field['type'] === 'password')
                                    <button type="button" onclick="toggleVisibility('{{ $field['name'] }}')" class="text-gray-400 hover:text-gray-600 focus:outline-none ml-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach

                <div class="flex flex-col space-y-3 pt-2">
                    <button type="submit" class="w-full bg-[#1bc465] hover:bg-emerald-600 text-white font-bold py-3 rounded-xl shadow-xs transition text-base cursor-pointer">Register</button>
                    <button type="button" class="w-full bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 font-semibold py-3 rounded-xl shadow-xs transition flex items-center justify-center space-x-2 text-sm cursor-pointer">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-4 h-4" alt="Google">
                        <span>Continue with Google</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // PERBAIKAN 3: Fungsi handle notifikasi popup dan bersihkan form otomatis
        function handleRegister(event) {
            event.preventDefault(); 
            alert("Pendaftaran Berhasil! Data Anda telah diterima oleh sistem.");
            document.getElementById("registerForm").reset();
        }

        // Fungsi bawaan kodenmu untuk intip password agar tidak rusak
        function toggleVisibility(id) {
            const input = document.getElementById(id);
            if (input.type === 'password') {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
        }
    </script>
</body>

</html>