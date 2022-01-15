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
<h3><center>Laporan Data Buku Perpustakaan Online</center></h3>
<br/>
<div class="table-responsive">
                <table border=1>
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
                    <?php
                    $no = 1;
                        foreach ($item as $b) {
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $b['judul_buku']; ?></td> 
                        <td><?= $b['pengarang']; ?></td> 
                        <td><?= $b['penerbit']; ?></td>
                        <td><?= $b['tahun_terbit']; ?></td> 
                        <td><?= $b['isbn']; ?></td> 
                        <td><?= $b['stok']; ?></td> 
                        <td><?= $b['dipinjam']; ?></td> 
                        <td><?= $b['dibooking']; ?></td> 
                    </tr>
                    <?php $no++;
                    } 
                    ?>
                </table>
            </div>
</body></html>