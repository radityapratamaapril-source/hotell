<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hotel Nusantara - Kemewahan & Kenyamanan Terbaik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: { 400: '#facc15', 500: '#eab308', 600: '#ca8a04', 700: '#a16207' },
                        dark: { 900: '#0b0b0e', 800: '#121217', 700: '#1c1c24', 600: '#282836' }
                    },
                    fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b0b0e; color: #f3f4f6; -webkit-tap-highlight-color: transparent; }
        .gold-gradient-text { background: linear-gradient(135deg, #fef08a 0%, #eab308 50%, #ca8a04 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .gold-gradient-bg { background: linear-gradient(135deg, #facc15 0%, #eab308 50%, #ca8a04 100%); }
        .glass-card { background: rgba(28, 28, 36, 0.7); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.08); }
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #0b0b0e; }
        ::-webkit-scrollbar-thumb { background: #282836; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #eab308; }
    </style>
</head>
<body class="pb-24 pt-16 min-h-screen flex flex-col justify-between selection:bg-gold-500 selection:text-black">
    <header class="fixed top-0 left-0 right-0 z-40 bg-dark-900/90 backdrop-blur-md border-b border-white/10 px-4 py-3">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="javascript:void(0)" onclick="switchTab('home')" class="flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-xl gold-gradient-bg flex items-center justify-center text-black font-extrabold text-xl shadow-lg shadow-gold-500/20 group-hover:scale-105 transition">N</div>
                <div>
                    <h1 class="text-lg font-bold tracking-tight text-white group-hover:text-gold-400 transition">HOTEL NUSANTARA</h1>
                    <p class="text-[10px] text-gray-400 tracking-wider -mt-1 uppercase">Luxury Stay Experience</p>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-6 text-sm font-medium">
                <button onclick="switchTab('home')" class="nav-btn text-gold-400 hover:text-gold-400 transition flex items-center gap-2" data-tab="home">
                    <i class="fa-solid fa-house text-xs"></i> Beranda
                </button>
                <button onclick="switchTab('kamar')" class="nav-btn text-gray-400 hover:text-gold-400 transition flex items-center gap-2" data-tab="kamar">
                    <i class="fa-solid fa-bed text-xs"></i> Kamar & Suite
                </button>
                <button onclick="switchTab('pesan')" class="nav-btn text-gray-400 hover:text-gold-400 transition flex items-center gap-2" data-tab="pesan">
                    <i class="fa-solid fa-calendar-check text-xs"></i> Pesan Sekarang
                </button>
            </div>

            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-gold-500/10 text-gold-400 border border-gold-500/30">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Laravel Connected
                </span>
                <button onclick="switchTab('pesan')" class="hidden sm:inline-flex items-center justify-center px-4 py-2 rounded-xl gold-gradient-bg text-black font-semibold text-xs hover:opacity-90 transition shadow-lg shadow-gold-500/20">Booking Instant</button>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 w-full flex-grow py-4">
        <section id="tab-home" class="tab-content space-y-10">
            <div class="relative rounded-3xl overflow-hidden border border-white/10 glass-card p-6 md:p-12 min-h-[420px] flex flex-col justify-end">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1600&q=80" alt="Luxury Hotel" class="w-full h-full object-cover opacity-35">
                    <div class="absolute inset-0 bg-gradient from-dark-900 via-dark-900/60 to-transparent"></div>
                </div>
                <div class="relative z-10 max-w-2xl space-y-4">
                    <span class="px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase bg-gold-500/20 text-gold-400 border border-gold-500/40">Eksklusif & Elegan</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold tracking-tight text-white leading-tight">Temukan Kemewahan & <span class="gold-gradient-text">Kenyamanan Terbaik</span></h2>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed">Nikmati pengalaman menginap bintang lima di lokasi terstrategis seluruh Indonesia dengan fasilitas premium dan reservasi kilat melalui QRIS atau WhatsApp.</p>
                    <div class="flex flex-wrap items-center gap-3 pt-2">
                        <button onclick="switchTab('pesan')" class="px-6 py-3 rounded-xl gold-gradient-bg text-black font-bold text-sm hover:scale-105 transition shadow-lg shadow-gold-500/20 flex items-center gap-2">
                            <i class="fa-solid fa-bolt"></i> Pesan Kamar Sekarang
                        </button>
                        <button onclick="switchTab('kamar')" class="px-6 py-3 rounded-xl bg-dark-700/80 hover:bg-dark-600 text-white font-semibold text-sm border border-white/10 transition flex items-center gap-2">
                            <i class="fa-solid fa-eye"></i> Lihat Tipe Kamar
                        </button>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-white flex items-center gap-2">
                            <span class="w-2 h-6 rounded-full gold-gradient-bg inline-block"></span> Pilihan Tipe Kamar
                        </h3>
                        <p class="text-xs text-gray-400 mt-1">Pilih suite elegan yang dirancang khusus untuk kenyamanan maksimal Anda.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    <div class="glass-card rounded-2xl overflow-hidden border border-white/10 flex flex-col group hover:border-gold-500/50 transition">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Standard Room">
                            <span class="absolute top-3 right-3 bg-dark-900/80 backdrop-blur-md border border-white/10 text-white text-xs font-bold px-3 py-1 rounded-full">Rp 450.000 / hari</span>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <div>
                                <h4 class="text-base font-bold text-white group-hover:text-gold-400 transition">Standard Room</h4>
                                <p class="text-xs text-gray-400 mt-1 line-clamp-2">Kamar minimalis modern dengan tempat tidur queen & Wi-Fi cepat.</p>
                            </div>
                            <button onclick="quickBook('Standard Room', 450000)" class="w-full py-2 rounded-xl bg-dark-700 hover:gold-gradient-bg hover:text-black text-white font-semibold text-xs border border-white/10 transition">Pesan Sekarang</button>
                        </div>
                    </div>

                    <div class="glass-card rounded-2xl overflow-hidden border border-white/10 flex flex-col group hover:border-gold-500/50 transition">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Deluxe Suite">
                            <span class="absolute top-3 right-3 bg-dark-900/80 backdrop-blur-md border border-white/10 text-white text-xs font-bold px-3 py-1 rounded-full">Rp 1.500.000 / hari</span>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <div>
                                <h4 class="text-base font-bold text-white group-hover:text-gold-400 transition">Deluxe Suite</h4>
                                <p class="text-xs text-gray-400 mt-1 line-clamp-2">Smart TV 55 inch, tempat tidur King Size, dan bathtub eksklusif.</p>
                            </div>
                            <button onclick="quickBook('Deluxe Suite', 1500000)" class="w-full py-2 rounded-xl bg-dark-700 hover:gold-gradient-bg hover:text-black text-white font-semibold text-xs border border-white/10 transition">Pesan Sekarang</button>
                        </div>
                    </div>

                    <div class="glass-card rounded-2xl overflow-hidden border border-white/10 flex flex-col group hover:border-gold-500/50 transition">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Executive Suite">
                            <span class="absolute top-3 right-3 bg-dark-900/80 backdrop-blur-md border border-white/10 text-white text-xs font-bold px-3 py-1 rounded-full">Rp 4.000.000 / hari</span>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <div>
                                <h4 class="text-base font-bold text-white group-hover:text-gold-400 transition">Executive Suite</h4>
                                <p class="text-xs text-gray-400 mt-1 line-clamp-2">Akses Executive Lounge gratis, balkon pribadi, & Butler 24/7.</p>
                            </div>
                            <button onclick="quickBook('Executive Suite', 4000000)" class="w-full py-2 rounded-xl bg-dark-700 hover:gold-gradient-bg hover:text-black text-white font-semibold text-xs border border-white/10 transition">Pesan Sekarang</button>
                        </div>
                    </div>

                    <div class="glass-card rounded-2xl overflow-hidden border border-gold-500/30 flex flex-col group hover:border-gold-500 transition relative">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Presidential Penthouse">
                            <span class="absolute top-3 right-3 bg-dark-900/80 backdrop-blur-md border border-gold-500/50 text-gold-400 text-xs font-bold px-3 py-1 rounded-full">Rp 12.000.000 / hari</span>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <div>
                                <h4 class="text-base font-bold text-gold-400 group-hover:text-gold-300 transition">Presidential Penthouse</h4>
                                <p class="text-xs text-gray-400 mt-1 line-clamp-2">Lantai teratas pribadi, kolam renang rooftop, & ruang makan mewah.</p>
                            </div>
                            <button onclick="quickBook('Presidential Penthouse', 12000000)" class="w-full py-2 rounded-xl gold-gradient-bg text-black font-extrabold text-xs hover:opacity-90 transition">Pesan Penthouse</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="tab-pesan" class="tab-content hidden space-y-6">
            <div class="border-b border-white/10 pb-4">
                <h2 class="text-2xl font-bold text-gold-400">Pemesanan Kamar</h2>
                <p class="text-xs text-gray-400 mt-1">Isi form di bawah ini untuk memesan kamar secara instan via QRIS atau Transfer via WhatsApp.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 glass-card p-6 rounded-2xl border border-white/10 space-y-5">
                    <form id="booking-form" onsubmit="handleBookingSubmit(event)">
                        <input type="hidden" id="form-room-type" name="room_type" value="Standard Room">
                        <input type="hidden" id="form-price-per-day" name="price_per_day" value="450000">
                        <input type="hidden" id="form-payment-method" name="payment_method" value="QRIS">
                        <div class="mb-4">
                            <label for="guest-name" class="block text-xs font-bold text-gray-300 uppercase tracking-wider mb-2">Nama Lengkap Tamu</label>
                            <input type="text" id="guest-name" name="guest_name" required placeholder="Masukkan nama Anda" class="w-full bg-dark-900 border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-gold-500 transition">
                        </div>

                        <div class="mb-4">
                            <label for="hotel-branch" class="block text-xs font-bold text-gray-300 uppercase tracking-wider mb-2">Pilih Cabang Hotel di Indonesia</label>
                            <select id="hotel-branch" name="hotel_branch" class="w-full bg-dark-900 border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-gold-500 transition">
                                <option value="Hotel Nusantara Bali (Kuta)">Hotel Nusantara Bali (Kuta)</option>
                                <option value="Hotel Nusantara Jakarta (MH Thamrin)">Hotel Nusantara Jakarta (MH Thamrin)</option>
                                <option value="Hotel Nusantara Yogyakarta (Malioboro)">Hotel Nusantara Yogyakarta (Malioboro)</option>
                                <option value="Hotel Nusantara Bandung (Dago)">Hotel Nusantara Bandung (Dago)</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="room-number" class="block text-xs font-bold text-gray-300 uppercase tracking-wider mb-2">Preferensi Nomor Kamar</label>
                                <input type="text" id="room-number" name="room_number" placeholder="Contoh: 105 / Lantai Tinggi" class="w-full bg-dark-900 border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-gold-500 transition">
                            </div>
                            <div>
                                <label for="stay-duration" class="block text-xs font-bold text-gray-300 uppercase tracking-wider mb-2">Jumlah Hari Menginap</label>
                                <input type="number" id="stay-duration" name="stay_duration" min="1" max="30" value="1" oninput="calculateTotal()" class="w-full bg-dark-900 border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-gold-500 transition">
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="block text-xs font-bold text-gray-300 uppercase tracking-wider mb-2">Pilih Tipe Kamar</label>
                            <div class="space-y-2.5">
                                <label onclick="selectRoomType('Standard Room', 450000)" class="room-option flex items-center justify-between p-3.5 rounded-xl bg-dark-900 border border-gold-500 cursor-pointer hover:border-gold-500 transition">
                                    <div class="flex items-center gap-3">
                                        <input type="radio" name="room_radio" value="Standard Room" checked class="accent-gold-500">
                                        <span class="text-sm font-semibold text-white">Standard Room</span>
                                    </div>
                                    <span class="text-xs font-bold text-gold-400">Rp 450.000 / hari</span>
                                </label>

                                <label onclick="selectRoomType('Deluxe Suite', 1500000)" class="room-option flex items-center justify-between p-3.5 rounded-xl bg-dark-900 border border-white/10 cursor-pointer hover:border-gold-500 transition">
                                    <div class="flex items-center gap-3">
                                        <input type="radio" name="room_radio" value="Deluxe Suite" class="accent-gold-500">
                                        <span class="text-sm font-semibold text-white">Deluxe Suite</span>
                                    </div>
                                    <span class="text-xs font-bold text-gold-400">Rp 1.500.000 / hari</span>
                                </label>

                                <label onclick="selectRoomType('Executive Suite', 4000000)" class="room-option flex items-center justify-between p-3.5 rounded-xl bg-dark-900 border border-white/10 cursor-pointer hover:border-gold-500 transition">
                                    <div class="flex items-center gap-3">
                                        <input type="radio" name="room_radio" value="Executive Suite" class="accent-gold-500">
                                        <span class="text-sm font-semibold text-white">Executive Suite</span>
                                    </div>
                                    <span class="text-xs font-bold text-gold-400">Rp 4.000.000 / hari</span>
                                </label>

                                <label onclick="selectRoomType('Presidential Penthouse', 12000000)" class="room-option flex items-center justify-between p-3.5 rounded-xl bg-dark-900 border border-white/10 cursor-pointer hover:border-gold-500 transition">
                                    <div class="flex items-center gap-3">
                                        <input type="radio" name="room_radio" value="Presidential Penthouse" class="accent-gold-500">
                                        <span class="text-sm font-semibold text-white">Presidential Penthouse</span>
                                    </div>
                                    <span class="text-xs font-bold text-gold-400">Rp 12.000.000 / hari</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs font-bold text-gray-300 uppercase tracking-wider mb-2">Metode Pembayaran</label>
                            <div class="grid grid-cols-2 gap-3">
                                <button type="button" onclick="setPaymentMethod('QRIS')" id="btn-pay-qris" class="p-3 rounded-xl bg-dark-900 border-2 border-gold-500 text-gold-400 font-bold text-xs flex items-center justify-center gap-2 transition">
                                    <i class="fa-solid fa-qrcode text-base"></i> QRIS (Scan Instan)
                                </button>
                                <button type="button" onclick="setPaymentMethod('Transfer Bank')" id="btn-pay-bank" class="p-3 rounded-xl bg-dark-900 border border-white/10 text-gray-400 font-bold text-xs flex items-center justify-center gap-2 hover:border-gold-500/50 transition">
                                    <i class="fa-brands fa-whatsapp text-base"></i> Transfer Bank (Konfirmasi WA)
                                </button>
                            </div>
                        </div>

                        <button type="submit" id="submit-btn" class="w-full py-3.5 rounded-xl gold-gradient-bg text-black font-extrabold text-sm hover:opacity-95 transition shadow-lg shadow-gold-500/20 flex items-center justify-center gap-2">
                            <span id="btn-action-text">Konfirmasi & Bayar</span> (<span id="btn-total-text">Rp 450.000</span>)
                        </button>
                    </form>
                </div>

                <div class="space-y-4">
                    <div class="glass-card p-5 rounded-2xl border border-gold-500/30 space-y-4">
                        <h3 class="text-xs font-extrabold tracking-widest text-gold-400 uppercase border-b border-white/10 pb-3">RINGKASAN PEMBAYARAN</h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex justify-between items-center text-gray-300"><span class="text-xs">Tipe Kamar:</span><span id="summary-room-name" class="font-bold text-white">Standard Room</span></div>
                            <div class="flex justify-between items-center text-gray-300"><span class="text-xs">Harga per Hari:</span><span id="summary-price-per-day" class="text-gray-200">Rp 450.000</span></div>
                            <div class="flex justify-between items-center text-gray-300"><span class="text-xs">Durasi:</span><span id="summary-duration" class="font-semibold text-white">1 Hari</span></div>
                            <div class="flex justify-between items-center text-gray-300"><span class="text-xs">Metode Bayar:</span><span id="summary-payment-method" class="font-bold text-gold-400">QRIS</span></div>
                            <div class="border-t border-white/10 pt-3 flex justify-between items-center"><span class="text-xs font-bold text-gray-300">Total Biaya:</span><span id="summary-total-cost" class="text-lg font-extrabold text-gold-400">Rp 450.000</span></div>
                        </div>
                    </div>
                    
                    <div id="bank-info-card" class="hidden glass-card p-5 rounded-2xl border border-emerald-500/30 space-y-3">
                        <h4 class="text-xs font-bold text-emerald-400 uppercase flex items-center gap-2">
                            <i class="fa-solid fa-building-columns"></i> Rekening Pembayaran Bank
                        </h4>
                        <div class="space-y-2 text-xs">
                            <div class="bg-dark-900/80 p-2.5 rounded-lg border border-white/5 flex items-center justify-between">
                                <div>
                                    <p class="text-gray-400 text-[10px]">BCA</p>
                                    <p class="font-bold text-white select-all">8830-1928-33</p>
                                </div>
                                <button type="button" onclick="copyToClipboard('8830192833')" class="px-2 py-1 text-[10px] bg-dark-700 hover:bg-gold-500 hover:text-black text-gray-300 rounded transition">Salin</button>
                            </div>
                            <div class="bg-dark-900/80 p-2.5 rounded-lg border border-white/5 flex items-center justify-between">
                                <div>
                                    <p class="text-gray-400 text-[10px]">Mandiri</p>
                                    <p class="font-bold text-white select-all">137-000-888-99</p>
                                </div>
                                <button type="button" onclick="copyToClipboard('13700088899')" class="px-2 py-1 text-[10px] bg-dark-700 hover:bg-gold-500 hover:text-black text-gray-300 rounded transition">Salin</button>
                            </div>
                        </div>
                        <p class="text-[11px] text-gray-400">a/n PT Hotel Nusantara Indonesia</p>
                        <p class="text-[11px] text-emerald-300 border-t border-white/10 pt-2 flex items-center gap-1">
                            <i class="fa-brands fa-whatsapp text-sm"></i> Admin WA: <span class="font-bold">082298648028</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="tab-kamar" class="tab-content hidden space-y-6">
            <div class="border-b border-white/10 pb-4">
                <h2 class="text-2xl font-bold text-gold-400">Katalog Kamar & Suite Luxury</h2>
                <p class="text-xs text-gray-400 mt-1">Daftar lengkap akomodasi mewah dengan standar kebersihan & fasilitas internasional.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="glass-card rounded-2xl overflow-hidden border border-white/10 flex flex-col sm:flex-row">
                    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=600&q=80" class="sm:w-2/5 h-48 sm:h-auto object-cover" alt="Standard Room">
                    <div class="p-5 sm:w-3/5 flex flex-col justify-between space-y-3">
                        <div>
                            <h3 class="text-lg font-bold text-white">Standard Queen Room</h3>
                            <p class="text-xs text-gray-400 mt-1">Desain kontemporer yang nyaman untuk perjalanan bisnis maupun liburan singkat Anda.</p>
                        </div>
                        <button onclick="quickBook('Standard Room', 450000)" class="px-4 py-2 rounded-xl gold-gradient-bg text-black font-bold text-xs hover:opacity-90 transition">Pesan Kamar</button>
                    </div>
                </div>
                <div class="glass-card rounded-2xl overflow-hidden border border-white/10 flex flex-col sm:flex-row">
                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80" class="sm:w-2/5 h-48 sm:h-auto object-cover" alt="Deluxe Suite">
                    <div class="p-5 sm:w-3/5 flex flex-col justify-between space-y-3">
                        <div>
                            <h3 class="text-lg font-bold text-white">Royal Deluxe Suite</h3>
                            <p class="text-xs text-gray-400 mt-1">Suasana hangat nan mewah lengkap dengan pemandangan kota dan bathtub pribadi.</p>
                        </div>
                        <button onclick="quickBook('Deluxe Suite', 1500000)" class="px-4 py-2 rounded-xl gold-gradient-bg text-black font-bold text-xs hover:opacity-90 transition">Pesan Kamar</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="qris-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-md flex-items-center justify-center p-4 hidden">
        <div class="glass-card max-w-sm w-full rounded-3xl p-6 border border-gold-500/40 relative space-y-4 text-center shadow-2xl">
            <button onclick="closeQrisModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white text-lg"><i class="fa-solid fa-xmark"></i></button>
            <div class="flex items-center justify-center gap-2">
                <div class="bg-white px-3 py-1 rounded-md flex items-center"><span class="text-red-600 font-extrabold text-lg tracking-tighter">QRIS</span></div>
            </div>
            <div>
                <h3 class="text-base font-bold text-white">HOTEL NUSANTARA INDONESIA</h3>
                <p class="text-xs text-gold-400 font-medium">NMID: ID1029384756128</p>
            </div>
            <div class="bg-white p-4 rounded-2xl mx-auto w-56 h-56 flex flex-col items-center justify-center shadow-inner relative">
                <div id="qris-container" class="flex items-center justify-center"></div>
            </div>
            <div class="bg-dark-900 p-3 rounded-xl border border-white/10 space-y-1">
                <p class="text-[10px] text-gray-400 uppercase">Total Tagihan Pemesanan</p>
                <p id="qris-modal-amount" class="text-xl font-extrabold text-gold-400">Rp 450.000</p>
                <p class="text-[11px] text-gray-400">Batas Waktu: <span id="qris-timer" class="text-red-400 font-bold">05:00</span></p>
            </div>
            <button onclick="submitBookingToDatabase()" class="w-full py-3 rounded-xl gold-gradient-bg text-black font-extrabold text-xs hover:opacity-90 transition flex items-center justify-center gap-2">
                <i class="fa-solid fa-circle-check"></i> Selesaikan & Simpan Pemesanan
            </button>
        </div>
    </div>

    <div id="toast" class="fixed top-20 right-4 z-50 transform translate-x-full transition-transform duration-300 glass-card px-4 py-3 rounded-xl border border-gold-500/50 shadow-2xl flex items-center gap-3 text-xs text-white max-w-xs">
        <i class="fa-solid fa-circle-info text-gold-400 text-base"></i>
        <span id="toast-msg">Notifikasi</span>
    </div>

    <nav class="fixed bottom-0 left-0 right-0 z-40 bg-dark-900/95 backdrop-blur-xl border-t border-white/10 px-2 py-2 md:hidden">
        <div class="max-w-md mx-auto flex items-center justify-around text-center">
            <button onclick="switchTab('home')" class="bottom-nav-btn flex flex-col items-center py-1 px-3 text-gold-400" data-tab="home">
                <i class="fa-solid fa-house text-base"></i>
                <span class="text-[10px] mt-1">Home</span>
            </button>
            <button onclick="switchTab('kamar')" class="bottom-nav-btn flex flex-col items-center py-1 px-3 text-gray-400" data-tab="kamar">
                <i class="fa-solid fa-bed text-base"></i>
                <span class="text-[10px] mt-1">Kamar</span>
            </button>
            <button onclick="switchTab('pesan')" class="bottom-nav-btn flex flex-col items-center py-1 px-3 text-gray-400" data-tab="pesan">
                <i class="fa-solid fa-calendar-check text-base"></i>
                <span class="text-[10px] mt-1">Pesan</span>
            </button>
        </div>
    </nav>
    <script>
        const WA_ADMIN_NUMBER = "6282298648028"; 

        let selectedRoom = "Standard Room";
        let roomPrice = 450000;
        let paymentMethod = "QRIS";
        let timerInterval = null;

        function formatIDR(amount) {
            return "Rp " + new Intl.NumberFormat('id-ID').format(amount);
        }

        function switchTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            const activeTab = document.getElementById('tab-' + tabId);
            if (activeTab) activeTab.classList.remove('hidden');

            document.querySelectorAll('.nav-btn, .bottom-nav-btn').forEach(btn => {
                if (btn.getAttribute('data-tab') === tabId) {
                    btn.classList.add('text-gold-400');
                    btn.classList.remove('text-gray-400');
                } else {
                    btn.classList.remove('text-gold-400');
                    btn.classList.add('text-gray-400');
                }
            });
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function selectRoomType(name, price) {
            selectedRoom = name;
            roomPrice = price;
            
            document.getElementById('form-room-type').value = name;
            document.getElementById('form-price-per-day').value = price;
            document.getElementById('summary-room-name').innerText = name;
            document.getElementById('summary-price-per-day').innerText = formatIDR(price);

            calculateTotal();
        }

        function quickBook(name, price) {
            selectRoomType(name, price);
            const radioButtons = document.getElementsByName('room_radio');
            for (let radio of radioButtons) {
                if (radio.value === name) radio.checked = true;
            }
            switchTab('pesan');
        }

        function calculateTotal() {
            const duration = parseInt(document.getElementById('stay-duration').value) || 1;
            const total = roomPrice * duration;

            document.getElementById('summary-duration').innerText = duration + " Hari";
            document.getElementById('summary-total-cost').innerText = formatIDR(total);
            document.getElementById('btn-total-text').innerText = formatIDR(total);
        }

        function setPaymentMethod(method) {
            paymentMethod = method;
            document.getElementById('form-payment-method').value = method;
            document.getElementById('summary-payment-method').innerText = method;

            const qrisBtn = document.getElementById('btn-pay-qris');
            const bankBtn = document.getElementById('btn-pay-bank');
            const actionText = document.getElementById('btn-action-text');
            const bankInfoCard = document.getElementById('bank-info-card');

            if (method === 'QRIS') {
                qrisBtn.className = "p-3 rounded-xl bg-dark-900 border-2 border-gold-500 text-gold-400 font-bold text-xs flex items-center justify-center gap-2 transition";
                bankBtn.className = "p-3 rounded-xl bg-dark-900 border border-white/10 text-gray-400 font-bold text-xs flex items-center justify-center gap-2 hover:border-gold-500/50 transition";
                actionText.innerText = "Konfirmasi & Bayar (QRIS)";
                if (bankInfoCard) bankInfoCard.classList.add('hidden');
            } else {
                bankBtn.className = "p-3 rounded-xl bg-dark-900 border-2 border-gold-500 text-gold-400 font-bold text-xs flex items-center justify-center gap-2 transition";
                qrisBtn.className = "p-3 rounded-xl bg-dark-900 border border-white/10 text-gray-400 font-bold text-xs flex items-center justify-center gap-2 hover:border-gold-500/50 transition";
                actionText.innerText = "Konfirmasi Via WhatsApp";
                if (bankInfoCard) bankInfoCard.classList.remove('hidden');
            }
        }

        function handleBookingSubmit(e) {
            e.preventDefault();
            const guestName = document.getElementById('guest-name').value;
            if (!guestName.trim()) {
                showToast("Harap isi nama lengkap Anda.");
                return;
            }

            if (paymentMethod === 'QRIS') {
                openQrisModal();
            } else {
                sendToWhatsApp();
            }
        }

        function sendToWhatsApp() {
            const guestName = document.getElementById('guest-name').value;
            const branch = document.getElementById('hotel-branch').value;
            const roomPref = document.getElementById('room-number').value || "Bebas / Sesuai Ketersediaan";
            const duration = document.getElementById('stay-duration').value;
            const totalCost = document.getElementById('summary-total-cost').innerText;

            const text = `Halo Admin Hotel Nusantara,%0A%0ASaya ingin melakukan konfirmasi pemesanan kamar via Transfer Bank dengan rincian berikut:%0A%0A` +
                `*Nama Tamu:* ${encodeURIComponent(guestName)}%0A` +
                `*Cabang Hotel:* ${encodeURIComponent(branch)}%0A` +
                `*Tipe Kamar:* ${encodeURIComponent(selectedRoom)}%0A` +
                `*Nomor Kamar/Catatan:* ${encodeURIComponent(roomPref)}%0A` +
                `*Durasi Menginap:* ${duration} Hari%0A` +
                `*Total Biaya:* ${encodeURIComponent(totalCost)}%0A` +
                `*Metode Pembayaran:* Transfer Bank%0A%0A` +
                `Mohon dikirimkan nomor rekening dan konfirmasi reservasi saya. Terima kasih!`
                "Segera ya";

            const waUrl = `https://wa.me/${WA_ADMIN_NUMBER}?text=${text}`;
            window.open(waUrl, '_blank');
            showToast("Mengarahkan ke WhatsApp...");
        }

        function openQrisModal() {
            const duration = parseInt(document.getElementById('stay-duration').value) || 1;
            const total = roomPrice * duration;

            document.getElementById('qris-modal-amount').innerText = formatIDR(total);
            const qrisContainer = document.getElementById('qris-container');
            qrisContainer.innerHTML = "";
            const qrisData = `00020101021126580014ID.CO.QRIS.WWW01189360091400000000000215ID10293847561285204581253033605405${total}5802ID5916HOTEL NUSANTARA6013JAKARTA PUSAT6304`;
            
            new QRCode(qrisContainer, {
                text: qrisData,
                width: 180,
                height: 180,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            });

            document.getElementById('qris-modal').classList.remove('hidden');
            startQrisTimer(300); 
        }

        function closeQrisModal() {
            document.getElementById('qris-modal').classList.add('hidden');
            if (timerInterval) clearInterval(timerInterval);
        }

        function startQrisTimer(seconds) {
            let timer = seconds;
            const timerDisplay = document.getElementById('qris-timer');
            if (timerInterval) clearInterval(timerInterval);

            timerInterval = setInterval(() => {
                const minutes = Math.floor(timer / 60);
                const secs = timer % 60;
                timerDisplay.innerText = `${minutes < 10 ? '0' : ''}${minutes}:${secs < 10 ? '0' : ''}${secs}`;

                if (--timer < 0) {
                    clearInterval(timerInterval);
                    closeQrisModal();
                    showToast("Waktu pembayaran QRIS telah habis.");
                }
            }, 1000);
        }

        function submitBookingToDatabase() {
            closeQrisModal();
            showToast("Pemesanan berhasil disimpan!");
            document.getElementById('booking-form').reset();
            calculateTotal();
            switchTab('home');
        }

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text);
            showToast("Nomor rekening berhasil disalin!");
        }

        function showToast(message) {
            const toast = document.getElementById('toast');
            document.getElementById('toast-msg').innerText = message;
            toast.classList.remove('translate-x-full');

            setTimeout(() => {
                toast.classList.add('translate-x-full');
            }, 3000);
        }
    </script>
</body>
</html>