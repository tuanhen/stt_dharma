@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-kasKeluar/') }}">Kas Keluar</a> <a href="#" class="current">Tambah Kas</a> </div>
    <h1>Halaman Kas Keluar</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"><a href="{{ url('/admin/view-kasKeluar/') }}" class="btn btn-info">Kembali</a> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Tambah Kas Keluar</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add-kasKeluar') }}" name="addKasKeluar" id="addKasKeluar" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Keterangan</label>
                <div class="controls">
                  <input type="text" name="keterangan" id="keterangan">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Tanggal Masuk</label>
                <div class="controls">
                  <input type="date" name="tanggal_masuk" id="tanggal_masuk">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Jumlah</label>
                <div class="controls">
                  <input type="number" name="jumlah" id="jumlah">
                </div>
              </div>
              
              <div class="form-actions">
                <input type="submit" value="Tambah Kas Keluar" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection