@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-user/') }}">Management User</a> <a href="#" class="current">Edit User</a> </div>
    <h1>Halaman Edit User</h1>
    @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif  
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif 
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Form Edit User</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/edit-user/'.$users_details->id) }}" name="editUsers" id="editUsers" novalidate="novalidate">{{ csrf_field() }}
            <div class="control-group">
              <div class="control-group">
                <label class="control-label">NIK/KTP</label>
                <div class="controls">
                  <input type="number" name="nik" id="nik" value="{{ $users_details->nik }}">
                </div>
              </div>
                <label class="control-label">Nama</label>
                <div class="controls">
                  <input type="text" name="name" id="name" value="{{ $users_details->name }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Alamat</label>
                <div class="controls">
                  <input type="text" name="alamat" id="alamat" value="{{ $users_details->alamat }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input type="email" name="email" id="email" value="{{ $users_details->email }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Tempat & Tanggal Lahir</label>
                <div class="controls">
                  <input type="text" name="ttl" id="ttl" value="{{ $users_details->ttl }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Status Perkawinan</label>
                <div class="controls">
                  <input type="text" name="status_perkawinan" id="status_perkawinan" value="{{ $users_details->status_perkawinan }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Telepon</label>
                <div class="controls">
                  <input type="text" name="tlp" id="tlp" value="{{ $users_details->tlp }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Pekerjaan</label>
                <div class="controls">
                  <input type="text" name="pekerjaan" id="pekerjaan" value="{{ $users_details->pekerjaan }}"> 
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Status</label>
                <div class="controls">
                  <select name="status" id="status" style="width: 220px">
                    <option value="{{ $users_details->status }}">{{ $users_details->status }}</option>
                    <option value="Aktif">Aktif</option>
                    <option value="TidakAktif">Tidak Aktif</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Role</label>
                <div class="controls">
                  <select name="role" id="role" style="width: 220px">
                  <option value="{{ $users_details->role }}">{{ $users_details->role }}</option>
                    <option value="Admin">Admin</option>
                    <option value="Pengurus">Pengurus</option>
                    <option value="Anggota">Anggota</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Foto</label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                  <input type="hidden" name="current_image" value="{{ $users_details->image }}">
                  @if(!empty($users_details->image))
                  <img style="width:100px" src="{{ asset('images/backend_images/foto/large/'.$users_details->image)}}"> | <a href="{{ url('/admin/delete-user-image/'.$users_details->image) }}">Hapus</a>
                  @endif
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Edit User" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection