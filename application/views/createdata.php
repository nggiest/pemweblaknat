<div class="panel panel-default">
    <div class="panel panel-heading">  <h3 style="text-align:center"> Create Member </h3 ></div>
    <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/Memberctrl/insert_member "?>">
        <div class="box-body">
            <div class="form-group">
                <label for="nama_member" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-9">
                    <input id="nama_member" type="text" class="form-control" name="nama_member" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-9">
                    <input id="email" type="email" class="form-control" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-9">
                    <input id="password" type="password" class="form-control" name="password"  required>
                </div>
            </div>
            <div class="form-group">
                <label for="no_telpon" class="col-sm-2 control-label">No Telepon</label>
                <div class="col-sm-9">
                    <input id="no_telpon" type="text" class="form-control" name="no_telpon">
                </div> 
            </div>
            <div class="form-group">
                <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-9">
                    <input id="alamat" type="" class="form-control" name="alamat">
                </div> 
            </div>
            <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Role</label>
                <div class="col-sm-9">
                    <select name="role" id="role" class="form-control select2">
                        <option name="role" id="role" value="">---Select Role---</option>
                        <option name="role" id="role" value="1"> Admin </option>
                        <option name="role" id="role" value="2"> Member </option>
                    </select>
                </div>
            </div>                           
                <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Create</button></form>
                </div>
        </div>
</div>              
    