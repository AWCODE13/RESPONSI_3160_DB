<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 via-purple-900 to-indigo-900">

    <div class="w-full max-w-md bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl shadow-2xl p-8">

        <!-- Logo -->
        <div class="flex justify-center mb-5">
            <div class="w-20 h-20 rounded-full bg-white flex items-center justify-center shadow-lg">
                <span class="text-3xl font-bold text-indigo-700">
                    AE
                </span>
            </div>
        </div>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-center text-white mb-2">
            Admin Login
        </h1>

        <p class="text-center text-gray-300 mb-8">
            Welcome back to AmikomEventHub
        </p>

        <!-- Error -->
        @if ($errors->any())
            <div class="bg-red-500/20 border border-red-400 text-red-100 px-4 py-3 rounded-xl mb-5">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-5">

            @csrf

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-200 mb-2">
                    Email Address
                </label>

                <input 
                    type="email"
                    name="email"
                    placeholder="admin@amikom.ac.id"
                    class="w-full px-4 py-3 rounded-xl bg-white/20 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                    required
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-200 mb-2">
                    Password
                </label>

                <input 
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    class="w-full px-4 py-3 rounded-xl bg-white/20 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                    required
                >
            </div>
              
            
            <!-- Button -->
            <button 
                type="submit"
                class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 rounded-xl transition duration-300 shadow-lg"
            >
                Login Sekarang
            </button>

        </form>

    </div>

</body>
</html>