          <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">
                        <h3 class="animated fadeInLeft">Jadwal Lokal</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Mataram, NTB, Indonesia</p>

                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url();?>tambah/h/0">Senin</a></li>
                            <li><a href="<?php echo base_url();?>tambah/h/1" class="active">Selasa</a></li>
                            <li><a href="<?php echo base_url();?>tambah/h/2">Rabu</a></li>
                            <li><a href="<?php echo base_url();?>tambah/h/3">Kamis</a></li>
                            <li><a href="<?php echo base_url();?>tambah/h/4">Jumat</a></li>
                            <li><a href="<?php echo base_url();?>tambah/h/5">Sabtu</a></li>
                            <li><a href="<?php echo base_url();?>tambah/h/6">Minggu</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                          <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Mataram</h3>
                          <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
                        </div>
                        <div class="col-md-6 col-sm-6">
<!--                            <div class="wheather">
                            <div class="stormy rainy animated pulse infinite">
                              <div class="shadow">
                                
                              </div>
                            </div>
                            <div class="sub-wheather">
                              <div class="thunder">
                                
                              </div>
                              <div class="rain">
                                  <div class="droplet droplet1"></div>
                                  <div class="droplet droplet2"></div>
                                  <div class="droplet droplet3"></div>
                                  <div class="droplet droplet4"></div>
                                  <div class="droplet droplet5"></div>
                                  <div class="droplet droplet6"></div>
                                </div>
                            </div>
                          </div> -->
                          <div class="wheather">
                            <div class="sun animated pulse infinite">
                            </div>
                            <div class="cloudy animated pulse infinite">
                            </div>
                          </div>                          
                        </div>                   
                    </div>
                  </div>
                  <div class="panel box-shadow-none content-header">
                      <div class="panel-body">
                        <div class="col-md-12">
                            <p class="animated fadeInUp">
                              Tambah <span class="fa-angle-right fa"></span> 
                              Jadwal Lokal <span class="fa-angle-right fa"></span> <span class="text-info">
                              <?php 
                                if ($hari==0) {echo "Senin";}
                                else if ($hari==1) {echo "Selasa";}
                                else if ($hari==2) {echo "Rabu";}
                                else if ($hari==3) {echo "Kamis";}
                                else if ($hari==4) {echo "Jumat";}
                                else if ($hari==5) {echo "Sabtu";}
                                else if ($hari==6) {echo "Minggu";}
                                else {echo "Senin";} 
                              ?>
                            </span>
                            </p>
                        </div>
                      </div>
                  </div>                                      
                </div>

              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>JADWAL</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>JAM</th>
                          <th>MATA ACARA</th>
                          <th>DURASI</th>
                          <th>KARAKTER SIARAN</th>
                          <th>SUMBER AUDIO/VIDEO</th>
                          <th>AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach ($tambah2->result() as $key2) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $key2->jam_st; ?></td>
                          <td>
                            <?php echo $key2->nama_st; ?>
                            <table width="100%">
                            <?php
                              $deskst = $this->db->query('SELECT * FROM desk_statis WHERE id_st='.$key2->idst.';');
                                foreach ($deskst->result() as $key8) { 
                                  echo "
                                  <tr>
                                  <td>$key8->desk_st</td>
                                  </tr>";
                              }
                            ?>
                            </table>
                          </td>
                          <td><?php echo $key2->durasi_st; ?></td>
                          <td><?php echo $key2->karakter_st; ?></td>
                          <td><?php echo $key2->sumber_st; ?></td>
                          <td>
                            <div style="margin-top:5px;">
                            <! -- MODALS -->
                            <div class="showback">
                              <!-- Button trigger modal -->
                              <button onclick="modalEdit4('<?php echo $key2->idst; ?>', '<?php echo $key2->nama_st; ?>', '<?php echo $key2->jam_st; ?>', '<?php echo $key2->durasi_st; ?>', '<?php echo $key2->karakter_st; ?>', '<?php echo $key2->sumber_st; ?>', '<?php $deskst = $this->db->query('SELECT * FROM desk_statis WHERE id_st='.$key2->idst.';'); foreach ($deskst->result() as $key8) {  echo $key8->desk_st; } ?>')" class="btn ripple btn-gradient btn-info" data-toggle="modal" data-target="#myModal4">
                                <div>
                                  <span class="fa fa-edit"></span>
                                  <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                </div>
                              </button>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                    </div>
                                    <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>tambah/edit4">
                                    <div class="modal-body">
                                      <div hidden="true">
                                        <input type="text" class="form-text" id="idst" name="idst" required>
                                        <span class="bar"></span>
                                        <label>ID</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="nst" name="nst" required>
                                        <span class="bar"></span>
                                        <label>Nama</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="jst" name="jst" required>
                                        <span class="bar"></span>
                                        <label>Jam</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="dst" name="dst" required>
                                        <span class="bar"></span>
                                        <label>Durasi</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="kst" name="kst" list="karlist" required>
                                        <span class="bar"></span>
                                        <label>Karakter</label>
                                        <datalist id="karlist">
                                          <?php foreach ($karac->result() as $keyk) { ?>
                                          <option><?php echo $keyk->karakter; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="sst" name="sst" list="sumlist" required>
                                        <span class="bar"></span>
                                        <label>Sumber Audio/Video</label>
                                        <datalist id="sumlist">
                                          <?php foreach ($sumac->result() as $keys) { ?>
                                          <option><?php echo $keys->sumber; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <textarea class="form-text" id="deskst" name="deskst" placeholder="Deskripsi (field kosong)"></textarea>
                                        <span class="bar"></span>
                                        <label>Deskripsi (Kosongkan Jika Tidak Ada)</label>
                                      </div>                                                                        
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>              
                            </div><!-- /showback -->
                            </div>
                            
                          </td>
                        </tr>
                        <?php } ?>
                        <?php foreach ($tambah->result() as $key) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $key->jam; ?></td>
                          <td>
                            <font style="text-transform: uppercase;">
                              <big><b><?php echo $key->nama; ?></b></big>
                            </font>
                            <table width="100%">
                              <?php 
                                $desk = $this->db->query('SELECT * FROM deskripsi WHERE id_acara='.$key->id.';');
                                foreach ($desk->result() as $key7) { 
                                  echo "
                                  <tr>
                                  <td colspan=6>$key7->nm_deskripsi </td>
                                  </tr>";
                                }
                                $tema = $this->db->query('SELECT * FROM tema WHERE id_acara='.$key->id.';');
                                foreach ($tema->result() as $key5) { 
                                  echo "
                                  <tr>
                                  <td>tema</td>
                                  <td>:</td>
                                  <td colspan=4>$key5->nama_tema </td>
                                  </tr>";
                                }
                                $bersama = $this->db->query('SELECT * FROM bersama WHERE id_acara='.$key->id.';');
                                foreach ($bersama->result() as $key6) { 
                                  echo "
                                  <tr>
                                  <td>bersama</td>
                                  <td>:</td>
                                  <td colspan=4> $key6->nama_br </td>
                                  </tr>";
                                }
                              // if ($key->tema!=null) {
                              //   echo "
                              //   <tr>
                              //   <td>tema</td>
                              //   <td>:</td>
                              //   <td colspan=3>$key->tema </td>
                              //   </tr>";
                              // }
                              ?>
                              
                              <?php 
                              // if ($key->bersama!=null) {
                              //   echo "
                              //   <tr>
                              //   <td>bersama</td>
                              //   <td>:</td>
                              //   <td colspan=3> $key->bersama </td>
                              //   </tr>";
                              // }
                              ?>
                              
                                <?php
                                // if ($key->id == 0) {
                                //   foreach ($tambah4->result() as $key4) { 
                                //     echo "
                                //   <tr>
                                //     <td>$key4->jam_iklan</td>
                                //     <td>:</td>
                                //     <td>$key4->nama_iklan</td>
                                //     <td>:</td>
                                //     <td>$key4->deskripsi_iklan</td>
                                //   </tr>";
                                //   } 
                                // } 
                                ?>
                                
                                <?php 
                                  $tambah4 = $this->db->query('SELECT * FROM iklan WHERE idiklan IN (SELECT id_iklan FROM iklan_acara WHERE id_acara IN ('.$key->id.')) ORDER BY jam_iklan ASC;');

                                  foreach ($tambah4->result() as $key4) { ?> 
                                  <tr>
                                      <td><?php echo $key4->jam_iklan ?></td>
                                      <td>:</td>
                                      <td><?php echo $key4->nama_iklan ?></td>
                                      <td>:</td>
                                      <td><?php echo $key4->deskripsi_iklan ?></td>
                                      <td>
                                        <div style="margin-top:5px;">
                                        <! -- MODALS -->
                                        <div class="showback">
                                          <!-- Button trigger modal -->
                                          <a href="#" onclick="modalEdit2('<?php echo $key->id; ?>', '<?php echo $key4->idiklan; ?>', '<?php echo $key4->jam_iklan; ?>', '<?php echo $key4->nama_iklan; ?>', '<?php echo $key4->deskripsi_iklan; ?>')" data-toggle="modal" data-target="#myModal2"><big><span class="fa fa-edit"></span></big></a>                              
                                          <!-- Modal -->
                                          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title" id="myModalLabel">Edit Iklan</h4>
                                                </div>
                                                <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>tambah/editiklan">
                                                <div class="modal-body">
                                                  <div hidden="true">
                                                    <input type="text" class="form-text" id="idac" name="idac" required>
                                                    <span class="bar"></span>
                                                    <label>ID Acara</label>
                                                  </div>                                                  
                                                  <div hidden="true">
                                                    <input type="text" class="form-text" id="iddd" name="idik" required>
                                                    <span class="bar"></span>
                                                    <label>ID</label>
                                                  </div>
                                                  <div class="form-group form-animate-text">
                                                    <input type="text" class="form-text" id="ji" name="ji2" required>
                                                    <span class="bar"></span>
                                                    <label>Jam</label>
                                                  </div>
                                                  <div class="form-group form-animate-text">
                                                    <input type="text" class="form-text" id="ni" name="ni2" required>
                                                    <span class="bar"></span>
                                                    <label>Nama Iklan</label>
                                                  </div>
                                                  <div class="form-group form-animate-text">
                                                    <textarea  class="form-text" id="di" name="di2" required></textarea>
                                                    <span class="bar"></span>
                                                    <label>Deskripsi Iklan</label>
                                                  </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                                </div>                                    
                                              </form>
                                              </div>
                                            </div>
                                          </div>              
                                        </div><!-- /showback -->
                                      </div>

                                      <div>
                                          <a href="<?php echo base_url();?>tambah/hapus/<?php echo $key4->idiklan; ?>/<?php echo $key->id; ?>"><big><span class="fa fa-trash"></span></big></a>
                                      </div>

                                      </td>
                                  </tr>
                                <?php } ?>
                            </table>
                          </td>
                          <td><?php echo $key->durasi; ?></td>
                          <td><?php echo $key->karakter; ?></td>
                          <td><?php echo $key->sumber; ?></td>
                          <td>
                            <div style="margin-top:5px;">
                            <! -- MODALS -->
                            <div class="showback">
                              <!-- Button trigger modal -->
                              <button onclick="modalEdit('<?php echo $key->id;?>', '<?php $desk = $this->db->query('SELECT * FROM deskripsi WHERE id_acara='.$key->id.';'); foreach ($desk->result() as $key7) {  echo $key7->nm_deskripsi; } ?>', '<?php $tema = $this->db->query('SELECT * FROM tema WHERE id_acara='.$key->id.';'); foreach ($tema->result() as $key5) {  echo $key5->nama_tema; } ?>', '<?php $bersama = $this->db->query('SELECT * FROM bersama WHERE id_acara='.$key->id.';'); foreach ($bersama->result() as $key6) { echo $key6->nama_br; } ?>', '<?php echo $key->karakter; ?>', '<?php echo $key->sumber; ?>')" class="btn ripple btn-gradient btn-info" data-toggle="modal" data-target="#myModal1">
                                <div>
                                  <span class="fa fa-edit"></span>
                                  <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                </div>
                              </button>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                    </div>
                                    <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>tambah/edit">
                                    <div class="modal-body">
                                      <div hidden="true">
                                        <input type="text" class="form-text" id="idd" name="id2" required>
                                        <span class="bar"></span>
                                        <label>ID</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="tem" name="tem2" placeholder="Tema (field kosong)">
                                        <span class="bar"></span>
                                        <label>Tema (Kosongkan Jika Tidak Ada)</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="ber" name="ber2" placeholder="Bersama (field kosong)">
                                        <span class="bar"></span>
                                        <label>Bersama (Kosongkan Jika Tidak Ada)</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="kar" name="kar2" list="karlist" required>
                                        <span class="bar"></span>
                                        <label>Karakter Siaran</label>
                                        <datalist id="karlist">
                                          <?php foreach ($karac->result() as $keyk) { ?>
                                          <option><?php echo $keyk->karakter; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="sumb" name="sumb2" list="sumlist" required>
                                        <span class="bar"></span>
                                        <label>Sumber Audio/Video</label>
                                        <datalist id="sumlist">
                                          <?php foreach ($sumac->result() as $keys) { ?>
                                          <option><?php echo $keys->sumber; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <textarea class="form-text" id="desk" name="desk2" placeholder="Deskripsi (field kosong)"></textarea>
                                        <span class="bar"></span>
                                        <label>Deskripsi (Kosongkan Jika Tidak Ada)</label>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>              
                            </div><!-- /showback -->
                            </div>

                            <div style="margin-top:5px;">
                            <! -- MODALS -->
                            <div class="showback">
                              <!-- Button trigger modal -->
                              <button onclick="modalAdd('<?php echo $key->id;?>')" class="btn ripple btn-gradient btn-success" data-toggle="modal" data-target="#myModal3">
                                <div>
                                  <span class="fa fa-plus"></span>
                                  <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                </div>
                              </button>                              
                              <!-- Modal -->
                              <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Tambah Iklan</h4>
                                    </div>
                                    <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>tambah/tambahiklan">
                                    <div class="modal-body">
                                      <div hidden="true">
                                        <input type="text" class="form-text" id="id2" name="id2" required>
                                        <span class="bar"></span>
                                        <label>ID</label>
                                      </div>                                      
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" name="ji2" list="jamiklist" required>
                                        <span class="bar"></span>
                                        <label>Jam</label>
                                        <datalist id="jamiklist">
                                          <?php foreach ($jamik->result() as $keyji) { ?>
                                          <option><?php echo $keyji->jam_iklan; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" name="ni2" list="namiklist" required>
                                        <span class="bar"></span>
                                        <label>Nama Iklan</label>
                                        <datalist id="namiklist">
                                          <?php foreach ($namik->result() as $keyni) { ?>
                                          <option><?php echo $keyni->nama_iklan; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" name="di2" list="desiklist" required>
                                        <span class="bar"></span>
                                        <label>Deskripsi Iklan</label>
                                        <datalist id="desiklist">
                                          <?php foreach ($desik->result() as $keydi) { ?>
                                          <option><?php echo $keydi->deskripsi_iklan; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save</button>
                                    </div>                                    
                                  </form>
                                  </div>
                                </div>
                              </div>              
                            </div><!-- /showback -->
                          </div>

                          </td>
                        </tr>
                        <?php } ?>
                        <?php foreach ($tambah3->result() as $key3) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $key3->jam_st; ?></td>
                          <td>
                            <?php echo $key3->nama_st; ?>
                            <table width="100%">
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
                          <td><?php echo $key3->durasi_st; ?></td>
                          <td><?php echo $key3->karakter_st; ?></td>
                          <td><?php echo $key3->sumber_st; ?></td>
                          <td>
                            <div style="margin-top:5px;">
                            <! -- MODALS -->
                            <div class="showback">
                              <!-- Button trigger modal -->
                              <button onclick="modalEdit4('<?php echo $key3->idst; ?>', '<?php echo $key3->nama_st; ?>', '<?php echo $key3->jam_st; ?>', '<?php echo $key3->durasi_st; ?>', '<?php echo $key3->karakter_st; ?>', '<?php echo $key3->sumber_st; ?>', '<?php $deskst = $this->db->query('SELECT * FROM desk_statis WHERE id_st='.$key3->idst.';'); foreach ($deskst->result() as $key9) {  echo $key9->desk_st; } ?>')" class="btn ripple btn-gradient btn-info" data-toggle="modal" data-target="#myModal4">
                                <div>
                                  <span class="fa fa-edit"></span>
                                  <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                </div>
                              </button>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                    </div>
                                    <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>tambah/edit4">
                                    <div class="modal-body">
                                      <div hidden="true">
                                        <input type="text" class="form-text" id="idst" name="idst" required>
                                        <span class="bar"></span>
                                        <label>ID</label>
                                      </div> 
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="nst" name="nst" required>
                                        <span class="bar"></span>
                                        <label>Nama</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="jst" name="jst" required>
                                        <span class="bar"></span>
                                        <label>Jam</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="dst" name="dst" required>
                                        <span class="bar"></span>
                                        <label>Durasi</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="kst" name="kst" list="karlist" required>
                                        <span class="bar"></span>
                                        <label>Karakter</label>
                                        <datalist id="karlist">
                                          <?php foreach ($karac->result() as $keyk) { ?>
                                          <option><?php echo $keyk->karakter; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="sst" name="sst" list="sumlist" required>
                                        <span class="bar"></span>
                                        <label>Sumber Audio/Video</label>
                                        <datalist id="sumlist">
                                          <?php foreach ($sumac->result() as $keys) { ?>
                                          <option><?php echo $keys->sumber; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="deskst" name="deskst">
                                        <span class="bar"></span>
                                        <label>Deskripsi (Kosongkan Jika Tidak Ada)</label>
                                      </div>                                                                        
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>              
                            </div><!-- /showback -->
                            </div>
                            
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                        </table>

                      </div>
                  </div>
                  <div class="panel-footer">

                            <! -- MODALS -->
                            <div class="showback">
                              <!-- Button trigger modal -->
                              <button class="btn btn-3d btn-info" data-toggle="modal" data-target="#myModal5">
                                <div>
                                  <span class="fa fa-print"> PRINT</span>
                                  <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                </div>
                              </button>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Silahkan Pillih Tanggal</h4>
                                    </div>
                                    <form target="_blank" class="cmxform" id="signupForm" method="post" action="<?php echo base_url()?>tambah/print/<?php echo $hari;?>">
                                    <div class="modal-body">
                                      <div class="form-group form-animate-text">
                                        <input type="date" class="form-text" id="tgl" name="tgl" required>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="hrn" name="hrn" required>
                                        <label>Hari Raya Nasional</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="tips" name="tips" list="tipslist" required>
                                        <!-- <textarea class="form-text" id="tips" name="tips" required></textarea> -->
                                        <label>Tips Hari ini</label>
                                        <datalist id="tipslist">
                                          <?php foreach ($tips->result() as $keyt) { ?>
                                          <option><?php echo $keyt->nama_tips; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div> 
                                    </div>                                                         
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">PRINT</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>              
                            </div><!-- /showback -->
                  </div>
                </div>
              </div>  
              </div>

              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>TINJAUAN ACARA ESOK</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NO.</th>
                          <th>JAM</th>
                          <th>MATA ACARA</th>
                          <th>DURASI</th>
                          <th>KARAKTER SIARAN</th>
                          <th>SUMBER AUDIO/VIDEO</th>
                          <th>EDIT</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach ($ttambah->result() as $key) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $key->jam; ?></td>
                          <td><font style="text-transform: uppercase;"><b><big><?php echo $key->nama; ?></big></b></font></td>
                          <td><?php echo $key->durasi; ?></td>
                          <td><?php echo $key->karakter; ?></td>
                          <td><?php echo $key->sumber; ?></td>
                          <td>
                            <div style="margin-top:5px;">
                            <! -- MODALS -->
                            <div class="showback">
                              <!-- Button trigger modal -->
                              <button onclick="modalEdit7('<?php echo $key->id;?>', '<?php echo $key->karakter; ?>', '<?php echo $key->sumber; ?>')" class="btn ripple btn-gradient btn-info" data-toggle="modal" data-target="#myModal7">
                                <div>
                                  <span class="fa fa-edit"></span>
                                  <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                </div>
                              </button>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                    </div>
                                    <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>tambah/editesok">
                                    <div class="modal-body">
                                      <div hidden="true">
                                        <input type="text" class="form-text" id="idesok" name="idesok" required>
                                        <span class="bar"></span>
                                        <label>ID</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="karesok" name="karesok" list="karlist" required>
                                        <span class="bar"></span>
                                        <label>Karakter Siaran</label>
                                        <datalist id="karlist">
                                          <?php foreach ($karac->result() as $keyk) { ?>
                                          <option><?php echo $keyk->karakter; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="sumbesok" name="sumbesok" list="sumlist" required>
                                        <span class="bar"></span>
                                        <label>Sumber Audio/Video</label>
                                        <datalist id="sumlist">
                                          <?php foreach ($sumac->result() as $keys) { ?>
                                          <option><?php echo $keys->sumber; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>
                            </div><!-- /showback -->
                            </div>
                          </td>
                        </tr>
                        <?php } ?>

                        <?php foreach ($tambah3->result() as $key3) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $key3->jam_st; ?></td>
                          <td><?php echo $key3->nama_st; ?></td>
                          <td><?php echo $key3->durasi_st; ?></td>
                          <td><?php echo $key3->karakter_st; ?></td>
                          <td><?php echo $key3->sumber_st; ?></td>
                          <td>
                           <div style="margin-top:5px;">
                            <! -- MODALS -->
                            <div class="showback">
                              <!-- Button trigger modal -->
                              <button onclick="modalEdit4('<?php echo $key3->idst; ?>', '<?php echo $key3->nama_st; ?>', '<?php echo $key3->jam_st; ?>', '<?php echo $key3->durasi_st; ?>', '<?php echo $key3->karakter_st; ?>', '<?php echo $key3->sumber_st; ?>', '<?php $deskst = $this->db->query('SELECT * FROM desk_statis WHERE id_st='.$key3->idst.';'); foreach ($deskst->result() as $key9) {  echo $key9->desk_st; } ?>')" class="btn ripple btn-gradient btn-info" data-toggle="modal" data-target="#myModal4">
                                <div>
                                  <span class="fa fa-edit"></span>
                                  <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                </div>
                              </button>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                    </div>
                                    <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>tambah/edit4">
                                    <div class="modal-body">
                                      <div hidden="true">
                                        <input type="text" class="form-text" id="idst" name="idst" required>
                                        <span class="bar"></span>
                                        <label>ID</label>
                                      </div> 
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="nst" name="nst" required>
                                        <span class="bar"></span>
                                        <label>Nama</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="jst" name="jst" required>
                                        <span class="bar"></span>
                                        <label>Jam</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="dst" name="dst" required>
                                        <span class="bar"></span>
                                        <label>Durasi</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="kst" name="kst" list="karlist" required>
                                        <span class="bar"></span>
                                        <label>Karakter</label>
                                        <datalist id="karlist">
                                          <?php foreach ($karac->result() as $keyk) { ?>
                                          <option><?php echo $keyk->karakter; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="sst" name="sst" list="sumlist" required>
                                        <span class="bar"></span>
                                        <label>Sumber Audio/Video</label>
                                        <datalist id="sumlist">
                                          <?php foreach ($sumac->result() as $keys) { ?>
                                          <option><?php echo $keys->sumber; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="deskst" name="deskst">
                                        <span class="bar"></span>
                                        <label>Deskripsi (Kosongkan Jika Tidak Ada)</label>
                                      </div>                                                                        
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>              
                            </div><!-- /showback -->
                            </div>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                        </table>
                      </div>
                      <br>

              <div class="col-md-12">
                <div class="col-md-12 panel">
                  <div class="col-md-12 panel-heading">
                    <h4>Kerabat Kerja Penyiaran</h4>
                  </div>
                  <form target="_blank" class="cmxform" id="signupForm" method="post" action="<?php echo base_url()?>tambah/print2/<?php echo $hari;?>">
                    <div class="col-md-12 panel-body">
                      <div class="col-md-12">
                       <div class="col-md-6">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="ps" list="pslist" required>
                          <span class="bar"></span>
                          <label>Pengarah Siaran</label>
                          <datalist id="pslist">
                            <?php foreach ($ps->result() as $keyps) { ?>
                              <option><?php echo $keyps->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="pab" list="pablist" required>
                          <span class="bar"></span>
                          <label>Pengarah Acara Berita</label>
                          <datalist id="pablist">
                            <?php foreach ($pab->result() as $keypab) { ?>
                              <option><?php echo $keypab->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="pas" list="paslist" required>
                          <span class="bar"></span>
                          <label>Pengarah Acara Siaran</label>
                          <datalist id="paslist">
                            <?php foreach ($pas->result() as $keypas) { ?>
                              <option><?php echo $keypas->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="apa" list="apalist" required>
                          <span class="bar"></span>
                          <label>Ass. Pengarah Acara</label>
                          <datalist id="apalist">
                            <?php foreach ($apa->result() as $keyapa) { ?>
                              <option><?php echo $keyapa->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="pr" list="prlist" required>
                          <span class="bar"></span>
                          <label>Penyusun Rundown</label>
                          <datalist id="prlist">
                            <?php foreach ($pr->result() as $keypr) { ?>
                              <option><?php echo $keypr->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="of" list="oflist" required>
                          <span class="bar"></span>
                          <label>Operator FTP</label>
                          <datalist id="oflist">
                            <?php foreach ($of->result() as $keyof) { ?>
                              <option><?php echo $keyof->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="prs" list="prslist" required>
                          <span class="bar"></span>
                          <label>Penata Rias</label>
                          <datalist id="prslist">
                            <?php foreach ($prs->result() as $keyprs) { ?>
                              <option><?php echo $keyprs->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="pt" list="ptlist" required>
                          <span class="bar"></span>
                          <label>Pengarah Teknik</label>
                          <datalist id="ptlist">
                            <?php foreach ($pt->result() as $keypt) { ?>
                              <option><?php echo $keypt->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="fp" list="fplist" required>
                          <span class="bar"></span>
                          <label>FPU / Pemancar</label>
                          <datalist id="fplist">
                            <?php foreach ($fp->result() as $keyfp) { ?>
                              <option><?php echo $keyfp->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="k" list="klist" required>
                          <span class="bar"></span>
                          <label>Kamerawan</label>
                          <datalist id="klist">
                            <?php foreach ($k->result() as $keyk) { ?>
                              <option><?php echo $keyk->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>


                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="psu" list="psulist" required>
                          <span class="bar"></span>
                          <label>Penata Suara</label>
                          <datalist id="psulist">
                            <?php foreach ($psu->result() as $keypsu) { ?>
                              <option><?php echo $keypsu->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="pc" list="pclist" required>
                          <span class="bar"></span>
                          <label>Penata Cahaya</label>
                          <datalist id="pclist">
                            <?php foreach ($pc->result() as $keypc) { ?>
                              <option><?php echo $keypc->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="ocv" list="ocvlist" required>
                          <span class="bar"></span>
                          <label>Opr. Chargen/VTR</label>
                          <datalist id="ocvlist">
                            <?php foreach ($ocv->result() as $keyocv) { ?>
                              <option><?php echo $keyocv->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="mu" list="mulist" required>
                          <span class="bar"></span>
                          <label>Manajer Unit</label>
                          <datalist id="mulist">
                            <?php foreach ($mu->result() as $keymu) { ?>
                              <option><?php echo $keymu->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="eb" list="eblist" required>
                          <span class="bar"></span>
                          <label>Editor Berita</label>
                          <datalist id="eblist">
                            <?php foreach ($eb->result() as $keyeb) { ?>
                              <option><?php echo $keyeb->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="pa" list="palist" required>
                          <span class="bar"></span>
                          <label>Penata Artistik</label>
                          <datalist id="palist">
                            <?php foreach ($pa->result() as $keypa) { ?>
                              <option><?php echo $keypa->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="pse" list="pselist" required>
                          <span class="bar"></span>
                          <label>Penata Set</label>
                          <datalist id="pselist">
                            <?php foreach ($pse->result() as $keypse) { ?>
                              <option><?php echo $keypse->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>


                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" name="pg" list="pglist" required>
                          <span class="bar"></span>
                          <label>Pemandu Gambar</label>
                          <datalist id="pglist">
                            <?php foreach ($pg->result() as $keypg) { ?>
                              <option><?php echo $keypg->nama_rekan; ?></option>
                            <?php } ?>
                          </datalist>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                  <div class="col-md-12">
                      <div class="col-md-3">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="date" class="form-text" name="tg" required>
                          <span class="bar"></span>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <p>*Tanggal Acara Esok</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="date" class="form-text" name="tg2" required>
                          <span class="bar"></span>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <p>*Tanggal Acara Hari Ini</p>
                        </div>
                      </div>
                  </div>
                </div>

                      <div class="panel-footer">

                                <button class="btn btn-3d btn-info">
                                  <div>
                                    <span class="fa fa-print"> PRINT</span>
                                    <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                  </div>
                                </button>

                      </div>
                  </form>
                  </div>
                </div>
              </div>


          </div>
          <!-- end: content -->


<script>
  function modalEdit($idd, $desk, $tem, $ber, $kar, $sumb) {
    document.getElementById("idd").value  = $idd;
    document.getElementById("desk").value  = $desk;
    document.getElementById("tem").value  = $tem;
    document.getElementById("ber").value  = $ber;
    document.getElementById("kar").value  = $kar;
    document.getElementById("sumb").value  = $sumb;
    if ($tem=="" || $ber=="") {
      console.log("kosong")
    }
  }

  function modalEdit2($idac, $iddd, $j, $n, $d) {
    document.getElementById("idac").value  = $idac;
    document.getElementById("iddd").value  = $iddd;
    document.getElementById("ji").value  = $j;
    document.getElementById("ni").value  = $n;
    document.getElementById("di").value  = $d;
  }

  function modalEdit4($idst, $nst, $jst, $dst, $kst, $sst, $deskst) {
    document.getElementById("idst").value  = $idst;
    document.getElementById("nst").value  = $nst;
    document.getElementById("jst").value  = $jst;
    document.getElementById("dst").value  = $dst;
    document.getElementById("kst").value  = $kst;
    document.getElementById("sst").value  = $sst;
    document.getElementById("deskst").value  = $deskst;
  }

  function modalAdd($idddd) {
    document.getElementById("id2").value = $idddd;
  }  

  function modalEdit7($idd, $kar, $sumb) {
    document.getElementById("idesok").value  = $idd;
    document.getElementById("karesok").value  = $kar;
    document.getElementById("sumbesok").value  = $sumb;
  }

</script>