

<div id="content">
<div class="container-fluid">
 <table  border="0" align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<tr>
<td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>STT DHARMA BHAKTI <br> BR PENINJOAN</h4></center></td>
</tr>

</table>
 <div class="container-fluid">
   <hr>
   <div class="row-fluid">
     <div class="span12">
       <div class="widget-box">
         <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
         <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
          <tr>
              <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>LAPORAN SALDO KAS</h4></center><br/></td>
          </tr>
                                
          </table>
         </div>
         <div class="widget-content nopadding">
         <table border="1" align="center" style="width:900px;margin-bottom:20px;">
             <thead>
               <tr>
                 <th>No</th>
                 <th>Kas Masuk</th>
                 <th>Kas Keluar</th>
                 <th>Saldo</th>
                 </thead>
                
               </tr>
             </thead>
             <tbody>
                
               <tr class="gradeX" align="center">
                 <td>{{ $no++ }}</td>
                 <td>Rp. {{ number_format($total1) }}</td>
                 <td>Rp. {{ number_format($total2) }}</td>
                 <td>Rp. {{ number_format($subtotal) }}</td>
                
               </tr>

             </tbody>
            
           </table>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

