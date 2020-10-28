@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-absensi/') }}">Absensi</a> <a href="#" class="current">Edit Absen</a> </div>
    <h1>Halaman Edit Absen</h1>
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
            <h5>Edit Absen</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/edit-absensi/'.$absenDetails->id) }}" name="editAbsensi" id="editAbsensi" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Tanggal Rapat</label>
                <div class="controls">
                  <input type="date" name="tgl_rapat" id="tgl_rapat" value="{{ $absenDetails->tgl_rapat }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Anggota Rapat</label>
                <div class="controls">
                  <select name="user_id" id="user_id" style="width: 220px">
                    
                   <?php echo $users_dropdown; ?>
                   
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Status</label>
                <div class="controls">
                  <select name="status" id="status" style="width: 220px">
                    <option value="Hadir">Hadir</option>
                    <option value="TidakHadir">Tidak Hadir</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Keterangan</label>
                <div class="controls">
                  <input type="text" name="keterangan" id="keterangan" value="{{ $absenDetails->keterangan }}">
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