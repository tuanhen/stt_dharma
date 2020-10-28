<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Absensi;
 
class AbsensiController extends Controller
{
    public function addAbsensi(Request $request){

        if($request->isMethod('post')){
            $data = $request->except('_token','DataTables_Table_0_length');
            
            $key = ['user_id','status','tgl_rapat','keterangan'];

            for ($i=0; $i < count($data['user_id']); $i++) { // hitung jumlah key
                $formData = []; $insert = [];

                for ($l=0; $l < count($key); $l++) {
                    array_push($formData, $data[$key[$l]][$i]);
                }

                for ($k=0; $k < count($key); $k++) { 
                    $insert = [
                        'user_id' => $formData[0],
                        'status' => $formData[1],
                        'tgl_rapat' => $formData[2],
                        'keterangan' => $formData[3],
                    ];
                }
 
                Absensi::create($insert);
            }


            // Absensi::create($data);
            //  echo "<pre>"; print_r($data); die;
            // echo "<pre>"; print_r($data); die;
            // $absen = new Absensi;
            // $absen->tgl_rapat = $data['tgl_rapat'];
            // $absen->user_id = $data['user_id'];
            // $absen->status = $data['status'];
            // $absen->keterangan = $data['keterangan'];
            // $absen->save();
            // $absensi = New Absensi;
            // foreach ($absensi as $absensi) {
            //     $absen              = new Absensi();
            //     $absen->user_id = $absensi->user_id;
            //     $absen->status = $absensi->status;
            //     $absen->tanggal_rapat = $absensi->tanggal_rapat;
            //     $absen->keterangan = $absensi->keterangan;
            //     $absen->save();
            
            //     $absens->sentToAbsensi()->sync([$absen->id],false);
            // }

            return redirect()->back()->with('flash_message_success','Data Absen berhasil ditambah');
            // return redirect('/admin/view-kasMasuk')->with('flash_message_success','Kas Masuk berhasil ditambah');
        }
        $users = User::where(['name'=>0])->get();
        // $users_dropdown = "<option selected disabled>Select</option>";
        // foreach($users as $u){
        //     $users_dropdown .= "<option value='".$u->id."'>".$u->name."</option>";
        // }
        return view('absensi.add_absensi')->with(compact('users'));
    }

    public function tampilAbsensi(Request $request){
        $absen = Absensi::get();
        $absen = json_decode(json_encode($absen));
        foreach($absen as $key => $val){
            $users_name = User::where(['id'=>$val->user_id])->first();
            $absen[$key]->name = $users_name->name;
        }
        return view('absensi.tampilAbsensi')->with(compact('absen'));
    }

    public function editAbsensi(Request $request, $id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            Absensi::where(['id'=>$id])->update(['user_id'=>$data['user_id'],
                            'tgl_rapat'=>$data['tgl_rapat'],
                            'status'=>$data['status'],
                            'keterangan'=>$data['keterangan']]);
            return redirect()->back()->with('flash_message_success','Data berhasil di update');
        }

        $absenDetails = Absensi::where(['id'=>$id])->first();

        $users = User::where(['name'=>0])->get();
        $users_dropdown = "<option selected disabled>Select</option>";
        foreach($users as $u){
            $users_dropdown .= "<option value='".$u->id."'>".$u->name."</option>";
        }

        return view('absensi.edit_absensi')->with(compact('absenDetails','users_dropdown'));
    }

    public function deleteAbsensi($id = null){
        Absensi::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Data Absen berhasi dihapus');
    }
}
