<div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
    <!-- Header dengan dekorasi -->
    <div class="bg-amber-400 py-6 px-8">
        <h2 class="text-3xl font-bold text-brown-800 text-center">Selamat Datang</h2>
        <p class="text-brown-700 text-center mt-1">Silakan masuk ke akun Anda</p>
    </div>

    <div class="p-6 sm:p-10">
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf
            <div>
                <label for="username" class="block text-sm font-medium text-brown-700 mb-1">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    class="w-full px-4 py-3 rounded-lg border border-amber-300 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200"
                    required
                >
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-brown-700 mb-1">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    class="w-full px-4 py-3 rounded-lg border border-amber-300 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200"
                    required
                >
            </div>
            <button
                type="submit"
                class="w-full py-3 px-4 border border-transparent rounded-lg shadow-md text-lg font-semibold text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition duration-200"
            >
                Login
            </button>
        </form>
    </div>
</div>
