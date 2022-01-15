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
 h3{
 font-family:Verdana;
 }
</style>
<h3><center>Laporan Data Anggota Perputakaan Online</center></h3>
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
<p>Note :<br>
    Role 1 = Admin<br>
    Role 2 = Member
</p>
<script type="text/javascript">
window.print();
</script>
</body>
</html>