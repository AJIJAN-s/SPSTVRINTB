          <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">
                        <h3 class="animated fadeInLeft">Pola Penjadwalan Siaran</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Mataram, NTB, Indonesia</p>

                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url();?>Dash/hari/0">Senin</a></li>
                            <li><a href="<?php echo base_url();?>Dash/hari/1" class="active">Selasa</a></li>
                            <li><a href="<?php echo base_url();?>Dash/hari/2">Rabu</a></li>
                            <li><a href="<?php echo base_url();?>Dash/hari/3">Kamis</a></li>
                            <li><a href="<?php echo base_url();?>Dash/hari/4">Jumat</a></li>
                            <li><a href="<?php echo base_url();?>Dash/hari/5">Sabtu</a></li>
                            <li><a href="<?php echo base_url();?>Dash/hari/6">Minggu</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                          <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Mataram</h3>
                          <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
                        </div>
                        <div class="col-md-6 col-sm-6">
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
                              Dashboard <span class="fa-angle-right fa"></span> 
                              Pola Penjadwalan Siaran <span class="fa-angle-right fa"></span> <span class="text-info">
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

<!-- start: Content -->
            <!-- <div id="content"> -->
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><center><h3>PROGRAM dan BERITA</center></h3></div>
                    <div class="panel-body">
                      <div>
                        <! -- MODALS -->
                        <div class="showback">
                          <!-- Button trigger modal -->
                          <div>
                          <button style="margin-bottom: 5px" class="btn btn-gradient btn-success" data-toggle="modal" data-target="#myModal"> Tambah
                          </button>
                          </div>            
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
                                </div>
                                <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>Dash/tambah">
                                  <div class="modal-body">
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="validate_firstname" name="nm" required>
                                        <span class="bar"></span>
                                        <label>Nama Acara</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="validate_lastname" name="jm" list="jamlist" required>
                                        <span class="bar"></span>
                                        <label>Jam</label>
                                        <datalist id="jamlist">
                                          <?php foreach ($jamac->result() as $key) { ?>
                                          <option><?php echo $key->jam; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="validate_username" name="dr" list="durlist" required>
                                        <span class="bar"></span>
                                        <label>Durasi</label>
                                        <datalist id="durlist">
                                          <?php foreach ($durac->result() as $key) { ?>
                                          <option><?php echo $key->durasi; ?></option>
                                          <?php } ?>
                                        </datalist>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <select class="form-control" name="hr" id="pil" required>
                                          <option value="">silahkan pilih hari</option>
                                          <option value="0">senin</option>
                                          <option value="1">selasa</option>
                                          <option value="2">rabu</option>
                                          <option value="3">kamis</option>
                                          <option value="4">jumat</option>
                                          <option value="5">sabtu</option>
                                          <option value="6">minggu</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>              
                        </div><!-- /showback -->
                      </div>


                              <!-- Modal -->
                              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                    </div>
                                    <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>Dash/edit">
                                    <div class="modal-body">
                                      <div hidden="true">
                                        <input type="text" class="form-text" id="idd" name="id2" required>
                                        <span class="bar"></span>
                                        <label>ID</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="nmm" name="nm2" required>
                                        <span class="bar"></span>
                                        <label>Nama</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="jmm" name="jm2" required>
                                        <span class="bar"></span>
                                        <label>Jam</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <input type="text" class="form-text" id="drr" name="dr2" required>
                                        <span class="bar"></span>
                                        <label>Durasi</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <select class="form-control" name="hr2" id="hrr" required>
                                          <option value="">silahkan pilih hari</option>
                                          <option value="0">senin</option>
                                          <option value="1">selasa</option>
                                          <option value="2">rabu</option>
                                          <option value="3">kamis</option>
                                          <option value="4">jumat</option>
                                          <option value="5">sabtu</option>
                                          <option value="6">minggu</option>
                                        </select>
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
                      
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NO.</th>
                          <th>MATA ACARA</th>
                          <th>JAM</th>
                          <th>DURASI</th>
                          <!-- <th>ID</th> -->
                          <!-- <th>HARI</th> -->
                          <th>EDIT</th>
                          <th>HAPUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach ($acara->result() as $key) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><font style="text-transform: uppercase;"><?php echo $key->nama; ?></font></td>
                          <td><?php echo $key->jam; ?></td>
                          <td><?php echo $key->durasi; ?></td>
                          <!-- <td><?php echo $key->id; ?></td> -->
                          <!-- <td><?php echo $hari; ?></td> -->
                          <td>
                            <div style="margin-top:5px;" class="text-center">
                            <! -- MODALS -->
                            <div class="showback">
                              <!-- Button trigger modal -->
                              <button style="width: 50%" onclick="modalEdit('<?php echo $key->id;?>','<?php echo $key->nama;?>','<?php echo $key->jam;?>','<?php echo $key->durasi;?>','<?php echo $hari;?>')" class="btn ripple btn-gradient btn-info" data-toggle="modal" data-target="#myModal2">
                                <div>
                                  <span class="fa fa-edit"></span>
                                  <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                </div>
                              </button>              
                            </div><!-- /showback -->
                            </div>
                          </td>
                          <td>
                            <div style="margin-top:5px;" class="text-center">
                              <a href="<?php echo base_url();?>Dash/hapus/<?php echo $key->id; ?>/<?php echo $hari; ?>">
                              <button style="width: 50%" id="hapus" onclick="return deleteconfirm()" class="btn ripple btn-gradient btn-danger">
                                <div>
                                  <span class="fa fa-trash"></span>
                                  <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                </div>
                              </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
            <!-- </div> -->

          <!-- end: content -->
<script type="text/javascript">
  function Edit(){
    var selectedValue1 = document.getElementById("edit").value;
    window.location.href = "<?php echo base_url();?>Dash/edit";
  }
  function Hapus(){
    var selectedValue2 = document.getElementById("hapus").value;
    console.log(selectedValue2);
    // window.location.href = "<?php echo base_url();?>Dash/hapus/"+selectedValue2;
  }

  function modalEdit($idd,$nmm,$jmm,$drr,$hrr) {
    document.getElementById("idd").value  = $idd;
    document.getElementById("nmm").value  = $nmm;
    document.getElementById("jmm").value  = $jmm;
    document.getElementById("drr").value  = $drr;
    document.getElementById("hrr").value  = $hrr;
  }

  function deleteconfirm(){
    job=confirm("Are you sure to delete this ?");
    if(job!=true)
    {
        return false;
    }
  }
</script>