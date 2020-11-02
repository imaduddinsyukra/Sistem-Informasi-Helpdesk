<?php
date_default_timezone_set('Asia/Jakarta');
$bulan=date("m");
$tahun=date("Y");
ob_start();
//Koneksi ke database
include("../../config/koneksi.php");
?>
<style>
td {
    padding: 3px 5px 3px 5px;
    border-right: 1px solid #666666;
    border-bottom: 1px solid #666666;
}
 
.head td {
    font-weight: bold;
    font-size: 12px;
    background: #b7f0ff; 
}
 
table .main tbody tr td {
    font-size: 12px;
}
 
table, table .main {
    width: 100%;
    border-top: 1px solid #666;
    border-left: 1px solid #666;
    border-collapse: collapse;
		background: #fff;
}
 
h1 {
    font-size:20px;
}
</style>
 </head>
 <body>
<?php
$sqll = "select * from trouble ORDER BY id_contact DESC";
$resultt = mysql_query($sqll);
if(mysql_num_rows($resultt) > 0){


?>
            <h3 align="center">Laporan Pengaduan Troubleshot Bulan <?php echo $bulan;?> Tahun <?php echo $tahun;?></h3>
            <br><br>
            <b>Total Pengaduan : </b><?php 
              $query  =mysql_query("SELECT COUNT(id_contact) as jumlah FROM trouble where month(tgl_lapor)='$bulan' and year(tgl_lapor)='$tahun'");
                            $tampil =mysql_fetch_array($query);
                            echo $tampil['jumlah'];
            ?>
            <div>&nbsp;</div>
<table width="100%" style="width:100%">
<thead>
<tr class="head" style="border:1">
<th style="border:1"><p align="center">No.</p></th>
        <th style="border:1"><p align="center">Nama</p></th>
        <th style="border:1"><p align="center">Email</p></th>
         <th style="border:1"><p align="center">No. HP</p></th>
         <th style="border:1"><p align="center">Judul Pesan</p></th>
         <th style="border:1"><p align="center">Isi Pesan</p></th>
         <th style="border:1"><p align="center">Tanggal Pelaporan</p></th>
         <th style="border:1"><p align="center">Status</p></th>
         <th style="border:1"><p align="center">Tanggal Penanganan</p></th>
         </tr>
                 </thead>
               <tbody style="border:1">
       <?php
$nomor=1;
while($trouble = mysql_fetch_array($resultt)){?>
       <tr>
         <td style="border:1" align="center"><?php echo $nomor++; ?></td>
         <td style="border:1" align="center"><?php echo $trouble['nama'];?></td>
         <td style="border:1" align="center"><?php echo $trouble['email'];?></td>
         <td style="border:1" align="center"><?php echo $trouble['no_hp'];?></td>
         <td style="border:1" align="center"><?php echo $trouble['subjek'];?></td>
         <td style="border:1" align="center"><?php echo $trouble['pesan'];?></td>
         <td style="border:1" align="center"><?php echo $trouble['tgl_lapor'];?></td>
         <td style="border:1" align="center">
         <?php 
         if($trouble['status']=='1'){
          echo "Sudah Ditangani";
         }else{
         echo "<font color='red'>Belum Ditangani</font>";
       }
         ;?></td>
         <td style="border:1" align="center">
         <?php 
         if($trouble['status']=='1'){
          echo $trouble['tgl_solved'];
         }else{
         echo "<font color='red'>Mohon Melakukan Penanganan Terlebih Dahulu</font>";
       }
         ;?></td>
       </tr>
       <?php } ?>
       </tbody>
     </table>
     <?php
}else{
echo 'Data not found!';
echo mysql_error();
}
?>
<?php
 $header = '<p align="right"><img src="../../img/logo.png" width="170" height="80" /></p>

';

$footer = '<table cellpadding=0 cellspacing=0 style="border:none;">
           <tr><td style="margin-right:-5px;border:none;" align="left">
           Dicetak: '.date("d-m-Y H:i").'</td>
		   <td style="margin-right:-5px;border:none;" align="right">
           Halaman: {PAGENO} / {nb}</td></tr></table>';            

$out = ob_get_contents();
ob_end_clean();
include("../../lib/mpdf/mpdf.php");
$mpdf=new mPDF('utf-8', "F4-L", 9 ,'Arial', 16, 16, 56, 16, 16, 4);
$mpdf->SetTitle("Laporan Trouble");$mpdf->SetDisplayMode('fullpage');
$mpdf->setHTMLHeader($header);
$mpdf->setHTMLFooter($footer);
$stylesheet = file_get_contents('../../lib/mpdf/mpdf.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($out);
$mpdf->Output();
?>
</body>
</html>