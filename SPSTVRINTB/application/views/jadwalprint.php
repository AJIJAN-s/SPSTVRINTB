<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $tanggal; ?></title>
    <meta charset="utf-8">
  </head>

  <body>
<div id="">
    <table width="100%" style="font-family: arial">
      <tr>
        <td style="text-align: center; width: 20%;" rowspan="3"><img src="<?php echo base_url()?>asset/img/TVRI3.png"></td>
        <td style="text-align: center; width: 60%;"><font size="3" style="font-weight: bold;">TELEVISI REPUBLIK INDONESIA STASIUN NTB</font></td>
        <td style="text-align: center; width: 20%;"></td>
      </tr>
      <tr>
        <td style="text-align: center; width: 60%;"><font size="3" style="font-weight: bold;">PEDOMAN PENYELENGGARAAN SIARAN LOKAL</font></td>
        <td style="text-align: center; width: 20%;"></td>
      </tr>
      <tr>
        <td style="text-align: center; width: 60%;"><font size="4" style="font-weight: bold;">HARI TANGGAL : <?php echo "$hari, $tanggal"; ?></font></td>
        <td style="text-align: center; width: 20%;"></td>
      </tr>
      <tr>
        <td></td>
        <td style="text-align: center; width: 60%;"><font size="2">HARI RAYA NASIONAL : <?php echo "$hrnasional"; ?></font></td>
        <td style="text-align: center; width: 20%;"></td>
      </tr>
    </table>
    <br>
    <table style="font-family: arial" width="100%" border="1px" cellspacing="0">
      <tr>
        <td style="text-align: center; border-radius: 10px"><font size="1">TIPS HARI INI : <?php echo "$tipsharian"; ?></font></td>
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
        <?php $i=1; foreach ($tambah2->result() as $key2) { ?>
        <tr>
          <td style="text-align: center;"><font size="2"><?php echo $i++; ?></font></td>
          <td style="text-align: center;"><font size="2"><?php echo $key2->jam_st; ?></font></td>
          <td><font size="2"><?php echo $key2->nama_st; ?></font></td>
          <td style="text-align: center;"><font size="2"><?php echo $key2->durasi_st; ?></font></td>
          <td style="text-align: center;"><font size="2"><?php echo $key2->karakter_st; ?></font></td>
          <td style="text-align: center;"><font size="2"><?php echo $key2->sumber_st; ?></font></td>
        </tr>
        <?php } ?>
        <?php foreach ($tambah->result() as $key) { ?>
        <tr>
          <td style="text-align: center;"><font size="2"><?php echo $i++; ?></font></td>
          <td style="text-align: center;"><font size="2"><?php echo $key->jam; ?></font></td>
          <td>
            <font style="text-transform: uppercase;"><big><b><?php echo $key->nama; ?></b></big></font>
            <table width="100%" cellspacing="0" border="1px" style="border-right: none; border-left: none; border-bottom: none;">
              <?php
                $desk = $this->db->query('SELECT * FROM deskripsi WHERE id_acara='.$key->id.';');
                foreach ($desk->result() as $key7) { 
                  echo "
                    <tr>
                    <td colspan=6><font size=2>$key7->nm_deskripsi</font></td>
                    </tr>";
                }               
                $tema = $this->db->query('SELECT * FROM tema WHERE id_acara='.$key->id.';');
                foreach ($tema->result() as $key5) { 
                  echo "
                    <tr>
                    <td width=20%><font size=2>tema</font></td>
                    <td width=3%>:</td>
                    <td colspan=4><font size=2>$key5->nama_tema</font></td>
                    </tr>";
                }
                $bersama = $this->db->query('SELECT * FROM bersama WHERE id_acara='.$key->id.';');
                foreach ($bersama->result() as $key6) { 
                  echo "
                    <tr>
                    <td width=20%><font size=2>bersama</font></td>
                    <td width=3%>:</td>
                    <td colspan=4><font size=2>$key6->nama_br</font></td>
                    </tr>";
                }
              ?>
                              
              <?php
                $tambah4 = $this->db->query('SELECT * FROM iklan WHERE idiklan IN (SELECT id_iklan FROM iklan_acara WHERE id_acara IN ('.$key->id.')) ORDER BY jam_iklan ASC;');

                foreach ($tambah4->result() as $key4) { ?> 
                  <tr>
                    <td width="20%"><font size="2"><?php echo $key4->jam_iklan ?></font></td>
                    <td width="3%">:</td>
                    <td width="30%"><font size="2"><?php echo $key4->nama_iklan ?></font></td>
                    <td width="3%">:</td>
                    <td><font size="1"><?php echo $key4->deskripsi_iklan ?></font></td>
                  </tr>
              <?php } ?>
            </table>
          </td>
          <td style="text-align: center;"><font size="2"><?php echo $key->durasi; ?></font></td>
          <td style="text-align: center;"><font size="2"><?php echo $key->karakter; ?></font></td>
          <td style="text-align: center;"><font size="2"><?php echo $key->sumber; ?></font></td>
        </tr>
        <?php } ?>
        <?php foreach ($tambah3->result() as $key3) { ?>
          <tr>
            <td style="text-align: center;"><font size="2"><?php echo $i++; ?></font></td>
            <td style="text-align: center;"><font size="2"><?php echo $key3->jam_st; ?></font></td>
            <td><font size="2"><?php echo $key3->nama_st; ?></font>
              <table width="100%" cellspacing="0" border="1px" style="border-right: none; border-left: none; border-bottom: none;">
                <?php
                  $deskst = $this->db->query('SELECT * FROM desk_statis WHERE id_st='.$key3->idst.';');
                  foreach ($deskst->result() as $key8) { 
                  echo "
                    <tr>
                    <td>$key8->desk_st</td>
                    </tr>";
                  }
                ?>
              </table>
            </td>
            <td style="text-align: center;"><font size="2"><?php echo $key3->durasi_st; ?></font></td>
            <td style="text-align: center;"><font size="2"><?php echo $key3->karakter_st; ?></font></td>
            <td style="text-align: center;"><font size="2"><?php echo $key3->sumber_st; ?></font></td>
          </tr>
        <?php } ?>
      </tbody>
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
</div> 
  </body>
</html>

<script type="text/javascript">
var css = '@page { size: potrait; margin: 5mm 20mm 5mm 20mm; scale: 85;}',
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