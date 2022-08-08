          <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">
                        <h3 class="animated fadeInLeft">Rekan & Tips</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Mataram, NTB, Indonesia</p>
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url();?>lainnya/rekankerja">Rekan Kerja</a></li>
                            <li><a href="<?php echo base_url();?>lainnya/tipsharian">Tips Harian</a></li>
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
                              Tambah <span class="fa-angle-right fa"></span><span class="text-info">
                              Lainnya</span>
                            </p>
                        </div>
                      </div>
                  </div>                                      
                </div>

<!-- start: Content -->
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>TIPS HARIAN</h3></div>
                    <div class="panel-body">
                      <div>
                        <! -- MODALS -->
                        <div class="showback">
                          <!-- Button trigger modal -->
                          <div>
                          <button style="margin-bottom: 5px" class="btn btn-gradient btn-success" data-toggle="modal" data-target="#myModal3"> Tambah
                          </button>
                          </div>            
                          <!-- Modal -->
                          <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
                                </div>
                                <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>lainnya/tambahtips">
                                  <div class="modal-body">
                                      <div class="form-group form-animate-text">
                                        <textarea class="form-text" id="validate_firstname" name="nmt" required></textarea>
                                        <span class="bar"></span>
                                        <label>Nama</label>
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
                              <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                    </div>
                                    <form class="cmxform" id="signupForm" method="post" action="<?php echo base_url();?>lainnya/edittips">
                                    <div class="modal-body">
                                      <div hidden="true">
                                        <input type="text" class="form-text" id="idt" name="idt2" required>
                                        <span class="bar"></span>
                                        <label>ID</label>
                                      </div>
                                      <div class="form-group form-animate-text">
                                        <textarea class="form-text" id="nmt" name="nmt2" required></textarea>
                                        <span class="bar"></span>
                                        <label>Nama</label>
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
                          <th>NAMA TIPS</th>
                          <th>EDIT</th>
                          <th>HAPUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach ($tips->result() as $key) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><font style="text-transform: uppercase;"><?php echo $key->nama_tips; ?></font></td>
                          <td>
                            <div style="margin-top:5px;">
                            <! -- MODALS -->
                            <div class="showback">
                              <!-- Button trigger modal -->
                              <button onclick="modalEdit2('<?php echo $key->idtips;?>','<?php echo $key->nama_tips;?>')" class="btn ripple btn-gradient btn-info" data-toggle="modal" data-target="#myModal4">
                                <div>
                                  <span class="fa fa-edit"></span>
                                  <span class="ink animated" style="height: 87px; width: 87px; top: -34.5px; left: 268.5px"></span>
                                </div>
                              </button>            
                            </div><!-- /showback -->
                            </div>
                          </td>
                          <td>
                            <div style="margin-top:5px;">
                              <a href="<?php echo base_url();?>lainnya/hapustips/<?php echo $key->idtips; ?>">
                              <button id="hapus" class="btn ripple btn-gradient btn-danger">
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
                    <div class="panel-footer">
                    </div>
                  </div>
                </div>
              </div>              
            </div>

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

  function modalEdit($idd,$nmm,$bdd) {
    document.getElementById("idd").value  = $idd;
    document.getElementById("nmm").value  = $nmm;
    document.getElementById("bdd").value  = $bdd;
  }
  
  function modalEdit2($idd,$nmm) {
    document.getElementById("idt").value  = $idd;
    document.getElementById("nmt").value  = $nmm;
  }  
</script>