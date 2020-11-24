<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KasKeluar;
use Carbon\Carbon;

class KasKeluarController extends Controller
{
    public function addKasKeluar(Request $request){
        // echo "tess"; die;
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<prev>"; print_r($data); die;
            $kas_keluar = new KasKeluar;
            $kas_keluar->keterangan = $data['keterangan'];
            $kas_keluar->tanggal_masuk = $data['tanggal_masuk'];
            $kas_keluar->jumlah = $data['jumlah'];
            $kas_keluar->save();
            return redirect('/admin/view-kasKeluar')->with('flash_message_success','Kas Keluar berhasil ditambah');
        }
        return view('kas_keluar.add_kas');

        // return view('admin.dashboard');
    }

   

    public function editKasKeluar(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            KasKeluar::where(['id'=>$id])->update(['keterangan'=>$data['keterangan'],'tanggal_masuk'=>$data['tanggal_masuk'],'jumlah'=>$data['jumlah']]);
            return redirect('/admin/view-kasKeluar')->with('flash_message_success','Kas keluar berhasil di update');
        }
        $kas_keluar_details = KasKeluar::where(['id' => $id])->first();
        return view('kas_keluar.edit_kasKeluar')->with(compact('kas_keluar_details'));
    }

    public function deleteKaskeluar($id = null){
        if(!empty($id)){
            KasKeluar::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Data Kas Keluar berhasil di hapus');
        }
    }

    public function tampilKasKeluar(Request $request){
        $kas_keluar = KasKeluar::get();
        $kas_keluar = json_decode(json_encode($kas_keluar));
        $no =1;
        $total = KasKeluar::sum('jumlah');
       
        return view('kas_keluar.tampilKasKeluar')->with(compact('kas_keluar','total','no'));
        
    }

   
}
