<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('guru') ?>">guru</a></li>
               <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
	</div>


    <div class="content d-flex justify-content-center">
    		    	

					<div class="card" style="width: 50rem;">
			  	<div class="card-body">
			  		<center><h5>FORMULIR TAMBAH DATA GURU</h5></center>
			  		<?php 
	        	$attr =array('method' => 'post', 'autocomplete' => 'off', 'id' => 'guru_form');
	        	echo form_open('', $attr);
	         ?>
				  <div class="form-group">
				    <label for="nama">Nama</label> 
				    <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama guru" value="<?= set_value('nama')?>" >
				     <small class="text-danger"><?php echo form_error('nama')?></small>
				   
				  </div>

				  <div class="form-group">
							   <label for="nip">Nip</label>
				    <input type="text" id="nip" class="form-control" name="nip" placeholder="nip guru" value="<?= set_value('nip')?>">	
				    <small id="nipError" class="text-danger"><?php echo form_error('nip')?></small>
				  </div>
				  

				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" name="email" placeholder="Email guru" value="<?=set_value('email'); ?>">
				    <small class="text-danger"><?php echo form_error('email'); ?></small>
				  </div>

				   <div class="form-group">
				    <label for="nohp">No HP</label>
				    <input type="text" class="form-control" name="nohp" placeholder="No HP guru" value="<?php set_value('nohp'); ?>">
				    <small class="text-danger"><?php echo form_error('nohp') ?></small>


				  </div>


				   <div class="form-group">
				    <label for="mapel">Mapel</label>
				    <input type="text" class="form-control" name="mapel" placeholder="Mata Pelajaran" value="<?php set_value('mapel'); ?>">
				    <small class="text-danger"><?php echo form_error('mapel') ?></small>


				  </div>
				  <div class="form-group">
				    <label >Agama</label>
				    <select class="form-control" name="agama">
				      <option selected disabled>Agama</option>
				      <option <?php if(set_value('agama') == 'Islam'):
				      echo "selected";endif; ?>>Islam</option>
				      <option <?php if(set_value('agama') == 'Kristen'):
				      echo "selected";endif; ?>>Kristen</option>
				      <option <?php if(set_value('agama')=='Protestan'):
				      echo "selected";endif; ?>>Protestan</option>
				      <option <?php if(set_value('agama') == 'Hindu'):
				      echo "selected";endif; ?>>Hindu</option>
				      <option <?php if(set_value('agama')=='Buddha'):
				      echo "selected";endif; ?>>Buddha</option>
				      <option <?php if(set_value('agama')=='Atheis'):
				      echo "selected";endif; ?>>Atheis</option>
				    </select>
				    <small class="text-danger"><?php echo form_error('agama'); ?></small>
				  </div>

				  <div class="form-group">
				    <label >Jenis Kelamin</label>
				    <select class="form-control" name="jenis_kelamin">
				    	<option selected disabled>Jenis Kelamin</option>
				      <option <?php if(set_value('jenis_kelamin')=='Laki-Laki'):
				      echo "selected";endif; ?>>Laki-Laki</option>
				      <option <?php if(set_value('jenis_kelaim')=='Perempuan'):
				      echo "selected";endif; ?>>Perempuan</option>
				    </select>
				    <small class="text-danger"><?php echo form_error('jenis_kelamin') ?></small>
				  </div>
				

				  <div class="form-group">
				    <label>Alamat</label>
				    <textarea class="form-control" name="alamat" rows="3"><?= set_value('alamat');?></textarea><small class="text-danger"><?php form_error('alamat'); ?></small>
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