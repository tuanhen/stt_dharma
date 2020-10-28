<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\KasKeluar;
use App\Absensi;
use App\KasMasuk;
use App\IuranWajib;
use App\IuranAnggota;
use Illuminate\Support\Facades\input;
use Image;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email' => $data['email'],'password'=> $data['password'],'status'=>'Aktif'])){
                // echo "succes"; die;
                // Session::put('adminSession',$data['email']);
                return redirect('admin/dashboard'); //jika login berhasil. maka akan redirect ke halaman dashboard
            }else{
                // echo "sdfdsf"; die;.
                return redirect('/admin')->with('flash_message_error','Gagal Login');
            }
        }
        return view('admin.admin_login'); //menampilkan halaman login pada view
    }

    public function dashboard(Request $request){
        // if(Session::has('adminSession')){ 
        //     //menampilkan semua dashboard
        // }else{
        //     return redirect('/admin')->with('flash_message_error','Anda Belum Login');
        // }
        // Session::get('users')->name;
        // $data = User::get('data')->first();
        // Session::put('data', $data);
        // $value = $request->session()->get('key');'


        $saldo = IuranWajib::get();
        $saldo = json_decode(json_encode($saldo));
        // $saldoAnggota = IuranWajib::with(['user:id'=> Auth::user()->id])->get();
        $users_details = User::where(['id' => Auth::user()->id])->first();

        $iuranWajibku = IuranWajib::where(['user_id' => Auth::user()->id])->first();


        // $iuranAnggota = IuranAnggota::with(['user:id,name'])->get();
        // $iuranWajib = User::with(['iuranWajib:id,jumlah_iuran_wajib'])->get();
        $iuranWajib = IuranWajib::get();
        $iuranWajib = json_decode(json_encode($iuranWajib));
        foreach($iuranWajib as $key => $val){
            $users_name = User::where(['id'=>$val->user_id])->first();
            $iuranWajib[$key]->name = $users_name->name;
        }
        $users = User::get();
        $totalUsers = User::count();
        $users = json_decode(json_encode($users));
        $totalAdmin = User::where(['role'=>'Admin'])->count();
        $totalPengurus = User::where(['role'=>'Pengurus'])->count();
        $totalAnggota = User::where(['role'=>'Anggota'])->count();
        $kas_masuk = KasMasuk::get();
        $kas_masuk = json_decode(json_encode($kas_masuk));
        $kas_keluar = KasKeluar::get();
        $kas_keluar = json_decode(json_encode($kas_keluar));
        $total1 = KasMasuk::sum('jumlah');
        $total2 = KasKeluar::sum('jumlah');
        $subtotal = $total1 - $total2;
        return view('admin.dashboard')->with(compact('users','iuranWajib','totalUsers','kas_masuk','kas_keluar','total1','total2','subtotal','totalAnggota','totalPengurus','totalAdmin','users_details','iuranWajibku'));
    }

    public function settings(){
        $users_details = User::where(['id' => Auth::user()->id])->first();
        return view('admin.settings')->with(compact('users_details'));
    }

    public function editProfile(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();

            if($request->hasFile('image')){
                $image_tmp = input::file('image');
                if($image_tmp->isValid()){
                    $extention = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extention;
                    $large_image_path = 'images/backend_images/foto/large/'.$filename;
                    $medium_image_path = 'images/backend_images/foto/medium/'.$filename;
                    $small_image_path = 'images/backend_images/foto/small/'.$filename;
                    Image::make($image_tmp)->save($large_image_path);
                    image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    // $users->image = $filename;
                }else{
                    $filename = $data['current_image'];
                }

            }
            // echo "<pre>"; print_r($data); die;
           
            User::where(['id' => Auth::user()->id])->update(['nik'=>$data['nik'],
                                              'name'=>$data['name'],
                                              'alamat'=>$data['alamat'],
                                              'email'=>$data['email'],
                                              'ttl'=>$data['ttl'],
                                              'status_perkawinan'=>$data['status_perkawinan'],
                                              'tlp'=>$data['tlp'],
                                              'pekerjaan'=>$data['pekerjaan'],
                                              'status'=>$data['status'],
                                              'role'=>$data['role'],
                                              'image'=>$filename]);
            return redirect('/admin/dashboard')->with('flash_message_success','Data User berhasil di update');
        }
        $users_details = User::where(['id' => Auth::user()->id])->first();
        return view('admin.edit_users')->with(compact('users_details'));
    }

    public function chkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $check_password = User::where(['email' => Auth::user()->email])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true"; die;
        }else{
            echo "false"; die;
        }
    }

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<prev>"; print_r($data); die;
            $check_password = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
               $password = bcrypt($data['new_pwd']);
               User::where(['id' => Auth::user()->id])->update(['password'=>$password]);
               return redirect('/admin/settings')->with('flash_message_success','Password berhasil diupdate');
            }else{
                return redirect('/admin/settings')->with('flash_message_error','Password Gagal diupdate');            }
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Anda Berhasil Logout');
    }
    
}
