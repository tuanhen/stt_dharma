<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KasMasuk;
use App\KasKeluar;

class KasMasukController extends Controller
{
    public function addKasMasuk(Request $request){
        // echo "tess"; die;
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<prev>"; print_r($data); die;
            $kas_masuk = new KasMasuk;
            $kas_masuk->keterangan = $data['keterangan'];
            $kas_masuk->tanggal_masuk = $data['tanggal_masuk'];
            $kas_masuk->jumlah = $data['jumlah'];
            $kas_masuk->save();
            return redirect('/admin/view-kasMasuk')->with('flash_message_success','Kas Masuk berhasil ditambah');
        }
        return view('kas_masuk.add_kas');

        // return view('admin.dashboard');
    }

    public function tampilKasMasuk(Request $request){
        $kas_masuk = KasMasuk::get();
        $no =1;
        $kas_masuk = json_decode(json_encode($kas_masuk));
        $total1 = KasMasuk::sum('jumlah');
        $total2 = KasKeluar::sum('jumlah');
        $subtotal = $total1 - $total2;
        return view('kas_masuk.tampilKasMasuk')->with(compact('kas_masuk','total1','total2','subtotal','no'));
    }

    public function editKasMasuk(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            KasMasuk::where(['id'=>$id])->update(['keterangan'=>$data['keterangan'],'tanggal_masuk'=>$data['tanggal_masuk'],'jumlah'=>$data['jumlah']]);
            return redirect('/admin/view-kasMasuk')->with('flash_message_success','Kas Masuk berhasil di update');
        }
        $kas_masuk_details = KasMasuk::where(['id' => $id])->first();
        return view('kas_masuk.edit_kas')->with(compact('kas_masuk_details'));
    }

    public function deleteKasMasuk($id = null){
        if(!empty($id)){
            KasMasuk::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Data Kas Masuk berhasil di hapus');
        }
    }
}
