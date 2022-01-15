<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
        <a href="<?= base_url('laporan/cetak_laporan_anggota'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
        <a href="<?= base_url('laporan/anggota_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download PDF</a>
        <a href="<?= base_url('laporan/export_excel_anggota'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th> 
                        <th>Nama Anggota</th> 
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Tanggal Daftar</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php 
                    foreach ($anggota as $b) { ?> 
                    <tr> 
                        <td><?= ++$start; ?></td> 
                        <td><?= $b['name']; ?></td>
                        <td><?= $b['address']; ?></td>  
                        <td><?= $b['email']; ?></td>
                        <td><?= $b['role_id']; ?></td>
                        <td><?= date('d F Y', $b['date_created']); ?></td>   
                        </tr> 
                    <?php } ?> 
                </tbody> 
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->