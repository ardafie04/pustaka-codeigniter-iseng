<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=$title.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>

<h3><center>Laporan Data Anggota Perpustakaan Online</center></h3>
<br/>
<table class="table-data">
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
    <?php $i = 1; ?>
    <?php 
        foreach ($anggota as $b) { ?> 
        <tr> 
            <td><?= $i++; ?></td>  
            <td><?= $b['name']; ?></td>
            <td><?= $b['address']; ?></td>  
            <td><?= $b['email']; ?></td>
            <td><?= $b['role_id']; ?></td>
            <td><?= date('d F Y', $b['date_created']); ?></td>   
            </tr> 
    <?php } ?> 
    </tbody>
</table>