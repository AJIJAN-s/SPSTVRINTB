<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $ja[19].' tinjauan esok'; ?></title>
    <meta charset="utf-8">
  </head>

  <body>
    <table width="100%" style="font-family: arial">
      <tr>
        <td style="text-align: center; width: 60%;"><font size="3" style="font-weight: bold;">TINJAUAN ACARA TVRI NTB ESOK</font></td>
      </tr>
      <tr>
        <td style="text-align: center; width: 60%;"><font size="4" style="font-weight: bold;">HARI TANGGAL : <?php echo "$hari, $ja[18]"; ?></font></td>
      </tr>
    </table>
    <br>
    <table style="font-family: arial" id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0" border="1px">
      <thead>
        <tr>
          <th>No.</th>
          <th>JAM</th>
          <th>MATA ACARA</th>
          <th>DURASI</th>
          <th>KARAKTER SIARAN</th>
          <th>SUMBER AUDIO/VIDEO</th>
        </tr>
      </thead>
      <tbody>
                        <?php $i = 1; foreach ($tambah->result() as $key) { ?>
                        <tr style="height: 40px">
                          <td style="text-align: center;"><?php echo $i++; ?></td>
                          <td style="text-align: center;"><?php echo $key->jam; ?></td>
                          <td><font style="text-transform: uppercase;"><b><big><?php echo $key->nama; ?></big></b></font></td>
                          <td style="text-align: center;"><?php echo $key->durasi; ?></td>
                          <td style="text-align: center;"><?php echo $key->karakter; ?></td>
                          <td style="text-align: center;"><?php echo $key->sumber; ?></td>
                        </tr>
                        <?php } ?>

                        <?php foreach ($tambah3->result() as $key3) { ?>
                        <tr>
                          <td style="text-align: center;"><?php echo $i++; ?></td>
                          <td style="text-align: center;"><?php echo $key3->jam_st; ?></td>
                          <td><?php echo $key3->nama_st; ?></td>
                          <td style="text-align: center;"><?php echo $key3->durasi_st; ?></td>
                          <td style="text-align: center;"><?php echo $key3->karakter_st; ?></td>
                          <td style="text-align: center;"><?php echo $key3->sumber_st; ?></td>
                        </tr>
                        <?php } ?>
      </tbody>
    </table>
    <br>
    <p>Kerbat Kerja Penyiaran : <?php echo "$ja[19]"; ?></p>
    <table style="font-family: arial" width="70%" class="table table-striped table-bordered" cellspacing="0" border="1px">
      <tr>
        <td>Pengarah Siaran</td>
        <td>:</td>
        <td><?php echo "$ja[0]"; ?></td>
      </tr>
      <tr>
        <td>Pengarah Acara Berita</td>
        <td>:</td>
        <td><?php echo "$ja[1]"; ?></td>
      </tr>
      <tr>
        <td>Pengarah Acara Siaran</td>
        <td>:</td>
        <td><?php echo "$ja[2]"; ?></td>
      </tr>
      <tr>
        <td>Ass. Pengarah Acara</td>
        <td>:</td>
        <td><?php echo "$ja[3]"; ?></td>
      </tr>
      <tr>
        <td>Penyusun Rundown</td>
        <td>:</td>
        <td><?php echo "$ja[4]"; ?></td>
      </tr>
      <tr>
        <td>Operator FTP</td>
        <td>:</td>
        <td><?php echo "$ja[5]"; ?></td>
      </tr>
      <tr>
        <td>Penata Rias</td>
        <td>:</td>
        <td><?php echo "$ja[6]"; ?></td>
      </tr>
      <tr>
        <td>Pengarah Teknik</td>
        <td>:</td>
        <td><?php echo "$ja[7]"; ?></td>
      </tr>
      <tr>
        <td>FPU / Pemancar</td>
        <td>:</td>
        <td><?php echo "$ja[8]"; ?></td>
      </tr>
      <tr>
        <td>Kamerawan</td>
        <td>:</td>
        <td><?php echo "$ja[9]"; ?></td>
      </tr>
      <tr>
        <td>Penata Suara</td>
        <td>:</td>
        <td><?php echo "$ja[10]"; ?></td>
      </tr>
      <tr>
        <td>Penata Cahaya</td>
        <td>:</td>
        <td><?php echo "$ja[11]"; ?></td>
      </tr>
      <tr>
        <td>Opr. Chargen/VTR</td>
        <td>:</td>
        <td><?php echo "$ja[12]"; ?></td>
      </tr>
      <tr>
        <td>Manajer Unit</td>
        <td>:</td>
        <td><?php echo "$ja[13]"; ?></td>
      </tr>
      <tr>
        <td>Editor Berita</td>
        <td>:</td>
        <td><?php echo "$ja[14]"; ?></td>
      </tr>
      <tr>
        <td>Penata Artistik</td>
        <td>:</td>
        <td><?php echo "$ja[15]"; ?></td>
      </tr>
      <tr>
        <td>Penata Set</td>
        <td>:</td>
        <td><?php echo "$ja[16]"; ?></td>
      </tr>
      <tr>
        <td>Pemandu Gambar</td>
        <td>:</td>
        <td><?php echo "$ja[17]"; ?></td>
      </tr>
    </table>
    <br><br>
    <table width="100%">
      <tr>
        <td style="text-align: center;">Kepala Seksi Program dan Peng. Usaha</td>
        <td style="text-align: center;">Kepala Sub Seksi Program</td>
      </tr>
      <tr>
        <td style="text-align: center;"><img src="<?php echo base_url()?>asset/img/ttd.png"></td>
        <td style="text-align: center;"><img src="<?php echo base_url()?>asset/img/ttd.png"></td>
      </tr>
      <tr>
        <td style="text-align: center;"><u>Mukas Suarsana</u></td>
        <td style="text-align: center;"><u>Alfriadi</u></td>
      </tr>
      <tr>
        <td style="text-align: center;">NIP</td>
        <td style="text-align: center;">NIP</td>
      </tr>
    </table>
  </body>
</html>

<script type="text/javascript">
var css = '@page { size: potrait; margin: 5mm 20mm 5mm 20mm; scale: 100;}',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

style.type = 'text/css';
style.media = 'print';

if (style.styleSheet){
  style.styleSheet.cssText = css;
} else {
  style.appendChild(document.createTextNode(css));
}

head.appendChild(style);  
  window.print();
</script>