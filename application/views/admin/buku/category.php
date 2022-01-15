<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-3">
        <a href="" data-toggle="modal" data-target="#kategoriBaruModal" class="btn btn-primary mb-3">Tambah Kategori</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th> 
                        <th>Nama Kategori</th>
                        <th>Action</th>  
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1 
                ?> 
                    <?php 
                    foreach ($kategori as $b) { ?> 
                    <tr> 
                        <td><?= $i++; ?></td>  
                        <td><?= $b['kategori']; ?></td>
                        <td>
                            <a href="<?= base_url('buku/hapuskategori/').$b['id_kategori'];?>" onclick="return confirm('Kamu yakin akan menghapus ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </td> 
                        </tr> 
                    <?php } ?> 
                </tbody> 
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>

    <div class="modal fade" id="kategoriBaruModal" tabindex="-1" role="dialog" aria-labelledby="kategoriBaruModalLabel" aria-hidden="true">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="kategoriBaruModalLabel">Tambah Kategori</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<form action="<?= base_url('buku/category'); ?>" method="post">
 				<div class="modal-body">
 					<div class="form-group">
 						<input type="text" class="form-control form-control-user" id="kategori" name="kategori" placeholder="Masukkan Nama Kategori">
 					</div>
 				</div>
 				<div class="modal-footer">
 					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
 					<button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
				 </div>
 			</form>
 		</div>
 	</div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->