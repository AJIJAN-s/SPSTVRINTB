          <!-- start: Content -->
          <div id="content" class="profile-v1">
             <div class="col-md-12 col-sm-12 profile-v1-wrapper">
                <div class="col-md-12  profile-v1-cover-wrap" style="padding-right:0px;">
                    <div class="profile-v1-pp">
                      <img src="<?php echo base_url()?>asset/img/avatar.jpg"/>
                      <h2>Admin SPS TVRI NTB</h2>
                    </div>
                    <div class="col-md-12 profile-v1-cover">
                      <img src="<?php echo base_url()?>asset/img/bg1.jpg" class="img-responsive">
                    </div>
                </div>
             </div>
             <div class="col-md-12 col-sm-12 profile-v1-body">
                <div class="col-md-12">
                <div class="panel">
                  <div class="panel-heading"><h3>AKUN</h3></div>
                  <div class="panel-body">
                    <div class="col-md-12">
                      <?php  $rows = $this->db->query("SELECT * FROM user where username='".$this->session->username."' AND password='".$this->session->password."'")->row_array(); 
                      echo "
                        <div class=form-group>
                          <label class=col-sm-2 control-label text-right>Username</label>
                          <div class=col-sm-8><input style=color:#2196f3 type=text class=form-control value=$rows[username] disabled></div>
                        </div>
                        <br><br>
                        <div class=form-group>
                          <label class=col-sm-2 control-label text-right>Password</label>
                          <div class=col-sm-8><input style=color:#2196f3 type=text class=form-control value=$rows[password] disabled></div>
                        </div> "
                      ?>
                    </div>
                  </div>
                </div>
             </div>
           </div>
          </div>
          <!-- end: content -->