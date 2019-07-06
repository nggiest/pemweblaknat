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
	                <th>Action</th>
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
                    <td><a href= "<?php echo base_url()."index.php/Memberctrl/view/".$row['id']?>"> <button class="btn btn-success">  View  </button> </a> ||
                    <a href= "<?php echo base_url()."index.php/Memberctrl/delete/".$row['id']?>"> <button class="btn btn-success">  Delete  </button> </a>||
                    <a href="<?php echo base_url()."index.php/Memberctrl/edit/".$row['id']?>"> <button class="btn btn-success"> Edit  </button> </a> </td> 
    
	            </tr>
	            <?php
	            }
	            ?>

            </tbody>
         </table>
        <a href="<?php echo base_url()."index.php/memberctrl/insert/ "?>"> <button class="btn btn-success"> Create New Data </button> </a>
      </div>
            
            