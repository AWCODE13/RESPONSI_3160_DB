<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">

        <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">
            Login Admin
        </h1>
        @if ($errors->any())
    <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg mb-4">
        {{ $errors->first() }}
    </div>
@endif

        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-5">

            @csrf

            <!-- Email -->
            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Email
                </label>

                <input 
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Password
                </label>

                <input 
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Button -->
            <button 
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition duration-300"
            >
                Login
            </button>

        </form>

    </div>

</body>
</html>