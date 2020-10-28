<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Absensi;
use App\IuranWajib;

class IuranWajibController extends Controller
{
    public function tampilIuranWajib(Request $request){
        $iuranWajib = IuranWajib::get();
        $iuranWajib = json_decode(json_encode($iuranWajib));
        foreach($iuranWajib as $key => $val){
            $users_name = User::where(['id'=>$val->user_id])->first();
            $iuranWajib[$key]->name = $users_name->name;
        }
        
        return view('iuranWajib.tampilIuranWajib')->with(compact('iuranWajib'));
    }

    public function addIuranWajib(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $iuranWajib = new IuranWajib;
            $iuranWajib->user_id = $data['user_id'];
            $iuranWajib->jumlah_iuran_wajib = $data['jumlah_iuran_wajib'];
            $iuranWajib->save();
            // $absensi = new Absensi;
            // $absensi->tanggal_rapat = $data['tanggal_rapat'];
            // $absensi->user_id = $data['user_id'];
            // $absensi->status = $data['status'];
            // $absensi->keterangan = $data['keterangan'];
            // $absensi->save();
            return redirect()->back()->with('flash_message_success','Data Absen berhasil ditambah');
            // return redirect('/admin/view-kasMasuk')->with('flash_message_success','Kas Masuk berhasil ditambah');
        }
        $users = User::where(['name'=>0])->get();
        $users_dropdown = "<option selected disabled>Select</option>";
        foreach($users as $u){
            $users_dropdown .= "<option value='".$u->id."'>".$u->name."</option>";
        }
        return view('iuranWajib.add_iuranWajib')->with(compact('users_dropdown'));
    }

    public function deleteIuranWajib($id = null){
        if(!empty($id)){
            IuranWajib::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Data Kas Masuk berhasil di hapus');
        }
    }
}
