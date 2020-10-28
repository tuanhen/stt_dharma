@extends('layouts.adminLayout.admin_design')
@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  Hallo <b>{{ $users_details->name }}</b>, anda adalah <b>{{ $users_details->role }}</b> </div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="#"> <i class="icon-user"></i> <strong>{{ ($totalAnggota) }}</strong> <br> Total Anggota</a> </li>
        <li class="bg_ls"> <a href="#"> <i class="icon-user"></i> <strong>{{ ($totalPengurus) }}</strong> <br> Total Pengurus</a> </li>
        <li class="bg_lg"> <a href="#"> <i class="icon-user"></i> <strong>{{ ($totalAdmin) }}</strong> <br> Total Admin</a> </li>
        <li class="bg_ly span3"> <a href="#"> <i class="icon-user"></i> <strong>{{ number_format($totalUsers) }}</strong> <br> Total Pengguna</a> </li>
      </ul>
    </div>
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_ls"> <a href="{{ url('/admin/view-laporan') }}"> <i class="icon-fullscreen"></i> Laporan </a> </li>
        <li class="bg_lo"> <a href="#"> <i class="icon-signal"></i> <strong>Rp. {{ number_format($total1) }}</strong> <br> Kas Masuk</a> </li>
        <li class="bg_ls"> <a href="#"> <i class="icon-inbox"></i> <strong>Rp. {{ number_format($total2) }}</strong> <br> Kas Keluar </a> </li>
        <li class="bg_lr span3"> <a href="#"> <i class="icon-th"></i><strong>Rp. {{ number_format($subtotal) }}</strong> <br> Saldo</a> </li>
        <li class="bg_ls"> <a href="#"> <i class="icon-th"></i><strong>Rp. {{ number_format($iuranWajibku->jumlah_iuran_wajib)}}</strong> <br> Iuran Wajib</a> </li>
        
      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5 >Data Diri Anda</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
            <div class="span6">
                <table class="table">
                  <tbody>
                    <tr>
                    <ul class="thumbnails">
                      <li class="span3"> <a> <img style="width:500px" src="{{ asset('images/backend_images/foto/large/'.$users_details->image)}}" alt="" > </a>
                        <div class="actions"> <a title="" class="" href="{{ url('/admin/edit-profile/'.$users_details->id) }}"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{ asset('images/backend_images/foto/large/'.$users_details->image)}}"><i class="icon-search"></i></a> </div>
                      </li>
                    </ul>
                  </tr>
                    </tbody>
                  
                </table>
              </div>

              <div class="span3">
                <table class="">
                  <tbody>
                    <tr>
                      <td><h4>{{ $users_details->name }}</h4></td>
                    </tr>
                    <tr>
                      <td>{{ $users_details->nik }}</td>
                    </tr>
                    <tr>
                      <td>{{ $users_details->email }}</td>
                    </tr>
                    <tr>
                      <td>{{ $users_details->alamat }}</td>
                    </tr>
                    <tr>
                      <td>{{ $users_details->role }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="span3">
                <table class="">
                  <tbody>
                    <tr>
                      <td>{{ $users_details->tlp }}</td>
                    </tr>
                    <tr>
                      <td>{{ $users_details->ttl }}</td>
                    </tr>
                    <tr>
                      <td>{{ $users_details->pekerjaan }}</td>
                    </tr>
                    <tr>
                      <td >{{ $users_details->status_perkawinan }}</td>
                    </tr>

                    {{-- {{ $users_details->iuranWajib->user_id }}</td> --}}
                  </tbody>
                </table>
              </div>
             
            </div>
            <div class="widget-content nopadding">
              <table style="display:none">
                <thead>
                  <tr>
                   
                   
                    <th>Iuran Wajib</th>
                   
                  </tr>
                </thead>
                <tbody>
                  @foreach($iuranWajib as $iw)
                <tr class="gradeX">
                  {{-- <input type="hidden" value="{{ $iw->jumlah_iuran_wajib }}" value="{{ $iw->jumlah_iuran_wajib }}"> --}}
                  <td>{{ $iw->jumlah_iuran_wajib }}</td>
                  {{-- <input type="number" value="{{ $iw->jumlah_iuran_wajib }}" name="jumlah_iuran_wajib" id="jumlah_iuran_wajib"> --}}
                  
                </tr>
                @endforeach   
        
                </tbody>
              </table>
          </div>
        </div>
<!--End-Chart-box--> 
    <hr/>
    
  </div>
</div>

<!--end-main-container-part-->

@endsection