@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Iuran Anggota Bulanan</a></div>
    <h1>Halaman Iuran Anggota Bulanan</h1>
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
          <div class="widget-title"><a href="{{ url('/admin/tampil-addIuranAnggota/') }}" class="btn btn-info">Tambah</a>  <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Iuran Anggota Bulanan</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jumlah</th>
                  <th>Tanggal Iuran</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($iuranAnggota as $ia)
                  
                <tr class="gradeX">
                  <td>{{ $no++ }}</td>
                  <td>{{ $ia->user->name ?? '-' }}</td>
                  <td>{{ $ia->jumlah_iuran }}</td>
                  <td>{{ $ia->tgl_iuran }}</td>
                  <td>{{ $ia->keterangan }}</td>
                  <td class="center">
                    
                    <a href="{{ url('/admin/edit-iuranAnggota/'.$ia->id) }}" class="btn btn-primary btn-mini">Edit</a> 
                    <a href="#myAlert{{ $ia->id }}" data-toggle="modal" class="btn btn-danger btn-mini">Hapus</a>
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
       
@foreach($iuranAnggota as $ia)            
<div id="myAlert{{ $ia->id }}" class="modal hide">
    <div class="modal-header">
    
      <button data-dismiss="modal" class="close" type="button">×</button>
      <h3>Hapus Data</h3>
    </div>
    <div class="modal-body">
      <p>Apakah anda ingin menghapus data ini?</p>
    </div>
    <div class="modal-footer"> 
      <a class="btn btn-primary" href="{{ url('/admin/delete-iuranAnggota/'.$ia->id) }}">Confirm</a> 
      <a data-dismiss="modal" class="btn" href="#">Cancel</a> 
    </div>
  </div>
@endforeach      

@endsection