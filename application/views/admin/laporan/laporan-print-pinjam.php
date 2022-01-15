<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
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

<table class="table-data">
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
    <?php
    }
    ?>
    </tbody>
</table>
<script type="text/javascript">
window.print();
</script>
</body>
</html>