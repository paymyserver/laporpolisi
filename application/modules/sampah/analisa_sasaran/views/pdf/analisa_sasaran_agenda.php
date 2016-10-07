<?php 
$setting = $this->cm->get_setting();

?>
<style>
* {
	font-size:10px;
	margin:0px;
	padding:0px;
}


table.cetak th {
	border : 1px solid #000;
/*	border:#000 solid 3px;
	border-style:double;*/
	padding:5px;
}

table.cetak td {
	 
	border:0.5px solid #000;
	padding:5px;
	
} 

hr {
	margin:10px 0px;
}
</style>

<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="50%" align="left"><strong><u>KEJAKSAAN NEGERI MAKASSAR</u></strong></td>
    <td width="50%" align="right">IN.3</td>
  </tr>
</table><br />

 

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" align="center"><p align="center"><strong>DATA ANALISA SASARAN</strong></p></td>
  </tr>
  <tr>
    <td align="center"><strong>BULAN <?php echo $bulan; ?> TAHUN <?php echo $tahun; ?> </strong></td>
  </tr>
</table>
<br /><br />
<table width="100%"  cellspacing="0" cellpadding="7" class="cetak">
  <tr>
    <th width="5%" height="30%" align="center" scope="col"><strong><br />
    NO.</strong></th>
    <th width="10%" align="center" scope="col"><strong>TANGGAL</strong></th>
    <th width="33%" align="center" scope="col"><strong>SASARAN</strong></th>
    <th width="35%" align="center" scope="col"><strong>KONDISI DAN SITUASI SASARAN</strong></th>
    <th width="17%" align="center" scope="col"><strong>YANG MELAPORKAN</strong></th>
  </tr>
  <tr>
    <th width="5%" height="30%" align="center" bgcolor="#999999" scope="col">1</th>
    <th width="10%" align="center" bgcolor="#999999" scope="col">2</th>
    <th width="33%" align="center" bgcolor="#999999" scope="col">3</th>
    <th width="35%" align="center" bgcolor="#999999" scope="col">4</th>
    <th width="17%" align="center" bgcolor="#999999" scope="col">5</th>
  </tr>
   <?php  
  $n=0;
  foreach($rec_agenda->result() as $row) : 
  $n++;
  ?>
  <tr>
    <td width="5%" align="center" scope="col"><?php echo $n; ?></td>
    <td width="10%" scope="col"><?php echo flipdate($row->tanggal); ?></td>
    <td width="33%" scope="col" align="justify"><?php echo $row->sasaran; ?></td>
    <td width="35%" scope="col" align="justify"><?php echo $row->kondisi; ?></td>
    <td width="17%" scope="col"><?php echo $row->pelaksana_nama; ?></td>
  </tr>
  
  <?php endforeach; ?>
</table>
<p>&nbsp;</p>
