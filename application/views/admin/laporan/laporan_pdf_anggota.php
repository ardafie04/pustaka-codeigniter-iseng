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
<h3><center>Laporan Data Anggota Perpustakaan Online</center></h3>
<br/>
<div class="table-responsive">
                <table border=1>
                    <tr>
                        <th>#</th> 
                        <th>Nama Anggota</th> 
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Tanggal Daftar</th>
                    </tr>
                    <?php
                    $no = 1;
                        foreach ($anggota as $b) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td> 
                        <td><?= $b['name']; ?></td>
                        <td><?= $b['address']; ?></td>  
                        <td><?= $b['email']; ?></td>
                        <td><?= $b['role_id']; ?></td>
                        <td><?= date('d F Y', $b['date_created']); ?></td>
                    </tr>
                    <?php $no++;
                    } 
                    ?>
                </table>
                <p>Note :<br>
                     Role 1 = Admin<br>
                        Role 2 = Member
                    </p>
            </div>
</body></html>