<p>
</p>
<table class='table table-bordered'>
      <tr class="separator"> <td colspan="2"> <b> LAP B</b>  </td> </tr>

     <tr><td width="161">Tanggal LP </td>
            <td width="516">   

            <?php echo $tanggal; ?>
            </td>
      <tr><td>Nomor </td>
            <td><?php echo $nomor; ?> </td>
      <tr><td>Golongan Kejahatan </td>
            <td> <?php echo $golongan_kejahatan ?>

               </td>


      <tr><td>Kategori Tempat Kejahatan</td>
            <td>
 
            <?php echo $jenis_lokasi ?>
               </td>


      <tr><td>Tindak Pidana </td>
            <td> <?php echo $tindak_pidana ?>  </td>
      <tr><td>Pasal </td>
            <td><?php echo $pasal ?>   </td>
      <tr><td>Fungsi Terkait </td>
            <td>
                   
                  <?php echo $fungsi ?>
               </td>
 

              </td>
            </tr>
   <tr class="separator"> <td colspan="2"> <b> PELAPOR</b>  </td> </tr>
      <tr>
      <td> Nama </td>
            <td>   <?php echo $pelapor_nama ?>
        </td>
      <tr><td> Tmp Lahir </td>
            <td><?php echo $pelapor_tmp_lahir ?>
        </td>
      <tr><td> Tgl Lahir </td>
            <td><?php echo $pelapor_tgl_lahir ?>
        </td>
      <tr><td> Jk </td>
            <td>
          
            <?php echo $pelapor_jk ?>
        </td>
      <tr><td>Pekerjaan </td>
            <td> 
        
            <?php echo $pekerjaan ?>
        </td>
      <tr><td> Alamat </td>
            <td> 
             <?php echo $pelapor_alamat." ".$desa." ".$kecamatan." ".$kota." ".$provinsi; ?>
        </td>
      <tr>
       

            <td>Telpon </td>
            <td><?php echo $pelapor_telpon ?>
        </td>
      <tr><td>Agama </td>
            <td> 
             <?php echo $agama ?>
        </td>
      <tr><td>Pendidikan </td>
            <td> 
             <?php echo $pendidikan ?>
        </td>
      <tr><td>Warga Negara </td>
            <td> 
              
              <?php echo $warga_negara; ?>
        </td>
        </tr>

   <tr class="separator"> <td colspan="2"> <b> PERISTIWA YANG TERJADI </b>  </td> </tr>

     <tr>
     <td>Tanggal </td>
            <td><?php echo $kejadian_tanggal; ?>
        </td>
      <tr><td>Jam </td>
            <td><?php echo $kejadian_jam; ?>
        </td>
      <tr><td>Tempat </td>
            <td><?php echo $kejadian_tempat; ?>
        </td>
      <tr><td>Apa Yang Terjadi </td>
            <td><?php echo $kejadian_apa; ?>
        </td>
      <tr><td>Uraian Kejadian </td>
            <td><?php echo $kejadian_uraian; ?>
        </td>
      <tr><td>Bagaimana Terjadi </td>
            <td><?php echo $kejadian_bagaimaan; ?>
        </td>
      <tr><td>Motif Kejahatan </td>
            <td>
            
            <?php echo $motif; ?>
        </td>
      <tr><td>Tanggal Dilaporkan</td>
            <td><?php echo $kejadian_tanggal_lapor; ?>
        </td>
      <tr><td>Jam Dilaporkan</td>
            <td><?php echo $kejadian_jam_lapor; ?>
        </td>


      </tr>


     <tr class="separator"> <td colspan="2"> <b> PENERIMA LAPORAN </b>  </td> </tr>
      <tr>
<td>Nama </td>
            <td><?php echo $pen_lapor_nama; ?>
        </td>
      <tr><td>Pangkat </td>
            <td>
            <?php echo $penerima_pangkat; ?>
        </td>
      <tr>
            <td>NRP </td>
            <td><?php echo $pen_lapor_nrp; ?>
        </td>
     
      <tr><td>Jabatan </td>
            <td><?php echo $pen_lapor_jabatan; ?>
        </td>


 <tr class="separator"> <td colspan="2"> <b> TERLAPOR/TERSANGKA </b>  </td> </tr>
 <tr> <td colspan="2">



<table width="100%"  border="0" class="table table-striped 
             table-bordered table-hover dataTable no-footer" id="terlapor1" role="grid">
<thead>
   <tr >

        <th width="10%">NAMA</th>
        <th width="12%">TGL. LAHIR</th>
        <th width="15%">TMP. LAHIR</th>
        <th width="10%">AGAMA</th>
        <th width="10%">SUKU</th>
        <th width="12%">PEKERJAAN</th>
        <th width="30%">ALAMAT</th>
        
      
    </tr>
   
</thead>
</table>

 </td> </tr>



 <tr class="separator"> <td colspan="2"> <b> SAKSI </b>  </td> </tr>
 <tr> <td colspan="2">
 

<table width="100%"  border="0" class="table table-striped 
             table-bordered table-hover dataTable no-footer" id="saksi3" role="grid">
<thead>
   <tr >

        <th width="10%">NAMA</th>
        <th width="12%">TGL. LAHIR</th>
        <th width="15%">TMP. LAHIR</th>
        <th width="10%">AGAMA</th>
        <th width="10%">SUKU</th>
        <th width="12%">PEKERJAAN</th>
        <th width="30%">ALAMAT</th>
        
      
    </tr>
   
</thead>
</table>

 </td> </tr> 



 <tr class="separator"> <td colspan="2"> <b> KORBAN </b>  </td> </tr>
 <tr> <td colspan="2">
 

<table width="100%"  border="0" class="table table-striped 
             table-bordered table-hover dataTable no-footer" id="korban3" role="grid">
<thead>
   <tr >

        <th width="10%">NAMA</th>
        <th width="12%">TGL. LAHIR</th>
        <th width="15%">TMP. LAHIR</th>
        <th width="10%">AGAMA</th>
        <th width="10%">SUKU</th>
        <th width="12%">PEKERJAAN</th>
        <th width="30%">ALAMAT</th>
        
      
    </tr>
   
</thead>
</table>

 </td> </tr> 






 <tr class="separator"> <td colspan="2"> <b> BARANG BUKTI </b>  </td> </tr>
 <tr> <td colspan="2">
 

<table width="100%"  border="0" class="table table-striped 
             table-bordered table-hover dataTable no-footer" id="barbuk3" role="grid">
<thead>
   <tr >

        <th width="90%">BARANG BUKTI</th>         
        
      
    </tr>
   
</thead>
</table>

 </td> </tr> 



      <tr class="separator"> <td colspan="2"> <b> MENGETAHUI </b>  </td> </tr>
      <tr><td>Nama </td>
            <td> <?php echo $mengetahui_nama ?> </td>
      <tr><td>Pangkat </td>
            <td><?php echo $mengetahui_pangkat ?></td>

          
      <tr><td>NRP </td>
            <td><?php echo $mengetahui_nrp ?>  </td>
      <tr><td>Jabatan </td>
            <td><?php echo $mengetahui_jabatan ?>   </td>
     
       
  
    </table>



     
 
