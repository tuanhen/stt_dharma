
<!--sidebar-menu-->
<div id="sidebar"><a href="{{ url('/admin/dashboard') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class=""><a href="{{ url('/admin/dashboard') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    @can('isAdmin');
    <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>Data Kas</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-kasMasuk') }}">Kas Masuk Umum</a></li>
        <li><a href="{{ url('/admin/view-kasKeluar') }}">kas Keluar</a></li>
        <li><a href="{{ url('/admin/view-iuranAnggota') }}">Iuran Anggota</a></li>
      </ul>
    </li>
    <li><a href="{{ url('/admin/view-user') }}"><i class="icon icon-user"></i> <span>Management Users</span></a> </li>
    <li><a href="{{ url('/admin/view-iuranWajib') }}"><i class="icon icon-user"></i> <span>Set Iuran Wajib</span></a> </li>
    <li><a href="{{ url('/admin/view-absensi') }}"><i class="icon icon-pencil"></i> <span>Data Absensi</span></a> </li>
    @endcan
    @can('isPengurus');
    <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>Data Kas</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-kasMasuk') }}">Kas Masuk</a></li>
        <li><a href="{{ url('/admin/view-kasKeluar') }}">kas Keluar</a></li>
      </ul>
    </li>
   
    <li><a href="{{ url('/admin/view-absensi') }}"><i class="icon icon-pencil"></i> <span>Data Absensi</span></a> </li>
    @endcan
    <li> <a href="{{ url('/admin/view-laporan') }}"><i class="icon icon-file"></i> <span>Data Laporan</span></a></li>
    <li> <a href="{{ url('admin/chart/bar') }}"><i class="icon icon-signal"></i> <span>Grafik Kedahiran</span></a></li>
   
  </ul>
</div>
<!--sidebar-menu-->
