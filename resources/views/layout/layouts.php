<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hotel Nusantara')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0a0a0a;
            color: #f4f4f5;
            font-family: 'Inter', sans-serif;
        }
        .gold-glow {
            box-shadow: 0 0 15px rgba(234, 179, 8, 0.2);
        }
        .gold-border {
            border-color: #eab308;
        }
    </style>
</head>
<body class="pb-24 pt-4 min-h-screen flex flex-col justify-between">
    <header class="px-6 py-4 bg-zinc-900/80 backdrop-blur sticky top-0 z-40 border-b border-zinc-800 flex justify-between items-center">
        <div>
            <h1 class="text-xl font-bold text-yellow-500 tracking-wider">HOTEL NUSANTARA</h1>
            <p class="text-xs text-zinc-400">Kemewahan & Kenyamanan Terbaik</p>
        </div>
        <div class="flex items-center space-x-2">
            <span class="inline-block w-2.5 h-2.5 bg-green-500 rounded-full animate-pulse"></span>
            <span class="text-xs text-zinc-300">Live Booking</span>
        </div>
    </header>
    
    <main class="px-4 py-6 max-w-4xl mx-auto w-full">
        @yield('content')
    </main>

    <!-- Include Modal QRIS -->
    @include('components.qris-modal')

    <!-- Bottom Navigation Bar -->
    <nav class="fixed bottom-0 left-0 right-0 bg-zinc-900 border-t border-zinc-800 z-40 px-4 py-2">
        <div class="max-w-md mx-auto flex justify-around items-center">
            <a href="{{ route('home') }}" class="flex flex-col items-center p-2 {{ request()->routeIs('home') ? 'text-yellow-500' : 'text-zinc-500 hover:text-zinc-300' }}">
                <i class="fas fa-home text-lg"></i>
                <span class="text-[10px] mt-1">Home</span>
            </a>
            <a href="{{ route('kamar') }}" class="flex flex-col items-center p-2 {{ request()->routeIs('kamar') ? 'text-yellow-500' : 'text-zinc-500 hover:text-zinc-300' }}">
                <i class="fas fa-bed text-lg"></i>
                <span class="text-[10px] mt-1">Kamar</span>
            </a>
            <a href="{{ route('pesan') }}" class="flex flex-col items-center p-2 {{ request()->routeIs('pesan') ? 'text-yellow-500' : 'text-zinc-500 hover:text-zinc-300' }}">
                <i class="fas fa-concierge-bell text-lg"></i>
                <span class="text-[10px] mt-1">Pesan</span>
            </a>
            <a href="{{ route('about') }}" class="flex flex-col items-center p-2 {{ request()->routeIs('about') ? 'text-yellow-500' : 'text-zinc-500 hover:text-zinc-300' }}">
                <i class="fas fa-info-circle text-lg"></i>
                <span class="text-[10px] mt-1">About</span>
            </a>
            <a href="{{ route('profile') }}" class="flex flex-col items-center p-2 {{ request()->routeIs('profile') ? 'text-yellow-500' : 'text-zinc-500 hover:text-zinc-300' }}">
                <i class="fas fa-user text-lg"></i>
                <span class="text-[10px] mt-1">Profile</span>
            </a>
        </div>
    </nav>

    @stack('scripts')
</body>
</html>v