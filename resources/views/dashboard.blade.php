@extends('layouts.auth')

@section('content')
<div class="container mx-auto px-4 py-6 lg:ml-64">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 mb-6">
        <h2 class="text-2xl font-semibold text-amber-900">Dashboard</h2>
        <p class="text-gray-700">Selamat datang, <span class="font-bold text-amber-700">{{ $username }}</span>!</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($locations as $location)
        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
            <div class="h-48 bg-gray-200">
                <img src="{{ $location['image'] }}" alt="{{ $location['location'] }}" class="w-full h-full object-cover">
            </div>

            <div class="p-4 sm:p-6">
                <h3 class="text-lg sm:text-xl font-semibold text-amber-800 mb-2">{{ $location['location'] }}</h3>
                <p class="text-gray-600 text-sm sm:text-base">{{ $location['description'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
