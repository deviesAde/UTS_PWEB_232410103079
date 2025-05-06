<div class="container mx-auto px-4 py-8 lg:ml-64">
    <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold text-stone-800 mb-1">Welcome,
                    <span class="text-amber-600">{{ $username }}</span>
                </h1>
                <h2 class="text-xl sm:text-2xl font-semibold text-amber-800">Pengelolaan Hewan</h2>
                <p class="text-gray-600 mt-2 text-sm sm:text-base">Berikut adalah daftar hewan yang dikelola di kebun binatang kami</p>
            </div>
            <div class="bg-amber-50 border border-amber-100 rounded-lg p-3 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600 mr-2 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                </svg>
                <span class="text-amber-800 font-medium text-sm sm:text-base">{{ count($dataHewan) }} Jenis Hewan</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-amber-700">
                <tr>
                    <th class="py-4 px-4 sm:px-6 text-left text-white font-semibold uppercase text-sm tracking-wider">Nama Hewan</th>
                    <th class="py-4 px-4 sm:px-6 text-left text-white font-semibold uppercase text-sm tracking-wider">Asal</th>
                    <th class="py-4 px-4 sm:px-6 text-left text-white font-semibold uppercase text-sm tracking-wider">Jumlah</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($dataHewan as $hewan)
                <tr class="hover:bg-amber-50 transition-colors duration-150">
                    <td class="py-4 px-4 sm:px-6 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-amber-100 flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-gray-900">{{ $hewan['nama'] }}</div>
                        </div>
                    </td>
                    <td class="py-4 px-4 sm:px-6 whitespace-nowrap text-sm text-gray-700">{{ $hewan['asal'] }}</td>
                    <td class="py-4 px-4 sm:px-6 whitespace-nowrap">
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-amber-800">
                            {{ $hewan['jumlah'] }} ekor
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
