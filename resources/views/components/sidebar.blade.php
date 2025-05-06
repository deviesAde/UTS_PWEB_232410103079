<div class="flex">

    <button id="sidebarToggle" class="md:hidden fixed top-4 left-4 z-50 p-2 rounded-md bg-amber-600 text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>


   <div id="sidebar" class="w-64 bg-amber-900 min-h-screen fixed left-0 top-0 text-white shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-40 overflow-y-auto">
        <div class="p-5 border-b border-amber-700 flex items-center gap-3">
            <img src="{{ asset('images/logozoo.png') }}" alt="Logo" class="h-10">
            <span class="font-semibold text-lg">Devies Zoo</span>
        </div>

        <nav class="p-4">
            <div class="mb-2">
                <a href="{{ route('dashboard', ['username' => request('username')]) }}"
                   class="px-4 py-3 text-white rounded-lg hover:bg-amber-700 transition flex items-center">
                   <i class="fas fa-home mr-3 text-amber-300"></i> Dashboard
                </a>
            </div>

            <div class="mb-2">
                <a href="{{ route('profile', ['username' => request('username')]) }}"
                   class="px-4 py-3 text-white rounded-lg hover:bg-amber-700 transition flex items-center">
                   <i class="fas fa-user mr-3 text-amber-300"></i> Profile
                </a>
            </div>

            <div class="mb-2">
               <a href="{{ route('pengelolaan', ['username' => request('username')]) }}"
                   class="px-4 py-3 text-white rounded-lg hover:bg-amber-700 transition flex items-center">
                   <i class="fas fa-tasks mr-3 text-amber-300"></i> Pengelolaan
                </a>
            </div>
        </nav>
    </div>


    <div id="sidebarOverlay" class="hidden fixed inset-0 "></div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

