
<div id="qrisModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 flex items-center justify-center p-4 ">
    <div class="bg-zinc-900 border border-yellow-500/50 rounded-2xl p-6 max-w-sm w-full space-y-4 text-center relative shadow-2xl">
        <button onclick="closeQrisModal()" class="absolute top-3 right-3 text-zinc-400 hover:text-white">
            <i class="fas fa-times text-lg"></i>
        </button>

        <div class="space-y-1">
            <h3 class="text-lg font-bold text-yellow-500">Scan QRIS Hotel</h3>
            <p class="text-xs text-zinc-400">Gunakan BCA, Mandiri, GoPay, OVO, ShopeePay, atau QRIS Bank APapun</p>
        </div>

        <div class="bg-white p-4 rounded-xl inline-block mx-auto border-2 border-yellow-500">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=00020101021226680016ID.CO.HOTELNUSANTARA.WWW01189360091400000000005204599953033605802ID5915HOTEL NUSANTARA6007BALI6304ABCD" 
                 alt="QRIS Hotel Nusantara" class="w-48 h-48 mx-auto">
            <p class="text-[10px] text-zinc-800 font-bold mt-2">NMID: ID1020304050607</p>
        </div>

        <div class="bg-zinc-950 p-3 rounded-lg border border-zinc-800 text-left space-y-1">
            <div class="flex justify-between text-xs">
                <span class="text-zinc-400">Tamu:</span>
                <span id="modalGuest" class="font-semibold text-zinc-200">-</span>
            </div>
            <div class="flex justify-between text-xs">
                <span class="text-zinc-400">Total Tagihan:</span>
                <span id="modalAmount" class="font-bold text-yellow-500">Rp 0</span>
            </div>
        </div>

        <button onclick="simulasiPembayaran()" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2.5 rounded-lg text-xs transition flex items-center justify-center space-x-2">
            <i class="fas fa-check-circle"></i>
            <span>Simulasi Pembayaran Selesai</span>
        </button>
    </div>
</div>

<script>
    function closeQrisModal() {
        document.getElementById('qrisModal').classList.add('hidden');
    }

    function simulasiPembayaran() {
        alert('Pembayaran Berhasil! Voucher booking telah dikirim ke akun Anda.');
        closeQrisModal();
        window.location.href = "{{ route('home') }}";
    }
</script>