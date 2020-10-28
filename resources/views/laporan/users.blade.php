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
              <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>LAPORAN ANGGOTA</h4></center><br/></td>
          </tr>
                                
          </table>
          </div>
          <div class="widget-content nopadding">
          <table border="1" align="center" style="width:900px;margin-bottom:20px;">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Role</th>
                </tr>
              </thead>
              <tbody>
             
                  @foreach($users as $u)
                <tr class="gradeX">
                  <td>{{ $no++ }}</td>
                  <td>{{ $u->name }}</td>
                  <td>{{ $u->email }}</td>
                  <td>{{ $u->status }}</td>
                  <td>{{ $u->role }}</td>
                 
                </tr>
                   
                    @endforeach
      
              </tbody>
            </table>
            <h5>NOTE : 1 = Aktif, 0 = Tidak Aktif</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
