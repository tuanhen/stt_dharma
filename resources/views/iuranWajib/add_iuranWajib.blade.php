@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-iuranWajib/') }}">Iuran Wajib</a> <a href="#" class="current">Tambah</a> </div>
    <h1>Halaman Set Iuran Wajib Anggota</h1>
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
          <div class="widget-title"><a href="{{ url('/admin/view-iuranWajib/') }}" class="btn btn-info">Kembali</a> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Form Set Iuran Wajib Anggota</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add-iuranWajib') }}" name="addIuranWajib" id="addIuranWajib" novalidate="novalidate">{{ csrf_field() }}
              
              <div class="control-group">
                <label class="control-label">Anggota Rapat</label>
                <div class="controls">
                  <select name="user_id" id="user_id" style="width: 220px">
                    
                   <?php echo $users_dropdown; ?>
                   
                  </select>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Jumlah Iuran Wajib</label>
                <div class="controls">
                  <input type="number" name="jumlah_iuran_wajib" id="jumlah_iuran_wajib">
                </div>
              </div>
              
              <div class="form-actions">
                <input type="submit" value="Tambah Iuran Wajib" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection