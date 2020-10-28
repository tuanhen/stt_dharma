<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\input;
use Image;

class UsersController extends Controller
{
    public function addUsers(Request $request){
        // echo "tess"; die;
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<prev>"; print_r($data); die;
            $users = new User;
            $users->nik = $data['nik'];
            $users->name = $data['name'];
            $users->alamat = $data['alamat'];
            $users->email = $data['email'];
            $users->ttl = $data['ttl'];
            $users->status_perkawinan = $data['status_perkawinan'];
            $users->tlp = $data['tlp'];
            $users->pekerjaan = $data['pekerjaan'];
            $users->status = $data['status'];
            $users->role = $data['role'];
            // $users->image = $data['image'];
            $users->password = Hash::make($data['password']);
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
                    $users->image = $filename;
                }

            }

            $users->save();

            return redirect('/admin/view-user')->with('flash_message_success','User berhasil ditambah');
        }
        return view('users.add_users');

        // return view('admin.dashboard');
    }

    public function tampilUsers(Request $request){
        $users = User::get();
        $no = 1;
        $totalUsers = User::count();
        $users = json_decode(json_encode($users));
        return view('users.tampilUsers')->with(compact('users','totalUsers','no'));
    }

    public function editUsers(Request $request, $id = null){
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
            User::where(['id'=>$id])->update(['nik'=>$data['nik'],
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
            return redirect('/admin/view-user')->with('flash_message_success','Data User berhasil di update');
        }
        $users_details = User::where(['id' => $id])->first();
        return view('users.edit_users')->with(compact('users_details'));
    }

    public function deleteUsers($id = null){
        if(!empty($id)){
            User::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Data User berhasil di hapus');
        }
    }

    public function deleteUsersImage($id = null){
        User::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success','Foto berhasil dihapus');
    }
}
