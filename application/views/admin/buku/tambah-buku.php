<div class="container">
    <div class="row">

        <div class="col-lg-5 mt-3 mx-auto">
            <div class="card">
                <div class="card-body">
                <h5 class="text-center">Daftar</h5>
                <hr>
                    <form action="<?= base_url('buku/daftar'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group"> 
						<input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku"> 
					</div> 
					<div class="form-group"> 
						<select name="id_kategori" class="form-control form-control-user"> 
							<option value="">Pilih Kategori</option> 
								<?php 
								foreach ($kategori as $k) { ?> 
									<option value="<?= $k['id_kategori'];?>"><?= $k['id_kategori'];?></option> 
								<?php } ?> 
						</select> 
					</div> 
					<div class="form-group"> 
						<input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang"> 
					</div> 
					<div class="form-group"> 
						<input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit"> 
					</div>
					<div class="form-group"> 
						<select name="tahun" class="form-control form-control-user"> 
							<option value="">Pilih Tahun</option> 
								<?php 
								for ($i=date('Y'); $i > 1000 ; $i--) { ?> 
								<option value="<?= $i;?>"><?= $i;?></option> 
								<?php } ?> 
						</select> 
					</div> 
					<div class="form-group"> 
						<input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN"> 
					</div> 
					<div class="form-group"> 
						<input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok"> 
					</div> 
					<div class="form-group"> 
						<input type="file" class="form-control form-control-user" id="image" name="image"> 
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Tambah</button> 
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
								</div>