<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('siswa'); ?>">Siswa</a></li>
               <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
	</div>


    <div class="content d-flex justify-content-center">
    		    	

					<div class="card" style="width: 50rem;">
			  	<div class="card-body">
			  		<center><h5>FORMULIR EDIT DATA SISWA</h5></center>
			  		<?php 
	        	$attr =array('method' => 'post', 'autocomplete' => 'off', 'id' => 'siswa_form');
	        	echo form_open('', $attr);
	         ?>
				  <div class="form-group">
				  	<input type="hidden" class="form-control"id="id" name="id" value=" <?= $siswa->id; ?>">
				    <label for="nama">Nama</label> 
				    <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama Siswa" value="<?= $siswa->nama;?>" >
				     <small class="text-danger"><?php echo form_error('nama')?></small>
				   
				  </div>

				  <div class="form-group">
							   <label for="nim">Nisn</label>
				    <input type="text" id="nisn" class="form-control" name="nisn" placeholder="Nisn Siswa" value="<?= $siswa->nisn;?>">	
				    <small id="nimError" class="text-danger"><?php echo form_error('nisn')?></small>
				  </div>
				  
				  <div class="form-group">
				    <label >Jurusan</label>
				    <select class="form-control" name="jurusan" id="jurusan">
				    <option selected disabled>Jurusan</option>
				      <option <?php if($siswa->jurusan == 'Teknik Komputer Jaringan'):echo "selected";endif; ?>>Teknik Komputer Jaringan</option>
				      <option <?php if($siswa->jurusan == 'Multimedia'):echo "selected";endif;  ?>>Multimedia</option>
				       <option <?php if($siswa->jurusan == 'Rekayasa Perangkat Lunak'):echo "selected";endif;  ?>>Rekayasa Perangkat Lunak</option>
				    </select>
				    <small class="text-danger"><?php echo form_error('jurusan') ?></small>
				  </div>

				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" name="email" placeholder="Email Siswa" value="<?=$siswa->email; ?>">
				    <small class="text-danger"><?php echo form_error('email'); ?></small>
				  </div>

				   <div class="form-group">
				    <label for="nohp">No HP</label>
				    <input type="text" class="form-control" name="nohp" placeholder="No HP Siswa" value="<?=$siswa->nohp ?>">
				    <small class="text-danger"><?php echo form_error('nohp') ?></small>


				  </div>

				  <div class="form-group">
				    <label >Agama</label>
				    <select class="form-control" name="agama">
				      <option selected disabled>Agama</option>
				      <option <?php if($siswa->agama == 'Islam'):
				      echo "selected";endif; ?>>Islam</option>
				      <option <?php if($siswa->agama == 'Kristen'):
				      echo "selected";endif; ?>>Kristen</option>
				      <option <?php if($siswa->agama=='Protestan'):
				      echo "selected";endif; ?>>Protestan</option>
				      <option <?php if($siswa->agama == 'Hindu'):
				      echo "selected";endif; ?>>Hindu</option>
				      <option <?php if($siswa->agama=='Buddha'):
				      echo "selected";endif; ?>>Buddha</option>
				      <option <?php if($siswa->agama=='Atheis'):
				      echo "selected";endif; ?>>Atheis</option>
				    </select>
				    <small class="text-danger"><?php echo form_error('agama'); ?></small>
				  </div>

				  <div class="form-group">
				    <label >Jenis Kelamin</label>
				    <select class="form-control" name="jenis_kelamin">
				    	<option selected disabled>Jenis Kelamin</option>
				      <option <?php if($siswa->jenis_kelamin=='Laki-Laki'):
				      echo "selected";endif; ?>>Laki-Laki</option>
				      <option <?php if($siswa->jenis_kelamin=='Perempuan'):
				      echo "selected";endif; ?>>Perempuan</option>
				    </select>
				    <small class="text-danger"><?php echo form_error('jenis_kelamin') ?></small>
				  </div>
				

				  <div class="form-group">
				    <label>Alamat</label>
				    <textarea class="form-control" name="alamat" rows="3"><?= $siswa->alamat;?></textarea><small class="text-danger"><?php form_error('alamat'); ?></small>
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