<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form_skkm_<?php echo $user->nim;?></title>
    
   <style>
   table {margin-left: 20px }
   table td {}
   </style>
  <style>@page { size: A4 }</style>

</head>
<body>

<img src="<?php echo base_url()?>assets/img/form/header.png" style="margin-left: -10px">
<h3 style="text-align: center;">FORM SATUAN KREDIT KEGIATAN MAHASISWA (SKKM)</h3>

<table cellspacing="4">
  <tr >
    <td colspan="5" >Saya yang bertandatangan dibawah ini :</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td rowspan="6" style="width:120px;">
      <img src="<?php echo base_url() .'assets/img/pengguna/'.$user->foto ?>" style="width:100px; height:110px">
    </td>
    <td style="width:120px;" >Nama</td>
    <td >:</td>
    <td style="text-align: left;width:220px;"><?php echo $user->nama_lengkap;?></td>
    <td rowspan="6" style="width:120px;">
      <img src="<?php echo base_url() .'assets/img/form/header.png' ?>" style="width:100px; height:100px">
    </td>
  </tr>
  <tr>
    <td>NIM</td>
    <td>:</td>
    <td><?php echo $user->nim;?></td>
  </tr>
  <tr>
    <td>Jurusan</td>
    <td>:</td>
    <td ><?php echo $user->nama_jurusan;?></td>
  </tr>
  <tr>
    <td>Progam Studi</td>
    <td>:</td>
    <td><?php echo $user->nama_prodi;?></td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td>:</td>
    <td><?php echo $user->telpon;?></td>
  </tr>
  <tr>
    <td>Tahun masuk</td>
    <td>:</td>
    <td><?php echo $user->tahun_masuk;?></td>
  </tr>
</table>

<br>
<br>
<table>
  <tr>
    <td style="width:600px;">Telah mengikuti kegiatan di dalam maupun di luar kampus Politeknik Negeri Malang, sebagai berikut :  </td>
  </tr>
</table>

<br>

<table border="1" cellpadding="7" cellspacing="0">
<tr style="background-color: #14B9D5;color: white;font-style: bold">
  <td style="width:20px">NO</td>
  <td style="width:250px">NAMA KEGIATAN</td>
  <td style="width:250px">JABATAN/PRESTASI</td>
  <td style="width:50px">POINT </td>
</tr>
<?php $no=1; 
                    foreach($point as $p){ ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $p->nama_kegiatan; ?></td>
                        <td><?php echo $p->jabatan ; ?></td>
                        <td><center><?php echo $p->point ; ?></center></td>
                    </tr>
                    <?php $no++; } ?>
                    <tr>
                      <td colspan="3"><center>JUMLAH ANGKA KREDIT</center></td>
                      <td><center><?php echo $total_point; ?></center></td>
                    </tr>
</table>
<br>
<br>
<font style="margin-left: 20px">Form ini telah diketahui, diverifikasi dan disetujui oleh:</font>
<br>
<br>
<br>
<table border="1" cellpadding="7" cellspacing="0">
  <tr>
    <td width="195px"><center><b>Himpunan</b></center></td>
    <td width="195px"><center><b>BEM</b></center></td>
    <td width="195px"><center><b>DPK</b></center></td>
  </tr>
  <tr>
    <td height="85px"><center><b>Himpunan</b></center></td>
    <td height="85px"><center><b>BEM</b></center></td>
    <td height="85px"><center><b>DPK</b></center></td>
  </tr>
</table>
<script type="text/javascript">
  window.print();
</script>
</body>
</html>