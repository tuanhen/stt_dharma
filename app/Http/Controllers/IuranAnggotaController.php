<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\IuranAnggota;
use App\IuranWajib;


class IuranAnggotaController extends Controller
{
    public function tampilIuranAnggota(Request $request){
        $iuranAnggota = IuranAnggota::with(['user:id,name'])->get();
        $no =1;
        return view('iuranAnggota.tampilIuranAnggota')->with(compact('iuranAnggota','no'));
    } 

    public function tampilAddIuranAnggota(){
        $iuranWajib_drop = IuranWajib::with('user:id,name')->get();
        return view('iuranAnggota.add_iuranAnggota')->with(compact('iuranWajib_drop'));
    }

    public function addIuranAnggota(Request $request){
        $data = $request->all();
        IuranAnggota::create($data);

        $iuranw = IuranWajib::where(['user_id' => $data['iuranWajib_id']])->first();
        $jmlIuran = $iuranw->jumlah_iuran_wajib;
        $hasil = $jmlIuran - $data['jumlah_iuran'];
        $iuranw->update(['jumlah_iuran_wajib' => $hasil]);
        return redirect()->back()->with('flash_message_success','Data Absen berhasil ditambah');

        // return response()->json([
        //     'data' => $iuranw
        // ], 201);
    }

    public function deleteIuranAnggota($id = null){
        if(!empty($id)){
            IuranAnggota::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Data berhasil di hapus');
        }
    }
}
