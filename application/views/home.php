<div class="card mb-3">
      <div class="card-header">
         <i class="fas fa-table">Data Member </i> </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
	            <tr>
					<th>No</th>
		            <th>Nama</th>
	                <th>Email</th>
	                <th>Role</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
						  <?php 
						  if($this->session->userdata('role') == '1') {
							  ?> <th colspan="3" text-align="center"> Action </th> <?php
						  }
						  else{ ?> <th>Action</th> <?php

						  }?>
						  
	                </tr>
             </thead>
                <tbody>
					<?php
	                $i=1;
	                foreach ($member as $row)
	               {	
                    ?>
	                <tr>
	                <td><?php echo $i++ ?> </td>
	                <td><?php echo $row['nama_member'] ?> </td>
	                <td><?php echo $row['email'] ?> </td>
	                <td><?php echo $row['role'] == '1' ? 'Admin' : 'Member'  ?> </td>		
	                <td><?php echo $row['no_telpon'] ?> </td>
	                <td><?php echo $row['alamat'] ?> </td>
                    <td><a href= "<?php echo base_url()."index.php/Memberctrl/view/".$row['id']?>"> <button class="btn btn-success" >  View  </button> </a> </td>
                    <td <?php echo $this->session->userdata('role') == '1'? '' : 'hidden'?>><a href= "<?php echo base_url()."index.php/Memberctrl/delete/".$row['id']?>"> <button class="btn btn-success">  Delete  </button> </a> </td>
                    <td <?php echo $this->session->userdata('role') == '1'? '' : 'hidden'?>> <a href="<?php echo base_url()."index.php/Memberctrl/edit/".$row['id']?>"> <button class="btn btn-success"> Edit  </button> </a> </td> </td>
    
	            </tr>
	            <?php
	            }
	            ?>

            </tbody>
         </table>
		  <a href="<?php echo base_url()."index.php/memberctrl/insert/ "?>"> <button class="btn btn-success"> Create New Data </button> </a>
		  <br>
		  <a href="<?php echo base_url()."index.php/memberctrl/cetak/" ?>"> <button class="btn btn-success"> Download Data </button> </a>
      </div>
            
            