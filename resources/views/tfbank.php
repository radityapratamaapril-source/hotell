>
<div id="bank-info-card" class="hidden glass-card p-5 rounded-2xl border border-emerald-500/30 space-y-4">
    <div class="flex items-center justify-between border-b border-white/10 pb-3">
        <h4 class="text-xs font-bold text-emerald-400 uppercase flex items-center gap-2">
            <i class="fa-solid fa-building-columns"></i> Rekening Pembayaran Bank
        </h4>
        <span class="text-[10px] bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 px-2 py-0.5 rounded-full font-semibold">
            Konfirmasi Manual
        </span>
    </div>

    <div class="space-y-2.5 text-xs">
        <div class="bg-dark-900/80 p-3 rounded-xl border border-white/5 flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-[10px] uppercase">Bank BCA</p>
                <p class="font-bold text-white text-sm select-all tracking-wider">8830-1928-33</p>
            </div>
            <button type="button" onclick="copyToClipboard('8830192833')" class="px-2.5 py-1 text-[11px] bg-dark-700 hover:bg-gold-500 hover:text-black text-gray-300 rounded-lg transition">
                <i class="fa-regular fa-copy"></i> Salin
            </button>
        </div>

        <div class="bg-dark-900/80 p-3 rounded-xl border border-white/5 flex items-center justify-between">
            <div>
                <p class="text-gray-400 text-[10px] uppercase">Bank Mandiri</p>
                <p class="font-bold text-white text-sm select-all tracking-wider">137-000-888-99</p>
            </div>
            <button type="button" onclick="copyToClipboard('13700088899')" class="px-2.5 py-1 text-[11px] bg-dark-700 hover:bg-gold-500 hover:text-black text-gray-300 rounded-lg transition">
                <i class="fa-regular fa-copy"></i> Salin
            </button>
        </div>

        <div class="text-[11px] text-gray-400 pt-1 flex items-center justify-between">
            <span>Atas Nama:</span>
            <span class="font-semibold text-white">PT Hotel Nusantara Indonesia</span>
        </div>
    </div>

    <div class="bg-emerald-950/30 p-3 rounded-xl border border-emerald-500/20 text-[11px] text-emerald-200/80 space-y-1">
        <p class="font-semibold text-emerald-400"><i class="fa-solid fa-circle-info"></i> Petunjuk Pembayaran:</p>
        <ol class="list-decimal list-inside space-y-0.5 text-gray-300">
            <li>Transfer sesuai total tagihan ke salah satu rekening di atas.</li>
            <li>Klik tombol <strong>"Konfirmasi Via WhatsApp"</strong>.</li>
            <li>Kirim bukti transfer ke WhatsApp Admin Hotel.</li>
        </ol>
    </div>
</div>