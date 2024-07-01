<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ganti Password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('guru') ?>">guru</a></li>
               <li class="breadcrumb-item active">Ganti Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
	</div>


    <div class="content d-flex justify-content-center">
    		    	

					<div class="card" style="width: 50rem;">
			  	<div class="card-body">
			  		<center><h5>FORMULIR GANTI PASSWORD</h5></center>
			  		<?php 
	        	$attr =array('method' => 'post', 'autocomplete' => 'off', 'id' => 'gpass_form');
	        	echo form_open('', $attr);
	         ?>
				  <div class="form-group">
				    <label for="nama">Username</label> 
				    <input type="text" id="username" class="form-control" name="username" placeholder="Username">
				  </div>

				  <div class="form-group">
							   <label for="passwd_baru">Password Baru</label>
				    <input type="password" id="passwd" class="form-control" name="passwd_baru" placeholder="Password Baru">
				  </div>
				  

				  

				  <button type="reset" class="btn btn-danger">Reset</button>
	        		<button type="submit" class="btn btn-secondary">Simpan</button>
			</form>
    	</tbody>
    	</table>
				    
			  	</div>
					</div>
	        

</div>
</div>