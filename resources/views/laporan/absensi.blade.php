<div id="content">
  <div class="container-fluid">
    <table  border="0" align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
    <tr>
    <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>STT DHARMA BHAKTI <br> BR PENINJOAN</h4></center></td>
    </tr>

    </table>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
          <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
          <tr>
              <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>LAPORAN ABSENSI RAPAT</h4></center><br/></td>
          </tr>
                                
          </table>
          </div>
          <div class="widget-content nopadding">
          <table border="1" align="center" style="width:900px;margin-bottom:20px;">
              <thead>
                <tr>
                  <th style="widht :200px">No</th>
                  <th>Tanggal Rapat</th>
                  <th>Nama Anggota</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                 
                </tr>
              </thead>
              <tbody>
                  @foreach($absen as $abs)
                <tr class="gradeX">
                  <td>{{ $no++ }}</td>
                  <td>{{ $abs->tgl_rapat }}</td>
                  <td>{{ $abs->name }}</td>
                  <td>{{ $abs->status }}</td>
                  <td>{{ $abs->keterangan }}</td>
                 
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
       
