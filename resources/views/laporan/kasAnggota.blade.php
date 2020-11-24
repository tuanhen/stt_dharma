
<div id="content">
    <div class="container-fluid">
     <table  border="0" align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
    <tr>
    <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>STT DHARMA BHAKTI <br> BR PENINJOAN</h4></center></td>
    </tr>
    
    </table>
      
      <div class="container-fluid">
     
        <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
              <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
              <tr>
                  <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>LAPORAN KAS ANGGOTA</h4></center><br/></td>
              </tr>
                                    
              </table>
              </div>
              <div class="widget-content nopadding">
              <table border="1" align="center" style="width:900px;margin-bottom:20px;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Anggota</th>
                      <th>Keterangan</th>
                      <th>Tanggal</th>
                      <th>Jumlah</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data as $ka)
                    <tr class="gradeX">
                      <td>{{ $no++ }}</td>
                      <td>{{ $ka->user->name ?? '-'  }}</td>
                      <td>{{ $ka->keterangan }}</td>
                      <td>{{ $ka->tgl_iuran }}</td>
                      <td>Rp. {{ number_format($ka->jumlah_iuran) }}</td>
                      
                    </tr>
                        @endforeach
    
                  </tbody>
                  <tfoot>
                  <tr>
                  <td colspan="4" style="text-align:center;"><b>Total</b></td>
                      <td style="text-align:left;"><b>Rp. {{ number_format($total1) }}</b></td>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    