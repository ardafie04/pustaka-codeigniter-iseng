<div class="container-fluid">    
<?= $this->session->flashdata('pesan');?> 
	<div class="row">         
		<div class="col-lg-6">
		<?php if (validation_errors()) 
		{ ?>
			<div class="alert alert-danger" role="alert">
				<?= validation_errors(); ?>
			</div>
		<?php 
		} ?>
		<?= $this->session->flashdata('pesan'); ?>
		<?php foreach ($kategori as $k) 
		{ ?>
			<form action="<?= base_url('buku/ubahKategori'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="hidden" name="id" id="id" value="<?php echo $k['nama_kategori']; ?>">
					<input type="text" class="form-control-user form-control" id="kategori" name="kategori" placeholder="masukkan judul kategori" value="<?= $k['nama_kategori']; ?>">
				</div>
				<div class="form-group">
					<input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
					<input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
				</div>
			</form>
			<?php } ?>
		</div>
	</div>
</div>