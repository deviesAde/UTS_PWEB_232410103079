<div class="bg-white rounded-lg shadow-lg overflow-hidden p-6 sm:p-8 max-w-4xl mx-auto flex flex-col sm:flex-row items-center gap-6 transition-all duration-300 hover:shadow-xl">


    <div class="flex-shrink-0">
        <div class="h-32 w-32 sm:h-40 sm:w-40 rounded-full bg-amber-100 flex items-center justify-center text-amber-800 ring-4 ring-amber-200/50">
            <x-rpg-hood class="h-16 w-16 sm:h-20 sm:w-20 text-amber-800" />
        </div>
    </div>


    <div class="flex-grow">
        <div class="mb-6">
            <h1 class="text-2xl sm:text-3xl font-bold text-stone-800 mb-2">Welcome, <span class="text-amber-700">{{ $username }}</span></h1>
            <p class="text-stone-600 text-sm sm:text-base">This is your profile page. Manage your account and view your activity here.</p>
        </div>

        <!-- Account Information -->
        <div class="bg-amber-50 rounded-lg p-4 sm:p-6 border border-amber-200">
            <h2 class="text-lg font-semibold text-stone-800 mb-4 pb-2 border-b border-amber-200">Account Information</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-white p-3 rounded-lg shadow-sm border border-amber-100">
                    <p class="text-sm text-stone-600">Member since</p>
                    <p class="text-stone-800 font-medium text-base">{{ date('F Y') }}</p>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm border border-amber-100">
                    <p class="text-sm text-stone-600">Last active</p>
                    <p class="text-stone-800 font-medium text-base">Today</p>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm border border-amber-100">
                    <p class="text-sm text-stone-600">Status</p>
                    <p class="text-amber-700 font-medium text-base">Active</p>
                </div>
            </div>
        </div>
    </div>
</div>
