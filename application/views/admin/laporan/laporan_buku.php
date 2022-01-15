<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
        <a href="<?= base_url('laporan/cetak_laporan_buku'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
                <a href="<?= base_url('laporan/buku_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download PDF</a>
                <a href="<?= base_url('laporan/export_excel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th> 
                        <th>Judul Buku</th> 
                        <th>Pengarang</th> 
                        <th>Penerbit</th> 
                        <th>Tahun Terbit</th> 
                        <th>ISBN</th> 
                        <th>Stok</th> 
                        <th>Dipinjam</th> 
                        <th>Dibooking</th> 
                    </tr>
                </thead>
                <tbody> 
                    <?php 
                    foreach ($buku as $b) { ?> 
                    <tr> 
                        <td><?= ++$start; ?></td> 
                        <td><?= $b['judul_buku']; ?></td> 
                        <td><?= $b['pengarang']; ?></td> 
                        <td><?= $b['penerbit']; ?></td>
                        <td><?= $b['tahun_terbit']; ?></td> 
                        <td><?= $b['isbn']; ?></td> 
                        <td><?= $b['stok']; ?></td> 
                        <td><?= $b['dipinjam']; ?></td> 
                        <td><?= $b['dibooking']; ?></td> 
                        </tr> 
                    <?php } ?> 
                </tbody> 
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->