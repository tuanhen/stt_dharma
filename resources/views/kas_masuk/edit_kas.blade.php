@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-kasMasuk/') }}">Kas Masuk</a> <a href="#" class="current">Edit Kas Masuk</a> </div>
    <h1>Halaman Kas Masuk</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Kas Masuk</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/edit-kasMasuk/'.$kas_masuk_details->id) }}" name="editKasMasuk" id="editKasMasuk" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Keterangan</label>
                <div class="controls">
                  <input type="text" name="keterangan" id="keterangan" value="{{ $kas_masuk_details->keterangan }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Tanggal Masuk</label>
                <div class="controls">
                  <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="{{ $kas_masuk_details->tanggal_masuk }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Jumlah</label>
                <div class="controls">
                  <input type="number" name="jumlah" id="jumlah" value="{{ $kas_masuk_details->jumlah }}">
                </div>
              </div>
              
              <div class="form-actions">
                <input type="submit" value="Edit Kas Masuk" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection