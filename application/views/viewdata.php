<div class="panel panel-default">
<?php foreach ($member->result() as $row) : ?>
    <div class="panel panel-heading">  <h3 style="text-align:center"> Profil Member <?php echo $row->nama_member ?> </h3 ></div>
    <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/Memberctrl/index"?>">
        <div class="panel-body">
                <input type="hidden" value="<?php echo $row->id ?>">
                <div class="form-group">
                    <label for="nama_member" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-12">
                        <input id="nama_member" type="text" class="form-control" name="nama_member" value ="<?php echo $row->nama_member?>"disabled >      
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-cm-2 control-label">Email</label>
                    <div class="col-sm-12">
                        <input id="email" type="email" class="form-control" name="email" value ="<?php echo $row->email?>"disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-12">
                        <input id="password" type="password" class="form-control" name="password"  value ="<?php echo $row->password?>"disabled>
                    </div>
                </div>
                <?php if($this->session->userdata('role')=="1"){ ?>
                <div class="form-group">
                    <label for="no_telpon" class="col-sm-2 control-label">No Telepon</label>
                    <div class="col-sm-12">
                        <input id="no_telpon" type="" class="form-control" name="no_telpon" value ="<?php echo $row->no_telpon?>"disabled>
                </div> 
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-12">
                        <input id="alamat" type="" class="form-control" name="alamat" value ="<?php echo $row->alamat?>"disabled>
                    </div> 
                </div>
                <div class="form-group">
                    <label for="role" class="col-sm-2 control-label">Role</label>
                    <div class="col-sm-12">
                        <select name="role" id="role" class="form-control select2" disabled>
                            <option name="role" id="role" value="">---Select Role---</option>
                            <option name="role" id="role" value="1" <?php echo $row->role == "1" ? 'selected' : '' ?> > Admin </option>
                            <option name="role" id="role" value="2" <?php echo $row->role == "2" ? 'selected' : '' ?>> Member </option>
                        </select>
                    </div>
                </div>   
               <?php } ?>                     
                <div class="form-group">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary pull-left">Back Home</button> </form>
                  </div>
                </div>
        <?php endforeach ?>
        </div>
</div>              
    