<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        return view('pemesanan.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nomor_identitas' => 'required|digits:16',
            'tipe_kamar' => 'required|in:Standar,Deluxe,Family',
            'tanggal_pesan' => 'required|date',
            'durasi_menginap' => 'required|integer|min:1',
        ], [
            'nomor_identitas.digits' => 'isian salah..data harus 16 digit',
            'durasi_menginap.integer' => 'harus isi angka',
            'durasi_menginap.min' => 'harus isi angka',
        ]);

        $hargaKamar = 0;
        if ($request->tipe_kamar == 'Standar') {
            $hargaKamar = 5000000;
        } elseif ($request->tipe_kamar == 'Deluxe') {
            $hargaKamar = 20000000;
        } elseif ($request->tipe_kamar == 'Family') {
            $hargaKamar = 60000000;
        }

        $durasi = (int) $request->durasi_menginap;
        $subtotal = $hargaKamar * $durasi;

        $diskon = 0;
        if ($durasi > 3) {
            $diskon = 0.10 * $subtotal;
        }

        $biayaBreakfast = $request->has('termasuk_breakfast') ? 80000 : 0;
        $totalBayar = ($subtotal - $diskon) + $biayaBreakfast;

        Pemesanan::create([
            'nama_pemesan' => $request->nama_pemesan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_identitas' => $request->nomor_identitas,
            'tipe_kamar' => $request->tipe_kamar,
            'harga' => $hargaKamar,
            'tanggal_pesan' => $request->tanggal_pesan,
            'durasi_menginap' => $durasi,
            'termasuk_breakfast' => $request->has('termasuk_breakfast') ? 1 : 0,
            'total_bayar' => $totalBayar,
        ]);

        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan kamar berhasil disimpan ke database!');
    }
}