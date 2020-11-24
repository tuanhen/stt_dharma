<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\KasMasuk;
use App\KasKeluar;
use App\Absensi;
use App\IuranAnggota;
use Carbon\Carbon;
use PDF;

class laporanController extends Controller
{
    public function tampilLaporan(Request $request)
    {
        $kas_masuk = KasMasuk::get();
        $no =1;
        $kas_masuk = json_decode(json_encode($kas_masuk));
        $total1 = KasMasuk::sum('jumlah');
        $total2 = KasKeluar::sum('jumlah');
        $subtotal = $total1 - $total2;
        return view('laporan.viewLaporan')->with(compact('kas_masuk','total1','total2','subtotal','no'));
    }
    
    // public function invoicePdf($laporan)
    // {
    //     //MENGAMBIL DATA TRANSAKSI BERDASARKAN INVOICE
    //     $kas_masuk = KasMasuk::where('invoice', $invoice)
    //             ->with('customer', 'order_detail', 'order_detail.product')->first();
    //     //SET CONFIG PDF MENGGUNAKAN FONT SANS-SERIF
    //     //DENGAN ME-LOAD VIEW INVOICE.BLADE.PHP
    //     $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])
    //         ->loadView('orders.report.invoice', compact('order'));
    //     return $pdf->stream();
    // }

    public function export_pdf()
    {
        // Fetch all kas_masuk from database
        $data = KasMasuk::get();
        $total1 = KasMasuk::sum('jumlah');
        $no = 1;
        // echo "<pre>"; print_r($data); die;
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('laporan.kasMasuk', compact('data','no','total1'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->stream();
    }

    public function export_pdf_kasAnggota()
    {
        // Fetch all kas_masuk from database
        $data = IuranAnggota::get();
        $total1 = IuranAnggota::sum('jumlah_iuran');
        $no = 1;
        // echo "<pre>"; print_r($data); die;
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('laporan.kasAnggota', compact('data','no','total1'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->stream();
    }

    public function export_pdf_kasKeluar()
    {
        // Fetch all kas keluar from database
        $data = KasKeluar::get();
        $total2 = KasKeluar::sum('jumlah');
        $no = 1;
        // echo "<pre>"; print_r($data); die;
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('laporan.kasKeluar', compact('data','no','total2'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->stream();
    }

    public function export_pdf_Saldo()
    {
        // Fetch all kas keluar from database
        $kas_masuk = KasMasuk::get();
        $kas_anggota = IuranAnggota::get();
        $kas_keluar = KasKeluar::get();
        $no =1;
        $kas_masuk = json_decode(json_encode($kas_masuk));
        $kas_anggota = json_decode(json_encode($kas_anggota));
        $kas_keluar = json_decode(json_encode($kas_keluar));
        $total1 = KasMasuk::sum('jumlah');
        $total2 = KasKeluar::sum('jumlah');
        $total3 = IuranAnggota::sum('jumlah_iuran');
        $subtotal = ($total1 + $total3) - $total2;
        // echo "<pre>"; print_r($data); die;
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('laporan.saldo', compact('kas_masuk','kas_keluar','total1','no','total2','subtotal','total3'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->stream();
    }

    public function export_pdf_absensi()
    {
        $absen = Absensi::get();
        $absen = json_decode(json_encode($absen));
        foreach($absen as $key => $val){
            $users_name = User::where(['id'=>$val->user_id])->first();
            $absen[$key]->name = $users_name->name;
        }
        // Fetch all kas_masuk from database
        
        $no = 1;
        // echo "<pre>"; print_r($data); die;
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('laporan.absensi', compact('absen','no'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->stream();
    }

    public function export_pdf_users()
    {
        $users = User::get();
        $no = 1;
        $totalUsers = User::count();
        $users = json_decode(json_encode($users));
        $no = 1;
        // echo "<pre>"; print_r($data); die;
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('laporan.users', compact('users','no','totalUsers'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->stream();
    }


}
