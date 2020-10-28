@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-user/') }}">Management Users</a></div>
    <h1>Halaman Management User</h1>
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
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"><a href="{{ url('/admin/add-user/') }}" class="btn btn-info">Tambah User</a> <span class="icon"><i class="icon-th"></i></span>
            <h5> Data Users</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
             
                  @foreach($users as $u)
                <tr class="gradeX">
                  <td>{{ $no++ }}</td>
                  <td>{{ $u->name }}</td>
                  <td>{{ $u->email }}</td>
                  <td>{{ $u->status }}</td>
                  <td class="center">
                    <a href="#myModal{{ $u->id }}" data-toggle="modal" class="btn btn-success btn-mini">Lihat</a> 
                    <a href="{{ url('/admin/edit-user/'.$u->id) }}" class="btn btn-primary btn-mini">Edit</a> 
                    <a href="#myAlert{{ $u->id }}" data-toggle="modal" class="btn btn-danger btn-mini">Hapus</a>
                </td>
                </tr>
                    <div id="myModal{{ $u->id }}" class="modal hide">
                      <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button">×</button>
                        <h3>Datails User</h3>
                      </div>
                      <div class="modal-body">
                      <div class="widget-content nopadding">
                        <form action="#" method="get" class="form-horizontal">
                          <div class="control-group">
                            <label class="control-label">Foto</label>
                            <div class="controls">
                            <img style="width:100px" src="{{ asset('images/backend_images/foto/large/'.$u->image)}}">
                            </div>
                          </div>
                           <div class="control-group">
                            <label class="control-label">NIK </label>
                            <div class="controls">
                              <input value="{{ $u->nik }}" class="span11" readonly />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Nama </label>
                            <div class="controls">
                              <input value="{{ $u->name }}" class="span11" readonly />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                            <input value="{{ $u->email }}" class="span11" readonly />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Alamat</label>
                            <div class="controls">
                            <input value="{{ $u->alamat }}" class="span11" readonly />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Telepon</label>
                            <div class="controls">
                            <input value="{{ $u->tlp }}" class="span11" readonly />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">TTL</label>
                            <div class="controls">
                            <input value="{{ $u->ttl }}" class="span11" readonly />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Status Perkawinan</label>
                            <div class="controls">
                            <input value="{{ $u->status_perkawinan }}" class="span11" readonly />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Role</label>
                            <div class="controls">
                            <input value="{{ $u->role }}" class="span11" readonly />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Status</label>
                            <div class="controls">
                            <input value="{{ $u->status }}" class="span11" readonly />
                            </div>
                          </div>
                          
                        </form>
                      </div>
                        
                      </div>
                    </div>
                    @endforeach
      
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@foreach($users as $u)            
<div id="myAlert{{ $u->id }}" class="modal hide">
    <div class="modal-header">
    
      <button data-dismiss="modal" class="close" type="button">×</button>
      <h3>Hapus Data</h3>
    </div>
    <div class="modal-body">
      <p>Apakah anda ingin menghapus data absensi ini?</p>
    </div>
    <div class="modal-footer"> 
      <a class="btn btn-primary" href="{{ url('/admin/delete-user/'.$u->id) }}">Confirm</a> 
      <a data-dismiss="modal" class="btn" href="#">Cancel</a> 
    </div>
  </div>
@endforeach      
       

@endsection