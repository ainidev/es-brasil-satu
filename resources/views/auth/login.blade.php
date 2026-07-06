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

    <div class="min-h-[calc(100vh-80px)] flex flex-col justify-center items-center py-12 px-4">
        
        <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Log In</h2>

            <form id="loginForm" onsubmit="handleLogin(event)" autocomplete="off" class="w-full space-y-5">

                <div>
                    <div class="relative flex items-center bg-[#f8f9fa] border border-gray-200 focus-within:border-blue-500 focus-within:bg-white rounded-xl px-4 py-3.5 shadow-xs transition">
                        <input id="email" type="email" name="email" required autocomplete="off"
                            placeholder="Email *"
                            class="w-full bg-transparent border-none p-0 text-gray-700 placeholder-gray-400 focus:ring-0 text-sm font-medium outline-none" />
                        <span class="text-gray-400 font-bold text-sm pointer-events-none">!</span>
                    </div>
                </div>

                <div>
                    <div class="relative flex items-center bg-[#f8f9fa] border border-gray-200 focus-within:border-blue-500 focus-within:bg-white rounded-xl px-4 py-3.5 shadow-xs transition">
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            placeholder="Password *"
                            class="w-full bg-transparent border-none p-0 text-gray-700 placeholder-gray-400 focus:ring-0 text-sm font-medium outline-none" />
                        
                        <button type="button" onclick="togglePasswordVisibility()" class="text-gray-400 hover:text-gray-600 focus:outline-none ml-2 cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                    <p class="text-xs text-gray-400 px-1 mt-1">Your password must be 5-20 characters long.</p>
                </div>

                <div class="flex justify-end text-sm">
                    <a href="#" onclick="alert('Fitur reset password belum diaktifkan (Demo)')" class="text-gray-500 hover:text-blue-500 hover:underline font-medium transition">
                        Lupa Password ?
                    </a>
                </div>

                <div class="flex flex-col space-y-3 pt-2">
                    <button type="submit" class="w-full bg-[#1bc465] hover:bg-emerald-600 text-white font-bold py-3 rounded-xl shadow-xs transition text-base cursor-pointer">
                        Log In
                    </button>

                    <a href="{{ route('google.login') }}" class="w-full bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 font-semibold py-3 rounded-xl shadow-xs transition flex items-center justify-center space-x-2 text-sm cursor-pointer no-underline">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-4 h-4" alt="Google">
                        <span>Continue with Google</span>
                    </a>
                </div>

                <div class="text-center text-sm text-gray-600 pt-4">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-blue-500 hover:underline font-bold ml-1">
                        Daftar
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function handleLogin(event) {
            event.preventDefault(); 
            alert("Log In Berhasil! Selamat datang kembali.");
            document.getElementById("loginForm").reset(); 
        }

        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>

</body>

</html>