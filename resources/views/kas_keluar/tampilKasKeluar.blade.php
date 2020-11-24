@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-kasKeluar/') }}">Kas Keluar</a></div>
    <h1>Halaman Kas Keluar</h1>
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
          <div class="widget-title"><a href="{{ url('/admin/add-kasKeluar/') }}" class="btn btn-info">Tambah Kas Keluar</a> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Kas Keluar</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Keterangan</th>
                  <th>Tanggal Masuk</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($kas_keluar as $ks_kl)
                <tr class="gradeX">
                  <td>{{ $no++ }}</td>
                  <td>{{ $ks_kl->keterangan }}</td>
                  <td>{{ $ks_kl->tanggal_masuk }}</td>
                  <td>Rp. {{ number_format($ks_kl->jumlah) }}</td>
                  <td class="center">
                    <a href="{{ url('/admin/edit-kasKeluar/'.$ks_kl->id) }}" class="btn btn-primary btn-mini">Edit</a> 
                    <a href="#myAlert{{ $ks_kl->id }}" data-toggle="modal" class="btn btn-danger btn-mini">Hapus</a>
                </td>
                </tr>
                    @endforeach
      
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@foreach($kas_keluar as $ks_kl)            
<div id="myAlert{{ $ks_kl->id }}" class="modal hide">
    <div class="modal-header">
    
      <button data-dismiss="modal" class="close" type="button">×</button>
      <h3>Hapus Data</h3>
    </div>
    <div class="modal-body">
      <p>Apakah anda ingin menghapus data kas masuk ini?</p>
    </div>
    <div class="modal-footer"> 
      <a class="btn btn-primary" href="{{ url('/admin/delete-kasKeluar/'.$ks_kl->id) }}">Confirm</a> 
      <a data-dismiss="modal" class="btn" href="#">Cancel</a> 
    </div>
  </div>
@endforeach  
@endsection