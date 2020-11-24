@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-user/') }}">Management Users</a> <a href="#" class="current">Tambah Users</a> </div>
    <h1>Halaman Management Users</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <a href="{{ url('/admin/view-user/') }}" class="btn btn-info">Kembali</a><span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Tambah Users</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-user') }}" name="addUser" id="addUser" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">NIK/KTP</label>
                <div class="controls">
                  <input type="number" name="nik" id="nik">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Nama</label>
                <div class="controls">
                  <input type="text" name="name" id="name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Alamat</label>
                <div class="controls">
                  <input type="text" name="alamat" id="alamat">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input type="email" name="email" id="email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                  <input type="password" name="password" id="password">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Tempat & Tanggal Lahir</label>
                <div class="controls">
                  <input type="date" name="ttl" id="ttl">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Status Perkawinan</label>
                <div class="controls">
                  <input type="text" name="status_perkawinan" id="status_perkawinan">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Telepon</label>
                <div class="controls">
                  <input type="text" name="tlp" id="tlp">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Pekerjaan</label>
                <div class="controls">
                  <input type="text" name="pekerjaan" id="pekerjaan">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Status</label>
                <div class="controls">
                  <select name="status" id="status" style="width: 220px">
                    <option value="Aktif">Aktif</option>
                    <option value="TidakAktif">Tidak Aktif</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Role</label>
                <div class="controls">
                  <select name="role" id="role" style="width: 220px">
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
                </div>
              </div>
              
              <div class="form-actions">
                <input type="submit" value="Tambah User" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection