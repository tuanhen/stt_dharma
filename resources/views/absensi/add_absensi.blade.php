@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-absensi/') }}">Absensi</a> <a href="#" class="current">Tambah Absen</a> </div>
    <h1>Halaman Tambah Absen</h1>
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
          <div class="widget-title"><a href="{{ url('/admin/view-absensi/') }}" class="btn btn-info">Kembali</a> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Tambah Absen</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add-absensi') }}" name="addAbsensi" id="addAbsensi" novalidate="novalidate">{{ csrf_field() }}
              {{-- <div class="control-group">
                <label class="control-label">Tanggal Rapat</label>
                <div class="controls">
                  <input type="date" name="tgl_rapat" id="tgl_rapat">
                </div>
              </div>  --}}
              <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Anggota</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $u)
                    <tr class="gradeX">
                      <td>{{ $u->id }}</td>
                      <td>
                        <input type="hidden" name="user_id[]" id="user_id" value="{{$u->id}}" readonly>{{$u->name}}
                        {{-- <select readonly name="user_id" id="user_id" style="width: 220px">
                          
                          <option value='".$u->id."'>{{$u->name}}</option>
                         
                        </select> --}}
                        
                      </td>
                      <td>
                        {{-- <input value="hadir" type="radio" id="hadir" name="status" class="custom-control-input">Hadir
                        <input value="tidakHadir" type="radio" id="tidakHadir" name="status" class="custom-control-input">Tidak Hadir --}}
                        <select name="status[]" id="status" style="width: 220px">
                          <option value="Hadir">Hadir</option>
                          <option value="TidakHadir">Tidak Hadir</option>
                        </select>
                    </td>
                    <td>
                    <input type="date" value="{{date('Y-m-d')}}" name="tgl_rapat[]" id="tgl_rapat">
                    </td>
                      <td> 
                        <input type="text" name="keterangan[]" id="keterangan">
                    </td>
                     
                    </tr>
                    @endforeach   
                       
          
                  </tbody>
                </table>
             
              
              <div class="form-actions">
                <input type="submit" value="Tambah Absensi" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection