<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=$title.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>
    <style type="text/css">
    .table-data{
    width: 100%;
    border-collapse: collapse;
    }
    .table-data tr th,
    .table-data tr td{
    border:1px solid black;
    font-size: 11pt;
    font-family:Verdana;
    padding: 10px 10px 10px 10px;
    }
    .table-data th{
    background-color:grey;
    }
    h3{
    font-family:Verdana;
    }
    </style>

<h3><center>LAPORAN DATA PEMINJAMAN BUKU</center></h3>
<br/>
    <table class="table-data" border=1>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Tanggal Pengembalian</th>
                <th>Total Denda</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
            foreach ($items as $b) {
                foreach ($item as $a)?> 
            <tr> 
                <td><?= $no; ?></td> 
                <td><?= $b['no_pinjam']; ?></td>
                <td><?= $b['name']; ?></td> 
                <td><?= $b['tgl_pinjam']; ?></td>
                <td><?= $b['tgl_kembali']; ?></td> 
                <td><?= date('Y-m-d'); ?><input type="hidden" name="tgl_pengembalian" id="tgl_pengembalian" value="<?= date('Y-m-d'); ?>"></td> 
                <td><?= $b['total_denda']; ?></td> 
                <td><?= $b['status']; ?></td> 
            </tr>
            <?php $no++;
                    } 
                    ?>
        </tbody>
</table>