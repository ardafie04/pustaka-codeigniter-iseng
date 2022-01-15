<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
    <style type="text/css">
    .table-data{
        width: 100%;
        border-collapse: collapse;
    }

    .table-data tr th,
    .table-data tr td{
        border:1px solid black;
        font-size: 11pt;
        padding: 10px 10px 10px 10px;
    }
</style>
<h3><center>Laporan Data Peminjaman Perpustakaan Online</center></h3>
<br/>
<div class="table-responsive">
<table border=1>
                    <tr>
                        <th>#</th> 
                        <th>Nama Anggota</th> 
                        <th>Judul Buku</th> 
                        <th>Tanggal Pinjam</th> 
                        <th>Tanggal Kembali </th> 
                        <th>Tanggal Dikembalikan</th> 
                        <th>Total Denda</th>  
                        <th>Status</th> 
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($items as $b) {
                        foreach ($item as $a)?> 
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $b['name']; ?></td> 
                        <td><?= $a['judul_buku']; ?></td> 
                        <td><?= $b['tgl_pinjam']; ?></td>
                        <td><?= $b['tgl_kembali']; ?></td> 
                        <td><?= date('Y-m-d'); ?><input type="hidden" name="tgl_pengembalian" id="tgl_pengembalian" value="<?= date('Y-m-d'); ?>"></td> 
                        <td><?= $b['total_denda']; ?></td> 
                        <td><?= $b['status']; ?></td> 
                    </tr>
                    <?php $no++;
                    } 
                    ?>
                </table>
            </div>
</body></html>