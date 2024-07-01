<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">guru </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
	</div>



    <div class="content">
    		    	<!-- Button trigger modal -->
		<a href="<?=base_url('admin/tambah_guru')?>" class="btn btn-primary">
	  <i class="fas fa-plus"></i> Tambah guru
		</a>
		<br><br>

    	<table class="table table-hover">
    	<thead>
    		<tr>
    			<th scope="col">No</th>
    			<th scope="col">Nama</th>
    			<th scope="col">Nip</th>
    			<th scope="col">Email</th>
    			<th scope="col">No HP</th>
    			<th scope="col">Mata Pelajaran</th>
    			<th scope="col">Jenis Kelamin</th>
    			<th scope="col">Agama</th>
    			<th scope="col">Alamat</th>
    			<th scope="col"></th>
  
    		</tr>
    	</thead>
    	<tbody>
    		<?php $no=1;foreach($guru as $gr): ?>
    		<tr>
    			<td scope="row"><?php echo $no++; ?> </td>
    			<td scope="row"><?php echo $gr->nama; ?></td>
    			<td scope="row"><?php echo $gr->nip; ?></td>
    			<td scope="row"><?php echo $gr->email; ?></td>
    			<td scope="row"><?php echo $gr->nohp; ?></td>
    			<td scope="row"><?php echo $gr->mapel; ?></td>
    			<td scope="row"><?php echo $gr->jenis_kelamin; ?></td>
    			<td scope="row"><?php echo $gr->agama; ?></td>
    			<td scope="row"><?php echo $gr->alamat; ?></td>
    			<td scope="row"><a href="<?php echo base_url('admin/edit_guru/') . $gr->id;?>" class="btn btn-secondary" role="button"><i class="fas fa-edit"></i></a> 

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
		      	<form action="<?php echo base_url('admin/hapus_guru'); ?>" method="post">
		      		<input type="hidden" class="form-control"id="id" name="id" value=" <?= $gr->id; ?>">
		      		<p>Anda yakin ingin menghapus <?php echo $gr->nama; ?> dari daftar guru?</p>
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