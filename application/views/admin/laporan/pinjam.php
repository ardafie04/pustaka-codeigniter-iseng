<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
        <a href="<?= base_url('laporan/cetak_laporan_pinjam'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
        <a href="<?= base_url('laporan/laporan_pinjam_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download PDF</a>
        <a href="<?= base_url('laporan/export_excel_pinjam'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export Ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>                         
                    <th scope="col">Nama Anggota</th>                         
                    <th scope="col">Judul Buku</th>                         
                    <th scope="col">Tanggal Pinjam</th>                         
                    <th scope="col">Tanggal Kembali </th>                         
                    <th scope="col">Tanggal Dikembalikan</th>                         
                    <th scope="col">Total Denda</th>                         
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php
                    foreach ($items as $b) {
                    foreach ($item as $a)?> 
                    <tr> 
                        <td><?= ++$start; ?></td> 
                        <td><?= $b['name']; ?></td>                         
                        <td><?= $a['judul_buku']; ?></td>                         
                        <td><?= $b['tgl_pinjam']; ?></td>                         
                        <td><?= $b['tgl_kembali']; ?></td> 
                        <td>                        
                            <?= date('Y-m-d'); ?>
                            <input type="hidden" name="tgl_pengembalian" id="tgl_pengembalian" value="<?= date('Y-m-d'); ?>">                       
                        </td>
                        <td><?= $b['total_denda']; ?></td>                           
                        <td><?= $b['status']; ?></td> 
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