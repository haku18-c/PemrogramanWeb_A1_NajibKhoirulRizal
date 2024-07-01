<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">siswa </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
	</div>



    <div class="content">
    		    	<!-- Button trigger modal -->
		<a href="<?=base_url('admin/tambah_siswa')?>" class="btn btn-primary">
	  <i class="fas fa-plus"></i> Tambah Siswa
		</a>
		<br><br>

    	<table class="table table-hover">
    	<thead>
    		<tr>
    			<th scope="col">No</th>
    			<th scope="col">Nama</th>
    			<th scope="col">Nisn</th>
    			<th scope="col">Jurusan</th>
    			<th scope="col">Email</th>
    			<th scope="col">No HP</th>
    			<th scope="col">Jenis Kelamin</th>
    			<th scope="col">Agama</th>
    			<th scope="col">Alamat</th>
    			<th scope="col"></th>
  
    		</tr>
    	</thead>
    	<tbody>
    		<?php $no=1;foreach($siswa as $sw): ?>
    		<tr>
    			<td scope="row"><?php echo $no++; ?> </td>
    			<td scope="row"><?php echo $sw->nama; ?></td>
    			<td scope="row"><?php echo $sw->nisn; ?></td>
    			<td scope="row"><?php echo $sw->jurusan; ?></td>
    			<td scope="row"><?php echo $sw->email; ?></td>
    			<td scope="row"><?php echo $sw->nohp; ?></td>
    			<td scope="row"><?php echo $sw->jenis_kelamin; ?></td>
    			<td scope="row"><?php echo $sw->agama; ?></td>
    			<td scope="row"><?php echo $sw->alamat; ?></td>
    			<td scope="row"><a href="<?php echo base_url('admin/edit_siswa/') . $sw->id;?>" class="btn btn-secondary" role="button"><i class="fas fa-edit"></i></a> 

    		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $no; ?>">
		  <i class="fas fa-trash"></i>
			</button>
					<div class="modal fade" id="exampleModal<?php echo $no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form action="<?php echo base_url('admin/hapus_siswa'); ?>" method="post">
		      		<input type="hidden" class="form-control"id="id" name="id" value=" <?= $sw->id; ?>">
		      		<p>Anda yakin ingin menghapus <?php echo $sw->nama; ?> dari daftar siswa?</p>
		      		<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
		      		<button type="submit" class="btn btn-primary">Lanjutkan</button>
		      	</form>  
		      </div>
		      <div class="modal-footer">
		        
		      </div>
		    </div>
		  </div>
		</div>

    		</tr>
    			<!-- Modal -->

    		
    		<?php endforeach;?>
    	</tbody>
    	</table>

    	<!-- Button trigger modal -->


	




</div>
</div>