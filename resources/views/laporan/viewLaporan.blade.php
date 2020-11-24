@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Laporan</a></div>
    <h1>Halaman Laporan</h1>
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
          <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Data Laporan</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Laporan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                 
                <tr class="gradeX">
                  <td>1</td>
                  <td>Laporan Kas Masuk</td>
                  <td><a href="{{ URL('/admin/kasMasuk') }}" class="btn btn-primary btn-mini">Download</a> </td>
                </tr>
                <tr class="gradeX">
                  <td>2</td>
                  <td>Laporan Kas Anggota</td>
                  <td><a href="{{ URL('/admin/kasAnggota') }}" class="btn btn-primary btn-mini">Download</a> </td>
                </tr>
                <tr class="gradeX">
                  <td>3</td>
                  <td>Laporan Kas Keluar</td>
                  <td><a href="{{ URL('/admin/kasKeluar') }}" class="btn btn-primary btn-mini">Download</a> </td>
                </tr>
                <tr class="gradeX">
                  <td>4</td>
                  <td>Laporan Saldo Kas</td>
                  <td><a href="{{ URL('/admin/saldo') }}" class="btn btn-primary btn-mini">Download</a> </td>
                </tr>
                <tr class="gradeX">
                  <td>5</td>
                  <td>Laporan Absensi</td>
                  <td><a href="{{ URL('/admin/absensi') }}" class="btn btn-primary btn-mini">Download</a> </td>
                </tr>
                <tr class="gradeX">
                  <td>6</td>
                  <td>Laporan Data Anggota</td>
                  <td><a href="{{ URL('/admin/users') }}" class="btn btn-primary btn-mini">Download</a> </td>
                </tr>
                   
      
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection